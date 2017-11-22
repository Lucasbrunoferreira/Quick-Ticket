<?php

  session_start();

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=2');
  }

  require_once('config.php');

  $texto_ticket = $_POST['texto_ticket'];
  $destino = $_POST['destino'];
  $id_usuario = $_SESSION['id_usuario'];
  $prioridade = $_POST['prioridade'];

  if($texto_ticket == '' || $id_usuario == ''){
    die();
  }

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $sql = " INSERT INTO ticket(id_usuario, ticket, destino, prioridade)values($id_usuario, '$texto_ticket', '$destino', '$prioridade') ";

  mysqli_query($link, $sql);


 ?>
