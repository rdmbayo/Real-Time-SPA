<template>

<v-container grid-list-lg>


  <v-form
    ref="form"
@submit.prevent="login"
  >


    <v-text-field
      v-model="form.email"
      type="email"
      label="E-mail"
      required
    ></v-text-field>

    <v-text-field
      v-model="form.password"
      type="password"
      label="Password"
      required
    ></v-text-field>


    <v-btn

      color="green"
      type="submit"
      class="mr-4"

    >
      Login
    </v-btn>


  </v-form>
</v-container>
</template>

<script>
export default {
data(){
    return  {
        form :{
            email : null,
            password: null
        }
    }
},
methods: {
    login() {
        axios.post('api/auth/login',this.form)
        .then(res => {
            console.log(res)
        })
        .catch(err => {
            console.error(err);
        })
    }
}
}
</script>

<style>

</style>
