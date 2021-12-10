<?php
$name = $_POST['name'];
$email = $_POST['email'];
$passwd  = $_POST['passwd'];
$sangue = $_POST['tiposangue'];
$nasc = $_POST['nasc'];
$genero = $_POST['genero'];
$conexao = mysqli_connect("localhost","root","","PurchasesDB");

$query = "INSERT INTO customers (name,email,passwd,sangue,nasc, genero) VALUES ('$name','$email', '$passwd', '$sangue','$nasc','$genero')";

if (mysqli_query($conexao, $query)) {  
    header("Location: login.php?msg=OK");
} else {
        
    header("Location: login.php?msg=ERRO");
}

?>
