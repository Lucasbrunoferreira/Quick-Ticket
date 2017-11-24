<?php

  session_start();

  require_once('config.php');

  $email = $_POST['email'];
  $senha = md5($_POST['senha']);

  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; // Monta a query ( comandos sql )

  $objDb = new db();
  $link = $objDb->conecta_mysql(); //Conexão com o banco de daos

  $resultado_id = mysqli_query($link, $sql);

  if($resultado_id){  //Verifica se houve algum erro na sintaxe ou instrução de consulta

    $dados_usuario = mysqli_fetch_array($resultado_id); // Tansforma a query em um array
    
    if(isset($dados_usuario['email'])){ //Verifica o campo email dentro do array de consulta

      $_SESSION['id_usuario'] = $dados_usuario['id'];
      $_SESSION['nome'] = $dados_usuario['nome'];
      $_SESSION['cargo'] = $dados_usuario['cargo'];
      $_SESSION['email'] = $dados_usuario['email'];

      header('Location: inicio.php');
    }else {
      header('Location: index.php?erro=1'); // Paramentação por url
    }

  }else {
    echo 'Erro na execução da consulta ao banco de dados!';
  }
  
 ?>
