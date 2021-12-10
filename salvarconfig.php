<?php
session_start();
$id = $_SESSION['id'];
$conexao = mysqli_connect("localhost","root","","PurchasesDB");

$condicao1=$_POST['codicao1'];
$codicao2a=$_POST['codicao2a'];
$codicao2b=$_POST['codicao2b'];
$codicao3a=$_POST['codicao3a'];
$codicao3b=$_POST['codicao3b'];
$codicao4=$_POST['codicao4'];
$aplicacao1=$_POST['aplicacao1'];
$aplicacao2=$_POST['aplicacao2'];
$aplicacao3=$_POST['aplicacao3'];
$aplicacao4=$_POST['aplicacao4'];

// echo $condicao1;
// echo $codicao2a;
// echo $codicao2b;
// echo $codicao3a;
// echo $codicao3b;
// echo $codicao4;
// echo $aplicacao1;
// echo $aplicacao2;
// echo $aplicacao3;
// echo $aplicacao4;

$query="UPDATE customers SET condicao1='$condicao1', codicao2a='$codicao2a',
 codicao2b='$codicao2b', codicao3a='$codicao3a',
 codicao3b='$codicao3b',codicao4='$codicao4',aplicacao1='$aplicacao1',aplicacao2='$aplicacao2',
 aplicacao3='$aplicacao3',aplicacao4='$aplicacao4'   WHERE id=$id";
$executar = mysqli_query($conexao,$query);

if($executar == true){
    echo "<script>  alert('Configurações Atualizado com Sucesso');
    window.location.href='home.php';
    </script>";
   
}
else{

    echo "<script>  alert('Falha na Edição');
    window.location.href='dados.php';
    </script>";
}
?>