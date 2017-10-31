<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
  $coneccao = @mysql_connect("localhost", "lucas_admin", "cecy142026") or die("Não foi possível conectar com os servidores.");
  mysql_select_db("quick_ticket", $coneccao) or die("Banco de Dados não encontrado.");
?>
