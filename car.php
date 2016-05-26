<?php print_r($_GET);

$mysqli = new mysqli('localhost', 'root', '', 'final');
if ($mysqli->connect_errno) {
	echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
$id = $_GET['id'];
$results = $mysqli->query("SELECT * FROM autos WHERE id = $id;");
$images = $mysqli->query("SELECT * FROM images WHERE auto_id = $id;");

foreach ($results as $result) {
	print_r($result);
}
echo "<br><br>";
foreach ($images as $image) {
	$name = $image['name'];
	echo "<img src="."img/".$name.">";
}
?>