import AppStorage from "./AppStorage";
import Token from "./Token";


class User {

    login(data) {
        axios.post('api/auth/login',data)
        .then(res => this.responseAfterLogin(res))
          //  console.log(res.data.access_token)
        .catch(err => {
            console.error(err);
        })
    }

    responseAfterLogin(res){
        const access_token = res.data.access_token;
        const username = res.data.user;
        if(Token.isValid(access_token)){
            AppStorage.store(username,access_token)
        }
        // Token.paylod(res.data.access_token)
    }
    hasToken(){
       const storedToken = AppStorage.getToken()
      // console.log(storedToken)
       if(storedToken) {
           return Token.isValid(storedToken) ? true : false
        }
        return false;
    }
    loggedIn(){
        return this.hasToken()
    }
    logout(){
        AppStorage.clear()
    }
    name(){
        if(this.loggedIn()){
            return AppStorage.getUser()
        }
    }
    id(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }

}
export default User = new User();
