<?php

  $concluir = isset($_GET['concluir']) ? $_GET['concluir'] : 0;

  require_once('config.php');
  require_once('contagens.php');

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=2');
  }

  if($concluir > 0){
    
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM ticket WHERE id_ticket='$concluir'";
    $resultado_id = mysqli_query($link, $sql);

  }

?>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sistema auxilidar empresarial"> <!--Descrição do Site -->
  <meta name="keywords" content="sistema, empresa, TI, tickets, sistema web,"/> <!--Chaves de busca -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1."/>
  <title>Quick Ticket - Inico</title>

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
  <link href="styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

  <body id="body-page-inicio">

    <nav id="nav-page-inicio" style=" background:#343434;">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left"><img id="logo-page-inicio" src="images/logo_quick.png"></a>
        <span id="user-name"> <?php echo $_SESSION['nome']; ?></span>
        <ul class="right barra-icons">
          <li><a href="logout.php"><i class="material-icons" style="color:#9c9c9c;font-size:2.5em;">exit_to_app</i></a></li>
          <li id="sub-bar"><img id="profile-photo" class="circle" src="images/profile.jpg"></li>
        </ul>
      </div>
    </nav>

  <div id="sub-nav">    
    <div class="row">
      <div class="col m1 l1" id="icon-cargo">
        <i class="material-icons" style="color:#363636;width:20px!important">work</i>
      </div>
       <div class="col s5 m4 l4" id="cargo">
         <h6> <?php echo $_SESSION['cargo']; ?> </h6>
      </div>
      <div class="col m6 s5 l6" id="add-ticket" style="color:#fff;padding-top:10px;"><a href="novo_ticket.php" style="color:#fff;"> <i class="material-icons" style="vertical-align: middle;">playlist_add</i> Novo Ticket</a></div>
     </div>
   </div>
  </div>
 
      <div class="row" style="padding:3% 0%;">
        <div class="col offset-m1 offset-l1 s12 m10 l10 ">
         <div class="valign-wrapper">
             <div class="col offset-l1 offset-m1 offset-s1">
              <a href="inicio.php">
                <i class="material-icons small icon_color_login">move_to_inbox</i>
                <span style="font-size:2.3em;"> <b> <?= $qtde_ticket ?> </b></span>
              </a>
             </div>
              <div class="col offset-l3 offset-m3 offset-s2"> 
                <i class="material-icons small icon_color_login">warning</i>
                <span style="font-size:2.3em;"> <b> <?= $qtde_ticket_urgente ?> </b></span><br>
             </div>
             <div class="col offset-l3 offset-m3 offset-s2">
                <a href="enviados.php">
                <i class="material-icons small icon_color_login">screen_share</i>
                <span style="font-size:2.3em;"> <b> <?= $qtde_ticket_enviados ?> </b></span>   
                 </a>          
             </div>
         </div>
        </div>
      </div>

   <div id="corpo-inicio">
    <div class="row">
       <div class="col offset-l4 offset-m4 offset-s2 s8 m4 l3 card center-align card-titulo"><h5><b>Tickets Urgentes</b></h5></div>
      <ul class="collapsible popout col offset-l3 offset-m2 s12 m8 l6" id="urgentes" data-collapsible="accordion"></ul>
      
    </div>
   </div>
    



  </body>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/materialize.js"></script>
    <script src="scripts/init.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/service-init.js" async></script>
</html>