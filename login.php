<?php
ob_start();
include ("db_connect.php");

$error = $username = $password = "";

if(isset($_POST['txtusername']))
{
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Login for existing members">
	<meta name="author" content="Supercell">

	<title>Login Portal</title>

	<!-- FAVICON -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="plugins/animate/animate.min.css" rel="stylesheet">
	<link href="plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

</head>
<body id="top">

	<!-- header -->
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="dropdown">
							<a href="cards.html" class="dropdown-toggle">Cards</a>
							<ul class="dropdown-menu default">
								<li><a href="buildings.html">Buildings</a></li>
								<li><a href="troops.html">Troops</a></li>
								<li><a href="spells.html">Spells</a></li>
							</ul>
						</li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<a href="registration.html"><i class="fa fa-user"></i>Sign in</a>/<a class="active" href="login.php">Login</a>
			</div>
		</div>
	</header>
	<!-- /header -->

	<!-- wrapper -->
	<div id="wrapper">
		<section class="elements bg-white">
				<div class="container">
					<div class="row">
						<div class="col-md-6 pull-none margin-auto">
							<div class="title">
								<h4>Login</h4><br/>
								<!--<h5>Already a member?<a href="login.php">Login now</a></h5> -->
								<p>You're not a member? <a href="login.php">Sign up now.</a></p>
							</div>
							<form name = "login" method="post" action="login.php">
							<div class="form-group input-icon-right">
									<i class="fa fa-user"></i>
									<input type="text" name="txtusername" class="form-control" placeholder="Enter your username" required/>	
								</div>
								<div class="form-group input-icon-right">
									<i class="fa fa-user"></i>
									<input type="password" name="txtpassword" class="form-control" placeholder="Enter your password" required/>
								</div>
								<div class="text-center margin-top-30">
									<input type="submit" class="btn btn-primary btn-lg btn-shadow" value="Login">
									<!--<button type="submit" class="btn btn-primary btn-lg btn-rounded btn-shadow">Send Message</button>-->
								</div>

								<?php
									$query = "SELECT username, password FROM registration WHERE username = '$username' AND password = '$password'";
									$result = mysqli_query($conn, $query);


									if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])){
										$uname=$_POST['txtusername'];
										$password=$_POST['txtpassword'];
										if ($uname == 'admin' && $password == 'root'){
											session_start();
											$_SESSION['logged'] = true;
											$_SESSION['username'] = $uname;
											echo "<script type='text/javascript'>window.location='admin.php'</script>";
											}
										
									elseif (mysqli_num_rows($result) == 0) 
										{
											echo "Username and password are invalid";
										}
										elseif (mysqli_num_rows($result) > 0) {

											session_start();
											$_SESSION["logged"] = true;
											$_SESSION['username'] = $username;
											$_SESSION['password'] = $password;
											header ("Location: index.php?view=$username");


											//echo "Your are now logged in. Please <a href='shop.php?view=$username'>" . "Click here</a> to continue. <br><br>";
										}
										else {
											echo "Access denied";
										}
									
									}
								?>
								<!--<div class="form-group input-icon-right">
									<i class="fa fa-comment"></i>
									<input type="text" class="form-control" placeholder="Subject" required>
								</div>
								<div class="form-group">
									<select class="form-control">
										<option value="" disabled selected>Select your platform</option>
										<option>Android</option>
										<option>iOS</option>
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="7" placeholder="Message" required></textarea>
								</div>
								<div class="text-center margin-top-30">
									<button type="submit" class="btn btn-primary btn-lg btn-rounded btn-shadow">Send Message</button>
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</section>
	</div>
	<!-- end of wrapper -->


	<!-- footer -->
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					
					<h4 class="title">About Supercell</h4>
					<p>Supercell is a mobile game developer based in Helsinki Finland, with offices in San Francisco, Tokyo, Seoul and Beijing.<br/><br/> Its games are available for tablets and smartphones using both Apple's iOS and Google's Android operating systems.<br/><br/> Since its foundation in 2010, Supercell has brought four games to the market - Hay Day, Clash of Clans, Boom Beach and Clash Royale.</p>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title">Categories</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="https://supercell.helpshift.com/a/clash-royale/?p=web">Support</a></li>
								<li><a href="http://supercell.com/en/parents/">Parent's Guide</a></li>
								<li><a href="http://supercell.com/en/terms-of-service/">Terms of Service</a></li>
								<li><a href="http://supercell.com/en/privacy-policy">Privacy Policy</a></li>
								<li><a href="http://supercell.com/en/fan-content-policy/">Fan Content Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h4 class="title">Get connected</h4>
					<ul class="list-inline">
					<li><a href="https://www.facebook.com/ClashRoyale" class="btn btn-circle btn-social-icon btn-facebook" data-toggle="tooltip" data-placement="left" title="Like us"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.twitter.com/ClashRoyale" class="btn btn-circle btn-social-icon btn-twitter" data-toggle="tooltip" data-placement="bottom" title="Tweet us"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/+ClashRoyale" class="btn btn-circle btn-social-icon btn-google-plus" data-toggle="tooltip" data-placement="bottom" title="Follow us on Google+"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.instagram.com/ClashRoyale" class="btn btn-circle btn-social-icon btn-instagram" data-toggle="tooltip" data-placement="bottom" title="Don't miss any photos"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/clashroyale" class="btn btn-circle btn-social-icon btn-danger" data-toggle="tooltip" data-placement="bottom" title="Subscribe"><i class="fa fa-youtube-play"></i></a></li>
					<li><a href="http://www.twitch.tv/clashroyale" class="btn btn-circle btn-social-icon btn-purple" data-toggle="tooltip" data-placement="bottom" title="Watch now"><i class="fa fa-twitch"></i></a></li>
					<li><a href="http://www.reddit.com/r/clashroyale/" class="btn btn-circle btn-social-icon btn-primary" data-toggle="tooltip" data-placement="right" title="Ask something"><i class="fa fa-reddit"></i></a></li>
				</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
		<div class="row">
			<div class="container">	
				&copy; 2020 SuperCell.<br/><br/> All rights reserved.
			</div>
				<div class="col-six tab-full">
					<div id="go-top">
		         	<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-angle-up"></i></a>
		         	</div>
		      	</div>

      		</div> 
		</div>
		</div>
	</footer>
	<!-- End of footer -->

<!-- Javascript -->
	<script src="plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/core.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="plugins/countdown/jquery.countdown.min.js" ></script>

	<!--<script>
		var password = document.getElementById("password");
		var confirm_password = document.getElementById("confirmpassword");

		function validatePassword(){
			if(password.value != confirmpassword.value) {
				confirm_password.setCustomValidity("Passwords Don't Match!");
			}
			else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script> -->

<!--<form name = "login" method="post" action="login.php">
	Username: <input type="text" name="txtusername" placeholder="Enter your username"/>
	Password: <input type="password" name="txtpassword" placeholder="Enter your password"/>
	<input type="submit" value="Login">	
</form> -->


</body>
</html>
