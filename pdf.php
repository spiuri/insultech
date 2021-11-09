
<?php
session_start();
$id = $_SESSION['id'];
$name= $_SESSION['name'];
$sangue = $_SESSION['sangue'];
$genero = $_SESSION['genero'];
$nasc = $_SESSION['nasc'];
$html = '<h3 style="text-align: center;">Histórico de glicose e insulina</h3><br><br>';
$html .= '<strong>Nome: </strong>'.$name.'.<br>';
$html .= '<strong>Tipo Sanguineo: </strong>'. $sangue.'.<br>';
$html .= '<strong>Data de Nasc: </strong>'. $nasc.'.';
$html .= '<strong>Gênero: </strong>'. $genero.'.';

ss;



require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf =new Dompdf;

$dompdf->loadHtml($html);

$dompdf-> setPaper('A4');

$dompdf-> render();

$dompdf->stream('Historico de Glicose.pdf',array('Attachment'=>false));

?>