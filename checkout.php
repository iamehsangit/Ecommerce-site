<?php
	session_start();
	include('all_Classes.php');
	$User= new User;
	$userAssoc=$_SESSION['assocUser'];
	$result = $User->getCustomerInfo($userAssoc['u_id']);
	$getCustomer = mysqli_fetch_assoc($result);
	$p_id = $_GET['p_id'];	
	//$productAssoc = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
<?php include('header_includer.php'); ?>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			
			<div class="header-left">		
					<ul>
						<li><a  href="profile.php"  ><?php echo $getCustomer['name']?></a>
						<li>
</li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span>My Cart</span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="home.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<div class="container">
	<div class="check">	 
			 <h1>My Shopping Bag</h1>
		 <div class="col-md-9 cart-items">
			
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			   <?php 
	//echo $getCustomer['c_id'];
	$result = $User->get_cart($getCustomer['c_id']);
	while($productAssoc= mysqli_fetch_assoc($result)){ ?>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/<?php echo $productAssoc['image'] ?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $productAssoc['product_name'] ?></a></h3>
						<ul class="qty">
							<li><p><?php echo $productAssoc['price']; echo "TK" ?></p></li>
						</ul>
						
							 <div class="delivery">
							 	<?php 
									$product_id= $productAssoc['p_id']; 
									$customer_id= $userAssoc['u_id'];
								 
								?>
								 <!--a href="<?php /*$User->remove_fromCart($product_id,$customer_id)*/?>"><span>remove</span></a-->
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>											
				  </div>
			 </div>
			 <?php }?>
			 
			 
			 
			 
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 		
		 </div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="products_electronics_user.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1"><?php
					 $result2 = $User->total_price($getCustomer['c_id']);
					 echo $result2;					 
					 ?></span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php echo ($result2+150); echo "TK"?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="place_order.php">Place Order</a>			 
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


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
			