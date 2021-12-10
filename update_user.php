<?php
session_start();
$conexao = mysqli_connect("localhost","root","","PurchasesDB");
$id= $_SESSION['id'];
$nome= $_POST['name'];
$email= $_POST['email'];
$senha= $_POST['passwd'];
$tiposangue= $_POST['tiposangue'];
$nasc= $_POST['nasc'];
$genero= $_POST['genero'];

$query= "UPDATE customers SET name='$nome', email='$email', passwd='$senha', sangue='$tiposangue',
 nasc='$nasc'  WHERE id=$id";

$executar = mysqli_query($conexao,$query);

if($executar == true){
    echo "<script>  alert('Usuario Atualizado com Sucesso');
    window.location.href='home.php';
    </script>";
    $_SESSION['name'] = $nome;
    $_SESSION['email'] = $email;
    
}
else{

    echo "<script>  alert('Falha na Edição');
    window.location.href='dados.php';
    </script>";
}
?>