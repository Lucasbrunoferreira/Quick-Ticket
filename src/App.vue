<template> <!-- Onde receba todos arquivos html -->
  <main class="phone-viewport">
    <!-- Barra de Tarefas -->
    <md-toolbar>
      <md-button class="md-icon button" v-on:click.native="toggleLeftSidenav">
        <md-icon>menu</md-icon>
      </md-button>
      <h1 class="md-title">{{ title }}</h1>
    </md-toolbar>

    <!-- Menu Lateral -->
    <md-sidenav class="md-left" ref="leftSidenav">
      <md-toolbar class="md-medium">
        <div class="md-toolbar-container">
          <h3 class="md-title">Conteudo da sidebar</h3>
        </div>
      </md-toolbar>
      <!-- Opções do menu -->
      <md-list>
        <md-list-item v-on:click.native="toggleLeftSidenav">
          <router-link to="/page1">Page1</router-link>
        </md-list-item>
        <md-list-item v-on:click.native="toggleLeftSidenav">
          <router-link to="/page2">Page2</router-link>
        </md-list-item>
        <md-list-item>Sair</md-list-item>
      </md-list>
    </md-sidenav>

    <md-row>
      <router-view></router-view>
    </md-row>

  </main>
</template>


<script> // Onde recebera todo JavaScript
export default {
  name: 'app',

  data () {
    return {
      title: 'Sistemas de Solicitações'
    }
  },
  methods: {
    toggleLeftSidenav () {
      this.$refs.leftSidenav.toggle()
    }
  }
}

</script>

<style> /* Onde recebera todo .css  */
</style>
