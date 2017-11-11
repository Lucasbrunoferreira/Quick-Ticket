<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
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
      <div class="container" style="position:static;">
         <i class=" register-logo large material-icons">verified_user</i>
         <div class="card large register-card">
           <div class="row">
             <div class="input-field col s8 m8 l10 offset-m1 offset-s1 offset-l1">
               <h5 style="color: #004381"><b>Cadastre-se</b></h5>
             </div>
           </div>
           <form class="col s12" method="POST" action="registrar_usuario.php">
             <div class="row">

               <div class="input-field offset-m1 offset-s1 offset-l1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">account_circle</i>
                 <input id="icon_prefix nome" name="nome" type="text" class="validate" required value="">
                 <label for="icon_prefix">Nome Completo</label>
               </div>
               <div class="input-field offset-s1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">email</i>
                 <input id="icon_telephone email" name="email" type="email" class="validate <?= $erro_email == 1 ? 'invalid' : '' ?>" required value="">
                 <label for="icon_telephone">Email</label>
               </div>
               <div class="input-field offset-m1 offset-s1 offset-l1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">lock_open</i>
                 <input id="icon_telephone senha" name="senha" type="password" class="validate <?= $erro == 1 ? 'invalid' : '' ?>" required value="">
                 <label for="icon_telephone">Senha</label>
               </div>
               <div class="input-field offset-s1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">lock_outline</i>
                 <input id="icon_telephone csenha" name="csenha" type="password" class="validate <?= $erro == 1 ? 'invalid' : '' ?>" required value="">
                 <label for="icon_telephone">Confirme sua senha</label>
               </div>
               <div class="input-field offset-m1 offset-s1 offset-l1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">date_range</i>
                 <input type="text" class="datepicker">
                 <label for="icon_telephone">Data de Nascimento</label>
               </div>
               <div class="input-field offset-s1 col s8 l5 m5">
                 <i class="material-icons prefix icon_color_login">work</i>
                 <select name="cargo">
                   <option value="" disabled selected>Cargo</option>
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
               <div class="row center-align" id="area-buttons">
                 <div class="offset-s2 offset-m3 col m3 s4">
                   <button class="btn waves-effect waves-light " type="submit" name="action" style="background: #476db1">CADASTRAR</button>
                 </div>
                 <div class="col m3 s4">
                   <a href="index.php" class="btn waves-effect waves-light N/A transparent">
                    <b style="color:#004381;">CANCELAR</b>
                  </a>                
                 </div>
              </div>
             </div>
           </form>
         </div>   
          <?php
            if($erro == 1)
              echo '<div class="card center-align white-text" style="background:rgba(140, 0, 0, 0.7);"><i class="material-icons" style="padding-top:4px;">error</i>&emsp;As senhas não se coincidem!</div>';
            if($erro_email == 1)
              echo '<div class="card center-align white-text" style="background:rgba(140, 0, 0, 0.7);"><i class="material-icons" style="padding-top:4px;">error</i>&emsp;Email informado já esta em uso!</div>';
            ?>      
       </div>
      
      </div>
      


      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="scripts/materialize.js"></script>
      <script src="scripts/init.js"></script>

    </body>
</html>