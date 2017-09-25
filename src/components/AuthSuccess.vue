<template lang="html">
  <div>
    <SideMenu></SideMenu>
    <md-button class="md-raised md-primary" v-on:click='logOut'>{{name}}</md-button>
  </div>
</template>

<script>
import SideMenu from './sidemenu'
import firebase from 'firebase'

export default {
  components: {
    SideMenu
  },
  data () {
    return {
      photo: '',
      userId: '',
      name: '',
      email: '',
      user: {}
    }
  },
  created () {
    this.user = firebase.auth().currentUser
    if (this.user) {
      this.name = this.user.displayName
      this.email = this.user.email
      this.photo = this.user.photoURL
      this.userId = this.user.uid
    }
  },
  methods: {
    logOut () {
      firebase.auth().signOut()
    }
  }
}
</script>

<style lang="css">
</style>
