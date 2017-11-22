<?php
  session_start();

  require_once('config.php');

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=2');
  }
?>

  <html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistema de tickets">
    <!--Descrição do Site -->
    <meta name="keywords" content="sistema, empresa, TI, tickets, sistema web," />
    <!--Chaves de busca -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1." />
    <title>Quick Ticket - Novo Ticket</title>

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
    <meta name="theme-color" content="#161616">

    <!-- Material Icones  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonte de boas vindas  -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Folhas de estilos  -->
    <link href="styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  </head>

  <body id="body-page-inicio">
    <nav id="nav-page-inicio">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left">
          <img id="logo-page-inicio" src="images/logo_quick.png">
        </a>
        <span id="user-name">
          <?php echo $_SESSION['nome']; ?>
        </span>
        <ul class="right barra-icons">
          <li>
            <a href="logout.php">
              <i class="material-icons" style="color:#9c9c9c;font-size:2.5em;">exit_to_app</i>
            </a>
          </li>
          <li id="sub-bar">
            <img id="profile-photo" class="circle" src="images/profile.jpg">
          </li>
        </ul>
      </div>
    </nav>
    <div id="sub-nav">
      <div class="row">
        <div class="col m1 l1" id="icon-cargo">
          <i class="material-icons" style="color:#363636;width:20px!important">work</i>
        </div>
        <div class="col s5 m4 l4" id="cargo">
          <h6>
            <?php echo $_SESSION['cargo']; ?> </h6>
        </div>
        <div class="col ofsset-m1 m6 s5 l6" id="add-ticket" style="color:#fff;padding-top:10px;">
          <a href="inicio.php" style="color:#fff;">
            <i class="material-icons" style="vertical-align: middle;">keyboard_return</i> Inicio</a>
        </div>
      </div>
    </div>

    <div class="row form-ticket">
      <form id="form_ticket" class="col offset-s1 s10 offset-m2 offset-l2 ">
        <div class="row">
          <div class="input-field col l9 s11 m9">
            <i class="material-icons prefix" style="color#343434;">local_offer</i>
            <input type="text" id="texto_ticket" name="texto_ticket">
            <label for="icon_prefix2">Solicitação</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s11 l4 m4  ">
            <i style="color#343434;" class="material-icons prefix">work</i>
            <select name="destino">
              <option value="" disabled selected>Destino</option>
              <option value="Administrador">Administrador</option>
              <option value="TI">TI</option>
              <option value="Recepcionista">Recepcionista</option>
              <option value="Secretaria">Secretaria</option>
              <option value="Pronto Socorro">Pronto Socorro</option>
              <option value="Pronto Atendimento">Pronto Atendimento</option>
              <option value="Farmaceutico(a)">Farmaceutico(a)</option>
              <option value="Cozinha">Cozinha</option>
              <option value="Raio X">Raio X</option>
              <option value="Resonancia">Resonancia</option>
              <option value="Tesouraria">Tesouraria</option>
              <option value="Secretaria">Secretaria</option>
              <option value="Gerente Comercial">Gerente Comercial</option>
              <option value="PBAX">PBAX</option>
              <option value="Faturamento">Faturamento</option>
              <option value="Auditoria">Auditoria</option>
              <option value="RH">RH</option>
              <option value="Bloco Cirurgico">Bloco Cirurgico</option>
              <option value="Consultorio">Consultorio</option>
            </select>
          </div>

          <div class="input-field col   offset-m1 offset-l1 s11 l4 m4  ">
            <i style="color#343434;" class="material-icons prefix">label</i>
            <select name="prioridade">
              <option value="" disabled selected>Prioridade</option>
              <option value="Normal">Normal</option>
              <option value="Urgente">Urgente</option>
            </select>
         </div>
        </div>
    </div>

    <div class="row">
      <div class="col offset-l2 offset-l5 offset-m5 offset-s3 m4 l4">
        <button class="btn waves-effect waves-light" id="btn-ticket" style="background:#4B78B1;" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
      </div>
      </form>
    </div>
    </div>


  </body>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="scripts/materialize.js"></script>
  <script src="scripts/init.js"></script>
  <script src="scripts/main.js"></script>

  <script type="text/javascript">

  </script>

  </html>