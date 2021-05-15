class AppStorage {
    storeToken(token_){
         localStorage.setItem('token',token_)
    }
    storeUser(user){
        localStorage.setItem('user',user)
    }
    store(user,token_) {
        this.storeToken(token_)
        this.storeUser(user)
    }
    clear(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
    }
    getToken() {
        return localStorage.getItem('token')
    }
    getUser() {
        return localStorage.getItem('user')
    }
}

export default AppStorage = new AppStorage()
