<?php

session_start();

  if(!isset($_SESSION['email'])){
    header('Location: index.php.?erro=1');
  }

  require_once('config.php');

  $nome_pessoa = $_POST['nome_pessoa'];
  $id_usuario = $_SESSION['id_usuario'];

  $objDb = new db;
  $link = $objDb->conecta_mysql();

  $sql = " SELECT * FROM usuarios WHERE nome like '%$nome_pessoa%' AND id <> $id_usuario ";

  $resultado_id = mysqli_query($link, $sql);

if($resultado_id){

  while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
  echo '<a href="#" class="list-group-item">';
    echo '<strong>'.$registro['nome'].'</strong> <small> - '.$registro['cargo'].' </small>';
  echo '</a>';
}

}else{
  echo 'Erro na consulta de usuarios!';
}

?>
