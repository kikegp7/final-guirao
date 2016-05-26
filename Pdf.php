<?php
require_once("dompdf/dompdf_config.inc.php");

$mysqli = new mysqli('localhost', 'root', 'kikegp9813', 'final');
if ($mysqli->connect_errno) {
	echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
$id = $_GET['id'];
$mysqli->query("SET CHARACTER_SET_RESULTS='utf8'");

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
    <table width="95%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>Modelo</strong></td>
        <td bgcolor="#0099FF"><strong>Tipo</strong></td>
        <td bgcolor="#0099FF"><strong>Precio</strong></td>
        <td bgcolor="#0099FF"><strong>Descripcion</strong></td>
        <td bgcolor="#0099FF"><strong>Motor</strong></td>
        <td bgcolor="#0099FF"><strong>Cilindrada</strong></td>
        <td bgcolor="#0099FF"><strong>Potencia</strong></td>
      </tr>';

        $results = $mysqli->query("SELECT * FROM autos WHERE id = ".$id.";");
        while($dato=$results->fetch_array(MYSQLI_ASSOC)){
$codigoHTML.='
      <tr>
        <td>'.$dato['modelo'].'</td>
        <td>'.$dato['tipo'].'</td>
        <td>'.$dato['precio'].'</td>
        <td>'.$dato['descripcion'].'</td>
        <td>'.$dato['motor'].'</td>
        <td>'.$dato['cilindrada'].'</td>
        <td>'.$dato['potencia'].'</td>
      </tr>';
      } 
$codigoHTML.='
    </table>
</div>
</body>
</html>';

function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Cotizacion_".randomNumber(8).".pdf");

?>