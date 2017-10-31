 <!-- Buffer de saída é "esvaziado"-->
<?php ob_start(); ?>
  <!-- Conecção com o servidor de mysql -->
<?php
    require_once "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistema auxilidar empresarial"> <!--Descrição do Site -->
    <meta name="keywords" content="sistema, empresa, TI, tickets, sistema web,"/> <!--Chaves de busca -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1."/>
    <title>Quick Ticket - Criar Conta</title>

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
    <meta name="theme-color" content="#001d54">

    <!-- Material Icones  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Folhas de estilos  -->
    <link href="styles/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body id="register-wall">
    <header id="register-header"></header>
      <div class="container">
         <i class=" register-logo large material-icons">verified_user</i>
         <div class="card large register-card">
           <div class="row">
             <div class="input-field col s8 m8 l10 offset-m1 offset-s1 offset-l1">
               <h5 style="color: #004381"><b>Cadastre-se</b></h5>
             </div>
           </div>
           <form class="col s12" method="POST" action="?go=cadastrar">
             <div class="row">

               <div class="input-field offset-m1 offset-s1 offset-l1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">account_circle</i>
                 <input id="icon_prefix nome" name="nome" type="text" class="validate" required value="">
                 <label for="icon_prefix">Nome Completo</label>
               </div>
               <div class="input-field offset-s1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">email</i>
                 <input id="icon_telephone email" name="email" type="email" class="validate" required value="">
                 <label for="icon_telephone">Email</label>
               </div>
               <div class="input-field offset-m1 offset-s1 offset-l1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">lock</i>
                 <input id="icon_telephone senha" name="senha" type="password" class="validate" required value="">
                 <label for="icon_telephone">Senha</label>
               </div>
               <div class="input-field offset-s1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">lock</i>
                 <input id="icon_telephone csenha" name="csenha" type="password" class="validate" required value="">
                 <label for="icon_telephone">Confirme sua senha</label>
               </div>
               <div class="row center-align" id="area-buttons">
                 <div class="offset-s2 offset-m3 col m3 s4 ">
                   <button onclick="confirmarSenha()" class="btn waves-effect waves-light " type="submit" name="action" style="background: #476db1">CADASTRAR
                   </button>
                 </div>
                 <div class="offse-s1 col m3 s3">
                   <a href="index.php" class="btn waves-effect waves-light N/A transparent">
                    <b style="color:#004381;">CANCELAR</b>
                  </a>
                    </a>
                 </div>
              </div>
             </div>
           </form>
         </div>
       </div>
      </div>

      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="scripts/materialize.js"></script>
      <script src="scripts/init.js"></script>

    </body>
</html>
<?php
  if(@$_GET['go'] == 'cadastrar'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];

    // Set session variables
    $_SESSION["nome"] = $nome;

    if(empty($nome)){
      echo "<script>alert('Preencha todos os campos para o cadastro.'); history.back();</script>";
    }elseif(empty($email)){
      echo "<script>alert('Preencha todos os campos para o cadastro.'); history.back();</script>";
    }elseif(empty($senha)){
      echo "<script>alert('Preencha todos os campos para o cadastro.'); history.back();</script>";
    }elseif(empty($csenha)){
      echo "<script>alert('Preencha todos os campos para o cadastro.'); history.back();</script>";
    }elseif ($senha != $csenha) {
      echo "<script>alert('As senhas não se coincidem!'); history.back();</script>";
    }else{
      $query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIOS WHERE EMAIL = '$email'"));
      if($query1 == 1){
        echo "<script>alert('Email já cadastrado.'); history.back();</script>";
      }else{
        mysql_query("insert into usuarios (nome, email, senha) values ('$nome','$email','$senha')");
        echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
        echo "<meta http-equiv='refresh' content='0, url=index.php'>";
      }
    }


  }
 ?>
