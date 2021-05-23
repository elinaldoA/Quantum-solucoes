<?php 
$email = $_POST['email'];
$logar = $_POST['logar'];
$senha = $_POST['senha'];
include_once('conexao.php');
  if (isset($logar)) {
           
    $verifica = mysqli_query($conectar,"SELECT * FROM registrar_usuarios WHERE email='$email' AND senha='$senha' LIMIT 1") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='Login/login.php';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("Location: index.php");
      }
  }
?>