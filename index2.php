<!DOCTYPE html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db='project';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 

<html>
<title>British Airways</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("http://www.bookajourney.com/writable/BlogImages/adventuretravelshop_1327592237_63.jpg");
    min-height: 100%;
}
.w3-navbar li a {
    padding: 16px;
    float: left;
}
.modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
</style>
<body>

<!-- Navbar (sit on top) -->

  <ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
    <li>
      <a href="#home" class="w3-wide">British Airways</a>
    </li>
    <!-- Right-sided navbar links -->
    <li class="w3-right w3-hide-small">
      <a href="#flights"><i class="fa fa-plane"></i> FLIGHTS</a>
      <a href="#booking"><i class="fa fa-usd"></i> BOOKING</a>
      <a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a>
      <a id="myBtn"><i class="fa fa-lock"></i>LOGIN</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="loginuser.php" method=get>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <a href="registration.html"/><p>Not a member?  <button type="submit" class="btn btn-success btn-default pull-right" >Sign Up</button></p></a>
        </div>
      </div>
      
    </div>
  </div>
  
    </li>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <li>
      <a href="javascript:void(0)" class="w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars w3-padding-right w3-padding-left"></i>
      </a>
    </li>
  </ul>

<!-- Sidenav on small screens when clicking the menu icon -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close ×</a>
  <a href="#flights" onclick="w3_close()">FLIGHTS</a>
  <a href="#booking" onclick="w3_close()">BOOKING</a>
  <a href="#contact" onclick="w3_close()">CONTACT</a>
  <a href="#login" onclick="w3_close()"> LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <span class="w3-jumbo w3-hide-small">Welcome to the British Airways website!</span><br>
  
    <span class="w3-large"></span>
    <p><a href="#booking" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get your tickets now</a></p>
  </div> 
</header>

<!-- Promo Section - "We know your needs" -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know your needs</h3>
      <p>A whole fleet of professionally trained stewardesses await you, in order to make your flight more confortable.</p>
      <p><a href="#flights" class="w3-btn"><i class="fa fa-th"></i> View Our Flight Routes</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2014/05/28/21/web-british-airways-bbcv2.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Flights Section -->
<div class="w3-container w3-padding-128" id="flights">
  <h3 class="w3-center">Flights</h3>
  <p class="w3-center w3-large">The routes available today</p>
    <ul class="w3-navbar w3-black">
      <li><a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Flight</a></li>
    </ul>

    <!-- Tab -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with us</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
	  <form method=get action="flights.php">
        <div class="w3-half">
          <label>From</label>
          <input class="w3-input w3-border" name="loc" type="text" placeholder="Departing from">
        </div>
        <div class="w3-half">
          <label>To</label>
          <input class="w3-input w3-border" name="dest" type="text" placeholder="Arriving at">
        </div>
		</form>
      </div>
      <p><button class="w3-btn w3-dark-grey">Search and find dates</button></p><br><br><br><br><br><br>
    </div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">500+</span>
    <br>Flights Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">900+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">20+</span>
    <br>Offers daily
  </div>
</div>

<!-- Booking Section -->
<div class="w3-container w3-padding-128" id="booking">
  <h3 class="w3-center">Booking</h3>
  <p class="w3-center w3-large">Reserve your tickets online</p>
  <div class="w3-row-padding" style="margin:0 -16px;">
  <form method=get action="booking.php" onsubmit="booking.php">
        <div class="w3-half">
          <label>Flightid</label>
          <input class="w3-input w3-border" name="id" type="int" placeholder="Flight number">
        </div>
        <div class="w3-half">
          <label>User</label>
          <input class="w3-input w3-border" name="user" type="text" placeholder="Enter username">
        </div>
      </div>
	  <p><button class="w3-btn w3-dark-grey" type="submit">Reserve a seat</button></p><br><br><br><br><br><br>
         </div>
</form>
<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Our pilots ensure the safety of the passengers during the flight.<br>
      </p>
      <p>The comfort is assured by the stewardesess.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-chain w3-margin-right"></i>Safety</p>
      <div class="w3-progress-container w3-grey">
        <div class="w3-progressbar w3-dark-grey" style="width:95%"></div>
      </div>
      <p class="w3-wide"><i class="fa fa-medkit w3-margin-right"></i>Confort</p>
      <div class="w3-progress-container w3-grey">
        <div class="w3-progressbar w3-dark-grey" style="width:85%"></div>
      </div>
      <p class="w3-wide"><i class="fa fa-money w3-margin-right"></i>Prices</p>
      <div class="w3-progress-container w3-grey">
        <div class="w3-progressbar w3-dark-grey" style="width:45%"></div>
      </div>
    </div>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container w3-padding-128 w3-light-grey" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> London, UK</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +44 844 493 0787</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: ba@yahoo.com</p>
      <br>
     
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:210px;"></div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>

 
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(51.4852221,-0.4873539);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidenav when clicking the menu icon
var mySidenav = document.getElementById("mySidenav");

function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
    } else {
        mySidenav.style.display = 'block';
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
}
</script>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
