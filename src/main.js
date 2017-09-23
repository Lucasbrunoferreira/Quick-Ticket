import Vue from 'vue'
import VueRouter from 'vue-router' // responsavel por ligações e rotas entre paginas

import VueMaterial from 'vue-material' // biblioteca de .css baseada em Material Design
import 'vue-material/dist/vue-material.css'

// importação das paginas
import App from './App'
import Page1 from './components/page1.vue'
import Page2 from './components/page2.vue'

// exigindo que o Vue use os componentes importados
Vue.use(VueMaterial)
Vue.use(VueRouter)

// definindo as rotas a serem renderizadas pelos componentes
const routes = [
  { path: '/page1', component: Page1 },
  { path: '/page2', component: Page2 }
]

// definindo struct routes em apenas uma const
const router = new VueRouter({
  routes
})

// Configurações das cores a serem usadas pelo Vue Material
Vue.material.registerTheme('default', {
  primary: 'teal',
  accent: 'green',
  warn: 'light-green',
  background: 'white'
})

// Inicialização e Renderização das pages
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
