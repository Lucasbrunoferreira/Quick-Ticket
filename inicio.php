<?php
  session_start();

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=2');
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
<<<<<<< HEAD
  <body id="body-page-inicio">
  <nav id="nav-page-inicio">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo left"><img id="logo-page-inicio" src="images/logo_quick.png"></a>
      <span id="user-name">Lucas Bruno Ferreira</span>
      <ul class="right barra-icons">
        <li><a href=""><i class="material-icons" style="color:#9c9c9c;font-size:2.5em;">exit_to_app</i></a></li>
        <li id="sub-bar"><img id="profile-photo" class="circle" src="images/profile.jpg"></li>
      </ul>
    </div>
  </nav>
  <div id="sub-nav">   
    <div class="row">
      <div class="col m1 l1" id="icon-cargo">
        <i class="material-icons" style="color:#363636;width:20px!important">work</i>
=======
<body id="register-wall">
    <nav>
      <div class="nav-wrapper light-blue darken-4">
        <span class="right">
          <img src="images/profile.jpg" alt="" class="center-align circle" style="margin:7px 30px 0px 0px;height:45px;width:auto";>
        </span>
        <span class="right" style="margin:0px 30px 0px 0px;">
          <?php echo $_SESSION['nome']; ?>
          <span>  -  </span>
          <?php echo $_SESSION['cargo']; ?>
        </span>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="sass.html"></a></li>
          <li><a href="badges.html">Pagina 1</a></li>
          <li><a href="collapsible.html">Pagina 2</a></li>
          <li><a href="mobile.html">Pagina 3</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">Pagina 1</a></li>
          <li><a href="badges.html">Pagina 2</a></li>
          <li><a href="collapsible.html">Pagina 3</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="section" style="margin-top:40px;">
        <div class="row">
          <div class="offset-m1 col s4 m3">
            <div class="card horizontal z-depth-3 center-align" style="background:#4f83cc;">
              <div class="card-image">
                <i class="large material-icons" style="background-color:#fff; color:#28528e">playlist_add</i>
              </div>
              <span class="white-text" style="font-size: 3em;margin: 10px 70px">6</span>
            </div>
          </div>
          <div class="col s4 m3">
            <div class="card horizontal z-depth-3 center-align" style="background:#4f83cc;">
              <div class="card-image">
                <i class="large material-icons" style="background-color:#fff; color:#28528e">clear_all</i>
              </div>
              <span class="white-text" style="font-size: 3em;margin: 10px 70px">2</span>
            </div>
          </div>
          <div class="col s4 m3">
            <div class="card horizontal z-depth-3 center-align" style="background:#4f83cc;">
              <div class="card-image">
                <i class="large material-icons" style="background-color:#fff; color:#28528e">playlist_add_check</i>
              </div>
              <span class="white-text" style="font-size: 3em;margin: 10px 70px">17</span>
            </div>
          </div>
        </div>
      </div>

      <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
      </ul>
      
      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large" style="background-color:#001f71">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">add</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
>>>>>>> 5fd680d442e52d48345269eb23d5b263d9027fb7
      </div>
       <div class="col s5 m4 l4" id="cargo">
         <h6>Sala de Cirurgia</h6>
      </div>
      <div class="col ofsset-m1 m6 s5 l6" id="add-ticket" style="color:#fff;padding-top:10px;"> <i class="material-icons" style="vertical-align: middle;">playlist_add</i> Novo Ticket</div>
     </div>
   </div>>
     <div class="col ofsset-m1 m10" id="corpo-inicio">
   </div>
    



<<<<<<< HEAD
  </body>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="scripts/materialize.js"></script>
    <script src="scripts/init.js"></script>

</html>
=======
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="scripts/materialize.js"></script>
      <script src="scripts/init.js"></script>

    </body>

    </html>
>>>>>>> 5fd680d442e52d48345269eb23d5b263d9027fb7
