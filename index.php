<?php
	include('all_Classes.php');
	$User = new User;
	session_start();	
?>


<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<?php include('header_includer.php'); ?>
	<?php include('top_bar.php');?>
</head>
<body>
<!--header-->

<div class="header">
	
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<!----> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
												<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>All Catagory</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="products_electronics.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/electronics1.png" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Electronics</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="products_electronics.php">Best Electronics</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="products_books.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/books.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Books</span>	
									</h3>
								</div>
				</a>
			<p><a href="products_books.php">All Type of Books</a></p>
			</div>
	</div>
	</div>
		</div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="images/lo.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo3.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo4.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo5.png" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
	
</div>

<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
			