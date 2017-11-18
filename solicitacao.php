<?php

 require_once "config.php";

 session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = mysql_num_rows(mysql_query("SELECT * FROM USUARIOS WHERE EMAIL = '$email' AND SENHA = '$senha'"));

if($query == 1){
  $_SESSION['email'] = $email;
  $_SESSION['senha'] = $senha;
  echo "<script>location.href='inicio.php';</script>";
}else{
  unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:index.php');

}

?>
