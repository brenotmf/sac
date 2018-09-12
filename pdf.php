<?php

require_once('vendor/autoload.php');

use Dompdf\Dompdf;

$site = file_get_contents('http://phpi-brenotmoura616837.codeanyapp.com/sac/index.php');

$dompdf = new Dompdf();
$dompdf->loadHtml($site);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();




?>