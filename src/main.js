import Vue from 'vue'
import VueRouter from 'vue-router' // responsavel por ligações e rotas entre paginas

import VueMaterial from 'vue-material' // biblioteca de .css baseada em Material Design
import 'vue-material/dist/vue-material.css'

import firebase from 'firebase'
import firebaseui from 'firebaseui'
import router from './router'
import {config} from './helpers/firebaseConfig'

// importação das paginas
import App from './App'

// exigindo que o Vue use os componentes importados
Vue.use(VueMaterial)
Vue.use(VueRouter)
Vue.use(firebaseui)

// Configurações das cores a serem usadas pelo Vue Material
// de acordo com Pallet do Material Design
Vue.material.registerTheme('default', {
  primary: {
    color: 'teal',
    hue: 600,
    textColor: 'white'
  },
  secundary: {
    color: 'white',
    textColor: 'black'
  },
  icons: {
    color: 'white',
    hue: 100
  },
  background: {
    color: 'grey',
    hue: 200
  }
})

Vue.config.productionTip = false

new Vue({
  router,
  created () {
    firebase.initializeApp(config)
    firebase.auth().onAuthStateChanged((user) => {
      if (user) {
        this.$router.push('/success')
      } else {
        this.$router.push('/auth')
      }
    })
  },
  el: '#app',
  render: h => h(App)
})
