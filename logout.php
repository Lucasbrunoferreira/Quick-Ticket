<?php

    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['cargo']);

    header('Location: index.php.?logout=1');

?>
