<?php include("connection.php"); //$conn ?> 
<?php
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];	
		$phonenum = $_POST['phonenum'];	
		$message = $_POST['message'];
				
		//check for duplicate id
		$sqlid = "SELECT * FROM inquiries WHERE name = '$name'";
		$queryid = $conn -> query($sqlid);
		$numid = $queryid -> num_rows;
		
		if($numid == 0) {
			$sql = "INSERT INTO inquiries (name, email, phonenum, message) VALUES ('$name', '$email', '$phonenum', '$message')";
			if($conn -> query($sql) === true) {
				echo "<script>alert('Well Done ! Your Message or Inquiries has been submitted'); window.location='contact.php'</script>";
			} else { 
				echo "<script>alert('Do it Again!');</script>";
			}
		} else { echo "<script>alert('Error!');</script>"; }
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>State Heritage - Bukit Tengkorak Archeological</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php"><span class="img" style="background-image: url(img/logo-museum.png);"></span>Sabah Museum</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="collection.php">Galleries</a></li>
					<li><a href="services.php">Virtual Tour</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

			
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
	            <h1 class="bread">Contact</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3 font-weight-bold">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Address:</span> Jalan Tampi-Tampi, 91308 Semporna, Sabah</p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Phone:</span> <a href="tel://089 222 679">089 222 679</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Email:</span> <a href="mailto:Muzium.Sabah@sabah.gov.my">Muzium.Sabah@<br>sabah.gov.my</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Website</span> <a href="https://museum.sabah.gov.my/home">Sabah Museum</a></p>
		          </div>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 d-flex">
	            <form method="post" action="contact.php" class="bg-light p-5 contact-form" onsubmit="return validate()">
	              <div class="form-group">
	                <input name="name" type="text" class="form-control" placeholder="Name" required>
	              </div>
	              <div class="form-group">
	                <input name="email" type="text" class="form-control" placeholder="Email" required>
	              </div>
	              <div class="form-group">
	                <input name="phonenum" type="text" class="form-control" placeholder="Phone Number: 010123456" required>
	              </div>
	              <div class="form-group">
	                <textarea name="message" type="text" cols="30" rows="7" class="form-control" placeholder="Message or Inquiries" required></textarea>
	              </div>
	              <div class="form-group">
	                <input name="submit" type="submit" value="Submit" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-md-6 d-flex">
	          	<div id="map" class="bg-light"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16324948.085024334!2d102.33492208940115!3d2.640226360399364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3215558167512b97%3A0xf170baa2dfa1b40c!2sBukit%20Tengkorak%20Archaeological%20Heritage%20Site!5e0!3m2!1sen!2smy!4v1656376607590!5m2!1sen!2smy" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
	          </div>
	        </div>
	      </div>
	    </section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Recent Photos</h2>
	              <ul class="list-unstyled photo">
	                <li><a href="img/1.jpg" class="insta-img image-popup" style="background-image: url(img/1.jpg);"></a></li>
	                <li><a href="img/3.jpg" class="insta-img image-popup" style="background-image: url(img/3.jpg);"></a></li>
	                <li><a href="img/5.jpg" class="insta-img image-popup" style="background-image: url(img/5.jpg);"></a></li>
	                <li><a href="img/7.jpg" class="insta-img image-popup" style="background-image: url(img/7.jpg);"></a></li>
	                <li><a href="img/9.jpg" class="insta-img image-popup" style="background-image: url(img/9.jpg);"></a></li>
	                <li><a href="img/11.jpg" class="insta-img image-popup" style="background-image: url(img/11.jpg);"></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Tampi-Tampi, 91308 Semporna, Sabah</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">089 222 679</span></a></li>
		                <li><a href="https://museum.sabah.gov.my/home"><span class="icon icon-envelope"></span><span class="text">Sabah Museum</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">

	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script>
			function validate() {
				var name = document.getElementsByName("name")[0].value;
				
				if(isNaN(name) == false) {
					alert("This field does not accept non alphabetic character!");
					return false;
				}
			}
		</script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>