<?php
$mysqli = new mysqli('localhost', 'root', '', 'final');
if ($mysqli->connect_errno) {
	echo "Lo sentimos, este sitio web está experimentando problemas.";
	echo "Error: Fallo al conectarse a MySQL debido a: \n";
	echo "Errno: " . $mysqli->connect_errno . "\n";
	echo "Error: " . $mysqli->connect_error . "\n";
	exit;
}
$id = $_GET['id'];
$mysqli->query("SET CHARACTER_SET_RESULTS='utf8'");
$results = $mysqli->query("SELECT * FROM autos WHERE id = $id;");
$result = $results->fetch_array(MYSQLI_ASSOC);
$images = $mysqli->query("SELECT * FROM images WHERE auto_id = $id;");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Theme Made By www.w3schools.com - No Copyright -->
	<title>Audi</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
	body {
		font: 400 15px/1.8 Lato, sans-serif;
		color: #777;
	}
	h3, h4 {
		margin: 10px 0 30px 0;
		letter-spacing: 10px;      
		font-size: 20px;
		color: #111;
	}
	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: center;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		padding: 12px 16px;

	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	/* Links inside the dropdown */
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {background-color: #f1f1f1}


	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {
		background-color: #3e8e41;
	}
	.container {
		padding: 80px 120px;
	}
	.person {
		border: 10px solid transparent;
		margin-bottom: 25px;
		width: 80%;
		height: 80%;
		opacity: 0.7;
	}
	.person:hover {
		border-color: #f1f1f1;
	}
	.carousel-inner img {
		-webkit-filter: grayscale(20%);
		filter: grayscale(20%); /* make all photos black and white */ 
		width: 100%; /* Set width to 100% */
		margin: auto;
	}
	.carousel-caption h3 {
		color: #fff !important;
	}
	@media (max-width: 600px) {
		.carousel-caption {
			display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
		}
	}
	.bg-1 {
		background: #2d2d30;
		color: #bdbdbd;
	}
	.bg-1 h3 {color: #fff;}
	.bg-1 p {font-style: italic;}
	.list-group-item:first-child {
		border-top-right-radius: 0;
		border-top-left-radius: 0;
	}
	.list-group-item:last-child {
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	.thumbnail {
		padding: 0 0 15px 0;
		border: none;
		border-radius: 0;
	}
	.thumbnail p {
		margin-top: 15px;
		color: #555;
	}
	.btn {
		padding: 10px 20px;
		background-color: #333;
		color: #f1f1f1;
		border-radius: 0;
		transition: .2s;
	}
	.btn:hover, .btn:focus {
		border: 1px solid #333;
		background-color: #fff;
		color: #000;
	}
	.modal-header, h4, .close {
		background-color: #333;
		color: #fff !important;
		text-align: center;
		font-size: 30px;
	}
	.modal-header, .modal-body {
		padding: 40px 50px;
	}
	.nav-tabs li a {
		color: #777;
	}
	#googleMap {
		width: 100%;
		height: 400px;
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
	}  
	.navbar {
		font-family: Montserrat, sans-serif;
		margin-bottom: 0;
		background-color: #2d2d30;
		border: 0;
		font-size: 11px !important;
		letter-spacing: 4px;
		/*  opacity: 0.9;*/
	}
	.navbar li a, .navbar .navbar-brand { 
		color: #d5d5d5 !important;
	}
	.navbar-nav li a:hover {
		color: #fff !important;
	}
	.navbar-nav li.active a {
		color: #fff !important;
		background-color: #29292c !important;
	}
	.navbar-default .navbar-toggle {
		border-color: transparent;
	}
	.open .dropdown-toggle {
		color: #fff;
		background-color: #555 !important;
	}
	.dropdown-menu li a {
		color: #000 !important;
	}
	.dropdown-menu li a:hover {
		background-color: red !important;
	}
	footer {
		background-color: #2d2d30;
		color: #f5f5f5;
		padding: 32px;
	}
	footer a {
		color: #f5f5f5;
	}
	footer a:hover {
		color: #777;
		text-decoration: none;
	}  
	.form-control {
		border-radius: 0;
	}
	textarea {
		resize: none;
	}
	</style>
</head>
<body>
<div id="cotizacion" class="bg-1">
	<?php $name = $result['modelo'];
	$tipo = $result['tipo'];
	$descripcion = $result['descripcion'];
	$motor = $result['motor'];
	$cilindrada = $result['cilindrada'];
	$potencia = $result['potencia'];
	?>
	<h3 class="text-center">Cotización: <?php echo ($name." ".$tipo); ?></h3><hr>  
	<div class="row">
		<div class="col-md-5">
			<div id="myCarousel2" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel2" data-slide-to="1"></li>
					<li data-target="#myCarousel2" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php $count = 0; ?>
					<?php foreach ($images as $image): ?>
						<?php if ($count === 0): ?>
							<div class="item active">
						<?php else: ?>
							<div class="item">
						<?php endif; ?>
							<?php $imageName = 'img/'.$image['name']; ?>
								<img src="<?php echo $imageName; ?>"width="2400" height="1400">
								<div class="carousel-caption">
								</div>      
							</div>
					<?php $count ++; ?> 
					<?php endforeach; ?>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-7">
			Datos Técnicos <hr>
		</div>
		<div class="row">
			<div class="col-md-6 form group">
				<p>Descripción:</p>
				<p><?php echo $descripcion?></p>
				<p>Motor: <?php echo $motor?></p>
				<p>Cilindrada: <?php echo $cilindrada?></p>
				<p>Potencia: <?php echo $potencia?></p>
			</div>  
		</div>
		<div class="row">
			<div class="col-md-11 form-group">
				<form action="Pdf.php" method="GET">
				<button class="btn pull-right" type="submit" name="id" value="<?php echo $id ?>">Cotizar</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
