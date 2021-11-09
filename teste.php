<?php

require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
//  echo 'TESTE';
$dompdf =new Dompdf;

$dompdf->loadHtml('teste');

$dompdf-> setPaper('A4');

$dompdf-> render();

$dompdf->setPaper('teste.pdf',array('Attachment'=>false));

?>