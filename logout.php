<?php

    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['cargo']);

    echo '<script>alert("Esperamos você novamente em breve!")</script>';


?>