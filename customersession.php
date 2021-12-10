<?php
session_start();

$email = $_POST['email'];
$passwd  = $_POST['password'];

$conexao = mysqli_connect("localhost","root","","PurchasesDB");

$query = "SELECT * FROM customers WHERE email='$email' and passwd= '$passwd'";

if ($result=mysqli_query($conexao, $query)) {

  $linha = mysqli_fetch_array($result);
  if(!empty($linha)){
    $_SESSION['name'] = $linha['name'];
    $_SESSION['email'] = $linha['email'];
    $_SESSION['id'] = $linha['id'];
    $_SESSION['sangue'] = $linha['sangue'];
    $_SESSION['genero'] = $linha['genero'];
    $_SESSION['nasc'] = $linha['nasc'];
    $_SESSION['senha'] = $linha['passwd'];

    header("Location: home.php");
  }else{
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    unset($_SESSION['sangue']);
    unset($_SESSION['genero']);
    unset($_SESSION['nasc']);
    unset($_SESSION['senha']);
    header("Location: login.php?msg=LOGIN_ERROR");
  }
    //header("Location: login.php?msg=OK");
} else {
    header("Location: login.php?msg=ERRO");
}
?>