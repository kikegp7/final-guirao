<?php
$mysqli = new mysqli('localhost', 'root', '', 'final');
if ($mysqli->connect_errno) {
  echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
$mysqli->query("SET CHARACTER_SET_RESULTS='utf8'");
$results = $mysqli->query('SELECT * FROM autos;');
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Audi</title>
  <meta charset="utf-8">
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
<body id="Home" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <img src="AudiLogo.png" alt="New York" width="75" height="50">
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Home">HOME</a></li>
        <li><a href="#models">MODELS</a></li>
        <li><a href="#cotizacion">Cotizacion</a></li>
        <li><a href="#contact">CONTACT</a></li>

          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="audi1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Audi A6</h3>
        </div>      
      </div>

      <div class="item">
        <img src="tt-coupe.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>TT Coupe</h3>
        </div>      
      </div>
    
      <div class="item">
        <img src="r8-coupe.png" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>R8 Coupe</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="models" class="container text-center">
  <h3>Liderazgo por tecnología</h3>
  <p><em>Models</em></p>
  <!-- <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
  <br>
  <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>A1</strong></p><br>
      <div class="dropdown">
        <img src="a1.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="3">A1</button>
          </form>
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="4">A1 Sportback</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>A3</strong></p><br>
      <div class="dropdown">
        <img src="a3.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="5">A3</button>
          </form>
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="6">A3 Sedán</button>
          </form>
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="7">A3 Cabriolet</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>A4</strong></p><br>
      <div class="dropdown">
        <img src="a4sedan.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="8">A4 Sedán</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>A5</strong></p><br>
      <div class="dropdown">
        <img src="a5coupe.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="9">A5 Coupé</button>
          </form>
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="10">A5 Sportback</button>
          </form>
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="11">RS5</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>A7</strong></p><br>
      <div class="dropdown">
        <img src="a7sportback.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="12">A7 Sportback</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><strong>R8</strong></p><br>
      <div class="dropdown">
        <img src="r8-coupe.png" alt="Los Angeles" width="250" height="150">
        <!-- <button class="dropbtn">Dropdown</button> -->
        <div class="dropdown-content">
          <form action="descripcion.php" method="GET">
            <button type="submit" name="id" value="13">R8 Coupé</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Company</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">J. Ramon</a></li>
    <li><a data-toggle="tab" href="#menu1">Lucho Gamboa</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>J. Ramon Cabrera, CEO</h2>
      <p>Always looking for a new future.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Luis Enrique Gamboa, Owner</h2>
      <p>Innovation that excites.</p>
    </div>
  </div>
</div>

<div id="googleMap"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(21.1111386,-89.608781);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#Home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>