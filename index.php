<?php
  require_once "config.php";
 ?>
<!-- Front End -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sistema auxilidar empresarial"> <!--Descrição do Site -->
  <meta name="keywords" content="sistema, empresa, TI, tickets, sistema web,"/> <!--Chaves de busca -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1."/>
  <title>Quick Ticket - Entrar</title>

  <!--  Desativar toque destaque no IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Manifesto de Aplicação Web -->
  <link rel="manifest" href="manifest.json">

  <!-- Adicione à tela inicial do Chrome no Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Web Starter Kit">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Adicione à tela inicial o Safari no iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
  <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

  <!-- Icone azulejo Win8 (144x144 + cor azulejo) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#2F3BA2">

  <!-- Cor da barra de status em dispositivos móveis -->
  <meta name="theme-color" content="#02203c">

  <!-- Material Icones  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonte de boas vindas  -->
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <!-- Folhas de estilos  -->
  <link href="styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body id="login-wall">
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="center">
        <img  src="images/quick-ticket.png">
      </div>
    </div>
  </div>
  <br>
    <div class="container">
    <div class="row center">
      <div class="col s12 m6 offset-m3">
        <div class="card small z-depth-3" id="card-login">
          <br><span class="card-title" id="bem-vindo">Seja Bem Vindo !</span>
          <div class="row center">
            <form class="" method="POST" action="solicitacao.php">
                <br>
              <div class="input-field col s8 m8 l10 offset-m1 offset-s1 offset-l1">
                <i class="material-icons prefix icon_color_login" >email</i>
                <input id="icon_prefix email email" name="email" required value="" type="email" class="validate">
                <label for="icon_prefix">Email</label>
              </div>
              <div class="input-field col s8 m8 l10 offset-m1 offset-s1 offset-l1">
                <i class="material-icons prefix icon_color_login">lock</i>
                <input id="icon_prefix senha" name="senha" type="password" required value="" class="validate">
                <label for="icon_prefix">Senha</label>
              </div>
              <div class="row">
                  <button class="btn waves-effect waves-light   light-blue darken-4" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
                <br><br><br>

                <div class="fixed-action-btn toolbar">
                  <a class="btn-floating btn-large  light-blue darken-4 pulse">
                    <i class="large material-icons">feedback</i>
                  </a>
                  <ul>
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">create</i></a></li> <!-- Entrar em contato -->
                    <li class="waves-effect waves-light"><a href="cadastro.php"><i class="material-icons">supervisor_account</i></a></li> <!-- Criar uma conta -->
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">bug_report</i></a></li> <!-- Reportar bug -->
                  </ul>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="scripts/materialize.js"></script>
      <script src="scripts/init.js"></script>
      <script src="scripts/main.js"></script>

    </body>

    </html>
