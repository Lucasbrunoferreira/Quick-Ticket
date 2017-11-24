<?php

  require_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = md5($_POST['senha']); // MD5 = Criptografia
  $csenha = md5($_POST['csenha']); 
  $cargo = $_POST['cargo'];

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $email_existe = false;

  if($senha == $csenha){  // Confirmação da senha

    // Verificar se o email já esta cadastrado
    $sql = " SELECT * FROM usuarios WHERE email = '$email'";
    if($resultado_id = mysqli_query($link, $sql)){

      $dados_usuario = mysqli_fetch_array($resultado_id);

      if(isset($dados_usuario['email'])){
        echo 'Email já cadastrado';
        $email_existe = true;
      }

      }else {
        echo 'Erro ao tentar localizar o registro';
      }

      if($email_existe == true){
        header('Location: cadastro.php?erro_email=1');
      }    

    $sql = "INSERT INTO usuarios (nome, email, senha, cargo) values ('$nome', '$email', '$senha', '$cargo')";

    if (mysqli_query($link, $sql)){
        header('Location: index.php.?sucesso=1');
    } else {
      echo 'Erro ao registrar usuario!';
    }
  }else{
    header('Location: cadastro.php.?erro=1');
  }

 ?>
