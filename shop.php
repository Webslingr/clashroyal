<?php
session_start();
include("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Countdown to Forum">
	<meta name="author" content="Supercell">

	<title>Shop</title>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="plugins/animate/animate.min.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	
</head>

<body id="top" class="fixed-header">
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a class="active" href="shop.php">Shop</a></li>
						<li><a href="contact.html">Contact</a></li>
						
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<?php 
					  if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
					 	{
					      echo $_SESSION["username"];
					      echo '<a href="shop.php"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>';
					      echo '<a href="logout.php"><span>Logout</span></a></li>';
						}
					 else
					 echo '<a href="registration.html"><i class="fa fa-user"></i>  Sign Up</a>/<a href="login.php">Login</a>';
					    
 				 ?>
			</div>
		</div>
	</header>
	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div><!-- /.modal-search -->
	
	<!-- wrapper -->

	<div id="wrapper">	
		<section class="hero" style="background-image: url(img/cover/cover.jpg);">
			<div class="hero-bg-success"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Shop Now</div>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Shop</li>
					</ol>	
				</div>
			</div>
		</section>

		<section class="padding-30">
			<div class="container text-center">
				<h2 class="font-size-22 font-weight-300">Our team is working hard to bring you a way to own <span class="font-weight-500">Clash Royale Goodies</span>! Come back later!</h2>
			</div>
		</section>


		<div class="container">

<ul class="nav tabcustom nav-tabs">
	<li class="active"><a data-toggle="tab" href="#products">Product</a></li>
	<li><a data-toggle="tab" href="#cart">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])){echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>
</ul>
<div class="tab-content">
	<div id="products" class="tab-pane fade in active">
		<?php
		$query = "SELECT * FROM product ORDER BY product_id ASC";
		$result = mysqli_query($conn, $query);

		 if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
		?>
				<div class="col-md-4 col-sm-6 col-xxs-12 animate-box ">
					  <div class="image-popup shop-box ">
							<div class="panel">
							<div class="shop-panel">
								<h3 class="shop-product-title text-center"><?php echo $row["product_name"];?></h3>
								<img class="image-responsive shop-image" src="<?php echo $row["product_image"]; ?>"/>
								<div class=" text-center shop-des"><?php echo $row['product_des']; ?></div>
								<div class=" text-center image-price">$ <?php echo $row["price"]; ?></div>

								<input type="text" style="" class="shop-quantity" name="quantity" id="quantity<?php echo $row["product_id"]; ?>" value="1" size="3" />
								<input type="hidden" name="hidden_name" id="name<?php echo $row["product_id"]; ?>" value="<?php echo $row["product_name"]; ?>" />
								<input type="hidden" name="hidden_price" id="price<?php echo $row["product_id"]; ?>" value="<?php echo $row["price"]; ?>" />
								<?php if((isset($_SESSION['logged']) && $_SESSION['logged']==true) || (isset($_SESSION['adminLogged']) && S_SESSION['adminLogged'] == true)) { ?>
								<button type="button" name="add_to_cart" id="<?php echo $row["product_id"]; ?>" class="btn shop-btn btn-inverse add_to_cart" data-placement="bottom">Add to cart <i class="fa fa-cart-plus"></i></button>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			}
			?>
	</div>
		
	<div id="cart" class="tab-pane fade">
		<div id="order_table" class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40$">Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) 
					{
				?>
					<tr>
						<td><?php echo $values["product_name"]; ?></td>
						<td><?php echo $values["product_quantity"]; ?></td>
						<td align="right"><?php echo $values["product_price"]; ?></td>
						<td align="right"><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
						<td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>
					</tr>
					<?php
						$total = $total + ($values["product_quantity"] * $values["product_price"]);
						$_SESSION["total"]=$total;
					}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td><button name="checkout" class="btn btn-success checkout" id="<?php echo $total ?>" onclick="location.href='checkout.php'">Checkout</button></td>	
					</tr>
				<?php
			}
			?>
			</table>
		</div>
	</div>
</div>
				
</div>
	<!-- /#wrapper -->
	
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
	<!-- /.footer -->
	
	<!-- Javascript -->
	<script src="plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/core.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="plugins/countdown/jquery.countdown.min.js" ></script>
	

	<script>
		$(document).ready(function () {
	cartAction('','');
})
</script>

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
