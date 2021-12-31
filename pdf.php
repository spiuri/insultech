
<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
$conexao = mysqli_connect("localhost","root","","PurchasesDB");
session_start();
$id = $_SESSION['id'];
$query = "SELECT id,description,amount, customer_id, insulina,dia FROM orders WHERE customer_id =$id";

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
$html .='<table  style="

border-collapse: collapse;
 border: 1px solid black;
" >';
$html .='<thead>';
$html .='<tr>';
    
$html .='<th style="background-color: rgb(219, 219, 219); border: 1px solid black;height: 50px;padding: 20px;text-align: left;" scope="col">Data</th>';
$html .='<th style="background-color: rgb(219, 219, 219); border: 1px solid black;height: 50px;padding: 15px;text-align: left;" scope="col">Periodo</th>';
$html .='<th style="background-color: rgb(219, 219, 219); border: 1px solid black;height: 50px;padding: 15px;text-align: left;" scope="col">Glicemia</th>';
$html .='<th style="background-color: rgb(219, 219, 219); border: 1px solid black;height: 50px;padding: 15px;text-align: left;" scope="col">Insulina</th>';


$html .='</tr>';
$html .='</thead>';
$html .='<tbody>';

while($linha = mysqli_fetch_array($resultado)){
    $html .='<tr>';
$html.='<td style="border: 1px  solid black;padding: 15px;text-align: left;">'. date( 'd-m' , strtotime( $linha['dia'] ) ).'</td>';
$html.='<td style="border: 1px  solid black;padding: 15px;text-align: left;">'. $linha['description'].'</td>';
$html.='<td style="border: 1px solid black;padding: 15px;text-align: left;">'. $linha['amount'].'</td>';
$html.='<td style="border: 1px solid black;padding: 15px;text-align: left;">'. $linha['insulina'].'</td></tr>';

}

$html.='</tbody></table>';


$dompdf =new Dompdf;

$dompdf->loadHtml($html);

$dompdf-> setPaper('A4');

$dompdf-> render();

$dompdf->stream('Historico de Glicose.pdf',array('Attachment'=>false));

?>