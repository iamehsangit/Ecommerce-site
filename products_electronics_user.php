<?php
	session_start();
	include('all_Classes.php');
	$User= new User;
	$userAssoc=$_SESSION['assocUser'];
	$result = $User->getCustomerInfo($userAssoc['u_id']);
	$getCustomer = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
	<?php include('header_includer.php'); ?>
	
</head>
<body>
<!--header-->
<div class="header-top">
		<div class="container">
			
			<div class="header-left">		
					<ul>
					
						<li><a  href="profile.php"  ><?php echo $getCustomer['name']?></a>
				

					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<a href="checkout.php?p_id=<?php echo $userAssoc['u_id']?>" class="add-cart item_add">ADD TO CART</a>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
 
 <div class="header">
  <div class="container">
  	
	  <div class="head-top">
				<div class="logo">
					<a href="home.php"><img src="images/logo.png" alt=""></a>	
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
						<?php 
							} 
						?>
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
			        			} 
								else {
			            			$(this).removeClass('active');
			            			$(this).next().stop(true,true).slideUp('normal');
								}
			    			});
			
						});
				</script>
<!---->
	
				<!---->
				
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
								
	
					
							<a href="single.php?p_id=<?php echo($assoc['p_id'])?>"><img class="img-responsive" src="images/<?php echo $assoc['image'] ?>" alt="" >
							<div class="pro-grid">
										
									<span class="buy-in">Buy Now</span>
							</div>
						</a>
						
						</div>
						<p class="tun"><?php echo $assoc['product_name'] ?></p>
						<a href="single.php?p_id=<?php echo($assoc['p_id'])?>" class="item_add"><p class="number item_price"><i> </i><?php echo $assoc['price'] ?></p></a>						
					
					</div>
					<?php  } ?>	
					
					
					
					
					
					
					
		
					<div class="clearfix"> </div>
				</div>
				
				</div-->
		<div class="clearfix"> </div>
		
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
			