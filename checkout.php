<?php
	include("db_connect.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Registration for new members">
	<meta name="author" content="Supercell">

	<title>Check Out</title>

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
			<a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="index.html">Home</a></li>
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
				<a href="#" data-toggle="modal-search"><i class="fa fa-search"></i></a>
			</div>
		</div>
	</header>
	<!-- End of header -->

	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div><!-- /.modal-search -->

<!-- wrapper -->
	<div id="wrapper">
		<section class="elements bg-white">
				<div class="container">
					<div class="row">
						<div class="col-md-6 pull-none margin-auto">
							<div class="title">
								<h4>Order Details</h4>
							</div>
							<form method="post" action="order.php">
								<div class="form-group input-icon-right">
									<input type="text" name="price" class="form-control" readonly="readonly" value="<?php echo $_SESSION["total"];?>">
								</div>
								<!--<div class="form-group input-icon-right">
									<input type="text" name="order_id" class="form-control" placeholder="Enter order id" required>
								</div>-->
								<div class="form-group input-icon-right">
									<input type="text" name="order_name" class="form-control" placeholder="Enter Name" required>
								</div>
								<div class="form-group input-icon-right">
									<input type="email" name="order_email" class="form-control" placeholder="Enter email" required>
								</div>
								<div class="form-group input-icon-right">
									<select name="country" class="form-control">
										<option value="" disabled selected>Select Country</option>
										<option value="England">England</option>
										<option value="Mauritius">Mauritius</option>
										<option value="USA">USA</option>
									</select>
								</div>
								<div class="form-group input-icon-right">
									<input type="text" name="address" class="form-control"  placeholder="Enter address" required>
								</div>
								<div class="form-group input-icon-right">
									<input type="text" name="city" class="form-control"  placeholder="Enter city" required>
								</div>							
								<div class="form-group input-icon-right">
									<input type="text" name="phone" class="form-control" placeholder="Enter phone number" >
								</div>
								<div class="title">
								<h4>Shipping Details</h4>
								</div>
								<div class="form-group input-icon-right">
									<select name="type" class="form-control">
										<option value="" disabled selected>Card Type</option>
										<option value="Visa">Visa</option>
										<option value="Mastercard">Mastercard</option>
										<option value="American Express">American Express</option>
									</select>
								</div>
								<div class="form-group input-icon-right">
									<input type="text" name="card_name" class="form-control" placeholder="Enter Name On Card" required>
								</div>
								<div class="form-group input-icon-right">
									<input type="number" name="card_number" class="form-control" placeholder="Enter Number On Card" required>
								</div>
								<div class="form-group input-icon-right">
									<input type="number" name="cvv" class="form-control" placeholder="Enter CVV" required>
								</div>
								<div class="form-group input-icon-right">
									<input type="number" name="exp_month" class="form-control" placeholder="Enter expiration month" required>
								</div>
								<div class="form-group input-icon-right">
								<input type="number" name="exp_year" class="form-control" placeholder="Enter expiration year" required>
								</div>
								<div class="text-center margin-top-30">
								<input type="submit" class="btn btn-primary btn-lg btn-shadow" value="CONFIRM AND PAY">
								</div>
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
</body>
</html>
<script>
	$(document).ready(function(data) {
		$('.add_to_cart').click(function() {
			var product_id = $(this).attr("id");
			var product_name = $('#name'+product_id).val();
			var product_price = $('#price'+product_id).val();
			var product_quantity = $('#quantity'+product_id).val();
			var action = "add";

			if(product_quantity > 0)
			{
				$.ajax({
					url:"action.php",
					method: "POST",
					dataType: "json",
					data:{
						product_id:product_id,
						product_name:product_name,
						product_price:product_price,
						product_quantity:product_quantity,
						action:action
					},
					success:function(data)
					{
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
						alert("Product has been added into cart");
					}
				});
			}
			else 
			{
				alert("Please Enter number of quantity.")
			}
		});

		$(document).on('click', '.delete', function(){
			var product_id = $(this).attr("id");
			var action = "remove";
			
				$.ajax({
					url:"action.php",
					method:"POST",
					dataType:"json",
					data:{product_id:product_id, action:action},
					success:function(data){
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
					}
				});
			
		});

});
</script>
