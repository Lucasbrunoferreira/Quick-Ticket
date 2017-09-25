<template>
  <div>
    <SideMenu></SideMenu>
    <CompLogin></CompLogin>
    <h1>Hello</h1>
  </div>
</template>

<script>

import SideMenu from './sidemenu'
import CompLogin from './compLogin.vue'

export default {
  components: {
    SideMenu,
    CompLogin
  }
}
</script>

<style lang="css">
</style>
