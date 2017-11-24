<?php

class db
{
    private $host = 'localhost';
    private $usuario = 'lucas_admin';
    private $senha = 'cecy142026';
    private $database = 'quick_ticket';

    public function conecta_mysql(){

      $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

      mysqli_set_charset($conexao, 'uft8');

      if(mysqli_connect_errno()){
        echo 'Houve um erro ao se conectar com o banco de dados!'.mysqli_connect_error();
      }
      return $conexao;
    }
}

 ?>
