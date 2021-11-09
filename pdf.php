
<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
$conexao = mysqli_connect("localhost","root","","PurchasesDB");
session_start();
$id = $_SESSION['id'];
$query = "SELECT id,description,amount, customer_id, insulina FROM orders WHERE customer_id =$id";

$resultado = mysqli_query($conexao,$query);
$name= $_SESSION['name'];
$sangue = $_SESSION['sangue'];
$genero = $_SESSION['genero'];
$nasc = $_SESSION['nasc'];
$html = '<h3 style="text-align: center;">Histórico de glicose e insulina</h3><br><br>';
$html .= '<strong>Nome: </strong>'.$name.'.<br>';
$html .= '<strong>Tipo Sanguineo: </strong>'. $sangue.'.<br>';
$html .= '<strong>Data de Nasc: </strong>'. $nasc.'.<br>';
$html .= '<strong>Gênero: </strong>'. $genero.'.<br>';
$html .='<table class="table">';
$html .='<thead>';
$html .='<tr>';
    
$html .='<th scope="col">Periodo</th>';
$html .='<th scope="col">Glicemia</th>';
$html .='<th scope="col">Insulina<th>';
$html .='<th scope="col"><th>';
$html .='<th scope="col"><th>';

$html .='</tr>';
$html .='</thead>';
$html .='<tbody>';
$html .='<tr>';
while($linha = mysqli_fetch_array($resultado)){
$html.='<td>'. $linha['description'].'</td>';
$html.='<td>'. $linha['amount'].'</td>';
$html.='<td>'. $linha['insulina'].'</td></tr>';

}

$html.='</tbody></table>';


$dompdf =new Dompdf;

$dompdf->loadHtml($html);

$dompdf-> setPaper('A4');

$dompdf-> render();

$dompdf->stream('Historico de Glicose.pdf',array('Attachment'=>false));

?>