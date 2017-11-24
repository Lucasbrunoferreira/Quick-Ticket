<?php
  session_start();

  require_once('config.php');

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=2');
  }

  require_once('config.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

  $id_usuario = $_SESSION['id_usuario'];
  $cargo_usuario = $_SESSION['cargo'];


  
  $sql = " SELECT COUNT(*) AS qtde_ticket FROM ticket WHERE prioridade = 'Normal' AND destino = '$cargo_usuario'  ";
  
	$resultado_id = mysqli_query($link, $sql);
	$qtde_ticket = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_ticket = $registro['qtde_ticket'];
	} else {
		echo 'Erro ao executar a query';
	}

	$sql = " SELECT COUNT(*) AS qtde_ticket_urgente FROM ticket WHERE prioridade = 'Urgente' AND destino = '$cargo_usuario' ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_ticket_urgente = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_ticket_urgente = $registro['qtde_ticket_urgente'];
	} else {
		echo 'Erro ao executar a query';
  }
  

	$sql = " SELECT COUNT(*) AS qtde_ticket_urgente FROM ticket WHERE prioridade = 'Urgente' AND destino = '$cargo_usuario' ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_ticket_urgente = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_ticket_urgente = $registro['qtde_ticket_urgente'];
	} else {
		echo 'Erro ao executar a query';
	}

  
	$sql = " SELECT COUNT(*) AS qtde_ticket_enviados FROM ticket WHERE id_usuario = '$id_usuario' ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_ticket_enviados = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_ticket_enviados = $registro['qtde_ticket_enviados'];
	} else {
		echo 'Erro ao executar a query';
	}


?>