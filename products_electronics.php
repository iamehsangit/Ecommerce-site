<?php
	include('all_Classes.php');	
	$User = new User;	
?>


<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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
		
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">		
					<?php 
						$type='0';
			 			$result = $User->catagory($type);
			 			$total_row = mysqli_num_rows($result);
			 
						while($assoc = mysqli_fetch_assoc($result))
						{ 											
					?>
						<li><a href="products.php"><?php echo $assoc['name'] ?></a></li>
					<?php  } ?>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
				<a href="single.html" ><img class="img-responsive" src="images/pro.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				
				<div class="col-md-9 product1">
				<div class=" bottom-product">
				<?php 
					$type='0';
			 					$result = $User->product($type);
			 					$total_row = mysqli_num_rows($result);
			 
								while($assoc = mysqli_fetch_assoc($result))
								{ 											
							?>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							
								
	
					
							<a href="#"><img class="img-responsive" src="images/<?php echo $assoc['image'] ?>" alt="" >
							<div class="pro-grid">
										
									<span class="buy-in">Buy Now</span>
							</div>
						</a>
						
						</div>
						<p class="tun"><?php echo $assoc['product_name'] ?></p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i><?php echo $assoc['price'] ?></p></a>						
					
					</div>
					<?php  } ?>	
					
					
					
					
					
					
					
		
					<div class="clearfix"> </div>
				</div>
				
				</div-->
		<div class="clearfix"> </div>
		<nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
		</div>
		
		</div>
			
				<!---->

<!--//content-->
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
			