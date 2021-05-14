<template>
<div>
  <tool-bar></tool-bar>
  <router-view></router-view>
  <app-footer></app-footer>
</div>
</template>

<script>
import ToolBar from './ToolBar.vue'
import AppFooter from './AppFooter.vue'
import Login from './login/Login.vue'
export default {
  components: { ToolBar,AppFooter, Login },

}
</script>

<style>

</style>
