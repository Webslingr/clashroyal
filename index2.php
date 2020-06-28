<?php
session_start(); // Right at the top of your script
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="HomePage ClashRoyale Reviews">
	<meta name="author" content="Supercell">
	
	<title>Clash Royale</title>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="plugins/animate/animate.min.css" rel="stylesheet">
	<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="css/theme.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>

<body id="top" class="fixed-header">

	<!-- header -->
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li><a class="active" href="#">Home</a></li>
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
						<li><a href="shop.php">Shop</a></li>
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


	<!-- modal-search -->
	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div>
	<!-- /modal-search -->
	
	<!-- wrapper --> 
	<div id="wrapper">	
		<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#full-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#full-carousel" data-slide-to="1"></li>
				<li data-target="#full-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active inactiveUntilOnLoad">
					<img src="img/slideshow/slide-background1.png" alt="Slide1">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown">Clash Royale</h1>
							<a href="about.html"><button type="button" data-toggle="modal" class="btn btn-primary btn-lg btn-icon-right" data-animation="animated animate10 fadeInDown">Learn more<i class="fa fa-chevron-right"></i></button></a>

						</div>		
					</div>
				</div>
				
				<div class="item">
					<img src="img/slideshow/slide-background2.jpg" alt="Slide 2">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeInDown">From the creators of Clash of Clans</h1>
							<p data-animation="animated animate7 fadeInUp">Play now for free</p>
							<a href="about.html"><button type="button" data-toggle="modal" class="btn btn-inverse btn-rounded btn-lg" data-animation="animated animate10 fadeInDown"><i class="fa fa-apple"></i></button></a>
							<a href="about.html"><button type="button" data-toggle="modal" class="btn btn-inverse btn-rounded btn-lg" data-animation="animated animate10 fadeInDown"><i class="fa fa-android"></i></button></a>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="img/slideshow/slide-background3.jpg" alt="Slide3">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown">Enter the arena</h1>
							<p data-animation="animated animate7 fadeIn">Collect Clash troops, and use them to wreak havoc on your opponent’s towers!</p>
						</div>
					</div>
				</div>
							
				<a class="left carousel-control" href="#full-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#full-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		
		<!-- Recent Posts (Blog) -->
		<section class="bg-grey-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title outline">
							<h4>Recent Posts</h4>
						</div>
						<h4 class="page-header text-center text-initial"><i class="fa fa-clock-o"></i>2016</h4>
						<ul class="timeline">

							<li>
								<div class="timeline-badge primary"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4><a href="blog-communityroundup.html"><i class="fa fa-gear"></i> Clash Royale Community Roundup</a></h4>
										<img class="full-width" src="img/blog/timeline/communityroundup.jpg" alt="communityroundup" />  
									</div>
									<div class="timeline-body">
										<p>Some of our favorite content from the Clash Royale community!</p>
									</div>
									<div class="timeline-footer">
										<i class="fa fa-gear"></i> October 3, 2016
										<a class="pull-right"><i class="fa fa-newspaper-o"></i>Community</a></a>
									</div>
								</div>
							</li>

							<li>
								<div class="timeline-badge primary"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4><a href="blog-sneakpeeks.html"><i class="fa fa-newspaper-o"></i> Update Sneak Peeks!</a></h4>
										<img class="full-width" src="img/blog/timeline/sneakpeek.jpg" alt="sneakpeek" />  
									</div>
									<div class="timeline-body">
										<p>Coming in the next update... Sneak Peek #1 - New Chests</p>
									</div>
									<div class="timeline-footer">
										<i class="fa fa-calendar-o"></i> September 24, 2016
										<a class="pull-right"><i class="fa fa-newspaper-o"></i>News</a></a>
									</div>
								</div>
							</li>

							<li>
								<div class="timeline-badge primary"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4><a href="blog-victorychallenge.html"><i class="fa fa-sticky-note"></i>Update: New Tournament Mode, Cards & Chests!</a></h4>
											<img class="full-width" src="img/blog/timeline/challenges-update.jpg" alt="Challenges Update" />  
										</div>
									<div class="timeline-body">
										<p>New tournament mode, new cards, new chests...</p>
									</div>
									<div class="timeline-footer">
									<i class="fa fa-calendar-o"></i> September 19, 2016
									<a class="pull-right"><i class="fa fa-wpforms"></i>Release Notes</a></a>
									</div>
								</div>
							</li>
							
							<li>
								<div class="timeline-badge primary"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4><a href="blog-balancelive.html"><i class="fa fa-sticky-note"></i> New Balance Live!</a></h4>
										<img class="full-width" src="img/blog/timeline/balancelive.jpg" alt="balancelive" />  
									</div>
									<div class="timeline-body">
										<p>In this round of balance changes we're taking a look at a few underused cards.</p>
									</div>
									<div class="timeline-footer">
										<i class="fa fa-calendar-o"></i> September 19, 2016
										<a class="pull-right"><i class="fa fa-wpforms"></i>Release Notes</a></a>
									</div>
								</div>
							</li>

							<li>
								<div class="timeline-badge primary"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4><a href="blog-duels.html"><i class="fa fa-film"></i> More Rules, More Duels!</a></h4>
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/dCfO59qo2lM" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="timeline-body">
										<p>More ridiculous rules, more ridiculous duels!</p>
									</div>
									<div class="timeline-footer">
										<i class="fa fa-calendar-o"></i> September 18, 2016
										<a class="pull-right"><i class="fa fa-newspaper-o"></i>News</a></a>
									</div>
								</div>
							</li>
							
							

							<div class="clearfix pull-none"></div>
						</ul>
						
						<div class="text-center"><a href="blog.html" class="btn btn-primary btn-lg btn-shadow btn-rounded margin-top-20" id="load-more">Show More</a></div>
					</div>
				</div>
			</div>
		</section>
	</div>
			
		<!-- Reviews -->		
		<section>	
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							<h4>Reviews</h4>
						</div>
					</div>
				</div>
				<div class="row slider">
				<div class="owl-carousel">
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/toucharcade.jpg" alt="toucharcade">
								<span class="label label-success">10</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="http://toucharcade.com/2016/03/02/clash-royale-review/">TouchArcade</a></h4>
								<p>"I encourage everyone to give this game a try, even if you're a vigilant hater of free to play."</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/pocketgamer.png" alt="pocketgamer">
								<span class="label label-success">9</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="http://www.pocketgamer.co.uk/r/iPad/Clash+Royale/review.asp?c=69269">Pocket Gamer</a></h4>
								<p>The best mobile games balance depth and simplicity.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/googleplay.png" alt="googleplay">
								<span class="label label-warning">8.8</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="https://play.google.com/store/apps/details?id=com.supercell.clashroyale&hl=en">Google Play</a></h4>
								<p>Great strategy game!</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/pcmag.png" alt="pcmag">
								<span class="label label-warning">8</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="http://www.pcmag.com/review/343562/clash-royale-for-iphone">PC Magazine</a></h4>
								<p>Clash Royale sounds like yet another by-the-numbers, wallet-draining iPhone game, but its unique blend of strategy gaming ideas is legitimately satisfying.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/stufftv.png" alt="stufftv">
								<span class="label label-success">9.2</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="http://www.stuff.tv/app-reviews/clash-royale/review">Stuff TV</a></h4>
								<p>Combat is fun and easy to grasp but you must be online, even to play training missions.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/trustedreviews.png" alt="trustedreviews">
								<span class="label label-success">9</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="http://www.trustedreviews.com/opinions/clash-royale-tips-and-tricks">Trusted Reviews</a></h4>
								<p>Proven to be a wonderfully addictive experience since exploding onto mobile earlier this year, drawing in millions with its impressive tower defense mechanics and rewardingly satisfying gameplay.</p>
							</div>
						</div>

						<div class="card card-list">
							<div class="card-img">
								<img src="img/review/commonsensemedia.png" alt="csm">
								<span class="label label-danger">6</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="https://www.commonsensemedia.org/app-reviews/clash-royale#csm-tooltip-about-rating-system">Common Sense Media</a></h4>
								<p>It's tough to play the game without a great deal of patience or real money because rewards and upgrades require either lots of time or cash to unlock.</p>
							</div>
						</div>
					</div>
					<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>
		<!-- /Reviews -->
		
			
		<!-- Trailer Video -->	
		<div class="background-image margin-top-40" style="background-image: url(http://img.youtube.com/vi/tmWUhk4VtQw/maxresdefault.jpg);">
			<span class="background-overlay"></span>
			<div class="container">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tmWUhk4VtQw?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
		<!-- /Trailer Video -->
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

	
	<!-- Javascript -->
	<script src="plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/core.min.js"></script>
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	</script>
</body>
</html>
