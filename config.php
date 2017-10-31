<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
  $coneccao = @mysql_connect("localhost", "root", "") or die("Não foi possível conectar com os servidores.");
  mysql_select_db("quickticket", $coneccao) or die("Banco de Dados não encontrado.");
?>
