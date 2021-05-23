<?php
session_start();
//Destruir a sessão
session_destroy();

//Remover todos os dados
unset($_SESSION['email'],
        $_SESSION['senha']);

//Redireciona o usuario para a página de login
header("Location: Login/login.php");
?>