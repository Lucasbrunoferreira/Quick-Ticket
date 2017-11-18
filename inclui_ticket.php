<?php

if(!isset($_SESSION['usuario'])){
  header('Location: index.php?erro=2');
}

session_start();

require_once('config.php');

$texto_ticket = $_POST['texto_ticket'];
$id_usuario = $_SESSION['id_usuario'];

if($texto_ticket == '' || $id_usuario == ''  ){
  die();
}

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = " INSERT INTO ticket(id_usuario, ticket)values($id_usuario, '$texto_ticket') ";

mysqli_query($link, $sql);

 ?>
