<?php
include("db_connect.php");
session_start();
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

	<!-- Including external css file -->
	<style><?php include 'css/custom.css'; ?></style>

	<script>
		jQuery.ajax({
	url: "ajax_action.php",
	data:queryString,
	type: "POST",
	success:function(data){
		$("#cart-item").html(data);
		if(action != "") {
			switch(action) {
				case "add":
					$("#add_"+product_code).hide();
					$("#added_"+product_code).show();
				break;
				case "remove":
					$("#add_"+product_code).show();
					$("#added_"+product_code).hide();
				break;
				case "empty":
					$(".btnAddAction").show();
					$(".btnAdded").hide();
				break;
			}	 
		}
	},
	error:function (){}
	});
	</script>

</head>

<body id="top" class="fixed-header">
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
						<li><a href="registration.html">Registration</a></li>
						<li><a class="active" href="shop.php">Shop</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<?php 
					  if($_SESSION['logged']==true)
					    { 
					      echo $_SESSION["username"];
					      echo '<a href="logout.php"><span>Logout</span></a></li>';
					    }
					  elseif($_SESSION['logged']==false)
					    {
					      echo '<a href="registration.html"><i class="fa fa-user"></i>  Sign Up</a>/<a href="login.php">Login</a>';
					    }
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

		<!--<section class="border-top-1 border-bottom-1 border-grey-400 section no-padding no-margin">
		</section> -->

		<!--<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<div class="post post-fl">
							<div class="post-header">
								<div class="post-title">
									<h2 class="text-center text-strong">Shop Now</h2>
									<p class="text-center text-below">Our team is working hard to bring you a way to aquire clash royale goodies.</p>
									

									<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
										<tr>
										<td width="15%"	 bgcolor="#E6E6E6"><strong>Name</strong></td>
										<td width="25%"  bgcolor="#E6E6E6"><strong>Description</strong></td>
										<td width="15%"  bgcolor="#E6E6E6"><strong>Image</strong></td>
										</tr> 
										</table> -->
										<!--<div id="countdown" class="margin-top-20" class="styled"></div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</section> -->

		<section id="shop">
			<div class="container">
				<div class="row">
					
					<?php
						/*$con =mysql_connect ("localhost","root","") or die ("couldn`t connect".mysql_error());
						echo "<p class=\"text-center text-strong\">connected successfully<br></p>"; 

						mysql_select_db('clashroyale') or die ('couldn`t select database'.mysql_error());
						echo "<h2 class=\"text-center text-strong\">clashroyale selected<br></p>";*/

						// setup query
						//$q = "INSERT INTO product (product_id, product_name, product_des, price,type, product_image) VALUES 
						//('p002', 'shirt','this shirt is a shirt','25','tshirt','')";

						//Run Query
						//$result = mysql_query($q) or die(mysql_error());
						/*echo "
						<style> 
						.box { 
				       	margin-top: 30px;
				    	
				    	}
				        </style>";*/

						
				        $sql = "SELECT * FROM product";
				        $result = mysqli_query($conn, $sql);

				        if (mysqli_num_rows ($result) > 0) {
				        	while ($row = mysqli_fetch_assoc($result)) {

				    /*  echo "<div class=\"col-md-4 col-sm-6 col-xxs-12 animate-box\">";
					  echo"  <div class=\"fh5co-project-item image-popup\">";
					   echo" <div class=\"panel panel-warning\">";
						echo"	<div class=\"panel-heading\">";
						echo "<h3 class=\"panel-title\">".$row['product_name']."</h3>";
						echo "<div class=\"col-lg-4 col-sm-6 col-xxs-12 animate-box shop-box\">".'<img class="box" src='.$row['product_image'].'>'."</div>";
						//echo "<img src='.$row['product_image'].'>";
					
							echo"<div class=\"fh5co-text\">";
							echo"	<h2>Bomb Tower</h2>";
							echo"	<p>Cost 4 Elixir</p>";
								
							echo"</div>";
					echo"	</div>";
							echo"</div>";
							echo"</div>";				    
							echo"</div>";
						*/
							
						//	echo "<td>".$row['product_id']."</td>";
						//echo "<div class=\"fh5co-text\">".$row['product_name']."</div>";
						//echo "<div class=\"text-mod\">".$row['product_name']."</div>";

						echo "<div class=\"col-md-4 col-sm-6 col-xxs-12 animate-box \">";
				  			echo"  <div class=\"image-popup shop-box \">";
				   				echo" <div class=\"panel\">";
									echo "<div class=\"shop-panel\">";
										echo "<h3 class=\"shop-product-title text-center\">".$row['product_name']."</h3>";
										echo "<img class=\"image-responsive shop-image\" src='".$row['product_image']."' />";
										echo "<div class=\" text-center shop-des  \">" .$row['product_des']. "</div>";
										//echo "<div class=\" text-center image-price\">" . 'Product Description:     ' .$row['product_des']. "</div>";
										echo "<div class=\" text-center image-price\">" . 'Price: $    ' .$row['price']. "</div>";
										echo "<input type=\"text\" id=\qty_ '. $row['code'].\" name=\"quantity\" value=\"1\" size=\"2\"/>";

										$in_session = "0";
										if(!empty($_SESSION["cart_item"])) {
											$session_code_array = array_keys($_SESSION["cart_item"]);
											if(in_array($row['price'],$session_code_array)) {
												$in_session = "1";
											}
										}

										echo "<button type=\"button\" class=\"btn shop-btn btn-inverse btnAddAction cart-action\" data-placement=\"bottom\" onclick=myFunction()> Add to cart <i class=\"fa fa-cart-plus\"></i></button>";
									echo"</div>";
								echo"</div>";
							echo"</div>";
						echo"</div>";
							
				        	}
				        } else {
				        	echo "No results";
				        }
					?>


					<?php
				$in_session = "0";
				if(!empty($_SESSION["cart_item"])) {
					$session_code_array = array_keys($_SESSION["cart_item"]);
				    if(in_array($row['quantity'],$session_code_array)) {
						$in_session = "1";
				    }
				}
			?>
					<input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Add to cart" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
			<input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Added" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
					</div>
				</div>
			</div>
		</section>
										

										

									

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
				&copy; 2016 University of Mauritius.<br/><br/> All rights reserved.
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
	$(function() {
		$('#countdown').countdown('2017/03/10').on('update.countdown', function(event) {
			var $this = $(this).html(event.strftime(''
			+'<span>%-w week%!w</span>'
			+'<span>%-d day%!d</span>'
			+'<span>%H hr</span>'
			+'<span>%M min</span>'
			+'<span>%S sec</span>'));
		});
	});
	</script>

	<script>
		function myFunction() {
			alert("Added to cart");
		}
	</script>

</body>
</html>