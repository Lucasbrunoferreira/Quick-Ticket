<?php
//Conecção com o banco de Dados
require_once "config.php";

//Inicia Sessão
session_start();

//Confere se as variaveis estão com valores dentro caso contrario o codigo ira zerar as variaveis e mandar o espertinho para a page inicial.
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['senha']);
header('location:index.php');
}

//Pega o email preenchido pelo usuario logado e busca o seu nome completo atraves do banco de dados.
$email = $_SESSION['email'];

$busca = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$dado = mysql_fetch_array($busca);
$nome = $dado['nome'];

?>


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
  <meta name="theme-color" content="#023f77">

  <!-- Material Icones  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fonte de boas vindas  -->
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <!-- Folhas de estilos  -->
  <link href="styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body id="register-wall">
    <nav>
      <div class="nav-wrapper light-blue darken-4">
        <span class="right">
          <img src="images/profile.jpg" alt="" class="center-align circle" style="margin:7px 30px 0px 0px;height:45px;width:auto";>
        </span>
        <span class="right" style="margin:0px 30px 0px 0px;">
          <?php echo $nome; ?>
        </span>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="sass.html"></a></li>
          <li><a href="badges.html">Pagina 1</a></li>
          <li><a href="collapsible.html">Pagina 2</a></li>
          <li><a href="mobile.html">Pagina 3</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">Pagina 1</a></li>
          <li><a href="badges.html">Pagina 2</a></li>
          <li><a href="collapsible.html">Pagina 3</a></li>
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
      </div>



      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="scripts/materialize.js"></script>
      <script src="scripts/init.js"></script>

    </body>

    </html>
<<<<<<< HEAD

<?php
//Conecção com o banco de Dados
require_once "config.php";

//Inicia Sessão
session_start();

//Confere se as variaveis estão com valores dentro caso contrario o codigo ira zerar as variaveis e mandar o espertinho para a page inicial.
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['senha']);
header('location:index.php');
}

//Pega o email preenchido pelo usuario logado e busca o seu nome completo atraves do banco de dados.
$email = $_SESSION['email'];

$busca = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$dado = mysql_fetch_array($busca);
$nome = $dado['nome'];
$cargo = $dado['cargo'];
$recado = $dado['recado'];

echo "Bem vindo ".$nome." Seu cargo atual é: ".$cargo; ?>

<form method="post" action="?go=mensagem">
<input type="text" id="recado" name="recado"/>
<button type="submit">

<?php
if(@$_GET['go'] = "mensagem"){
  echo "<script>alert('OK')</script>";
  mysql_query("insert into usuarios (recado) values ('$recado')");

}else{echo "<script>alert('WTF')</script>";}
?>
=======
>>>>>>> fbf6d974a35425124a264ba6a372b10d7b0cfe28
