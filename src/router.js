import VueRouter from 'vue-router'
import Auth from './components/Auth.vue'
import AuthSuccess from './components/AuthSuccess.vue'

// Importação de Paginas para uso Globais
import Page1 from './components/page1.vue'

const router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: Auth },
    { path: '/auth', component: Auth },
    { path: '/success', component: AuthSuccess },
    { path: '/page1', component: Page1 }

  ]
})
export default router
