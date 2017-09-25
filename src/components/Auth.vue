<template lang="html">
  <main class="phone-viewport">
    <md-layout md-gutter>
        <header id="header"></header>
    </md-layout>
    <md-layout md-gutter>
      <md-layout md-align="center" id="inicio">
        <img id="logo-img" src="../assets/quick-ticket.png">
      </md-layout>
    </md-layout>
    <md-layout md-gutter>
      <md-layout md-align="center">
        <span class="card-login">
          <div id="msg-bv">Seja Bem Vindo!</div>
          <div id="firebaseui-auth-container"></div>
        </span>
      </md-layout>
      </md-layout>
  </main>
</template>

<script>
import firebase from 'firebase'
import firebaseui from 'firebaseui'
import {config} from '../helpers/firebaseConfig'

export default {
  name: 'auth',
  componentes: {

  },
  mounted () {
    var uiConfig = {
      signInSuccessUrl: '/success',
      signInOptions: [
        firebase.auth.GoogleAuthProvider.PROVIDER_ID,
        firebase.auth.EmailAuthProvider.PROVIDER_ID
      ]
    }
    var ui = new firebaseui.auth.AuthUI(firebase.auth())
    ui.start('#firebaseui-auth-container', uiConfig)
  }
}
</script>

<style lang="css">
  .card-login{
   background-color: #fff !important;
   box-shadow: 3px 3px 3px 3px rgba(0,0,0,0.5);
   height: 220px;
   width: 300px;
  }
  #msg-bv{
    font-family: 'Pacifico', cursive;
    color: #004D40;
    font-size: 1.6em;
    padding-top: 1em;
    padding-left: 2.8em;

  }
  #inicio{
    height: 13em;
  }
  #logo-img{
    height: 8em;
    width: auto;
  }
  #header{
    height: 7em;
  }
  #firebaseui-auth-container{
    padding-top: 1.4em;
  }
  body{
    background-color: #004D40 !important;
  }
</style>
