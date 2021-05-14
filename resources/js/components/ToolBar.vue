<template>
  <v-toolbar :dense="true" :flat="true" :color="'blue darken-4'" :dark="true">
      <v-toolbar-title>Nyembo Sa</v-toolbar-title>
<v-spacer></v-spacer>
  <div class="hidden-sm-and-down">
    <v-btn text>Dashboard</v-btn>
    <v-btn text>Forum</v-btn>
    <v-btn text>Ask Question</v-btn>
    <v-btn text>Category</v-btn>
  </div>

   <v-spacer></v-spacer>

  <div>
    <router-link to="/login">
    <v-btn text>Login</v-btn>
    </router-link>
    <v-btn text>Logout</v-btn>
  </div>
</v-toolbar>

</template>


<script>
export default {

}
</script>

<style>

</style>
