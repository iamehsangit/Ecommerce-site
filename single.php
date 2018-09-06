<?php	
	session_start();
	include('all_Classes.php');
	$User= new User;
	$userAssoc=$_SESSION['assocUser'];
	$result = $User->getCustomerInfo($userAssoc['u_id']);
	$getCustomer = mysqli_fetch_assoc($result);
	$p_id = $_GET['p_id'];
?>

<!DOCTYPE html>
<html>
<head>
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
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<a href="checkout.php?p_id=<?php echo $userAssoc['u_id']?>" class="add-cart item_add">ADD TO CART</a> </div>
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
				
<div class=" per1">
				<a href="#" ><img class="img-responsive" src="images/pro.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
  <ul class="slides">
   	<?php 
	  $result = $User->getProduct($p_id);
	  $productAssoc = mysqli_fetch_assoc($result);	  
	?>
    <li data-thumb="images/<?php echo $productAssoc['image'] ?>">
      <img src="images/<?php echo $productAssoc['image'] ?>" />
    </li>
    
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo $productAssoc['product_name'] ?></h4>
							
							
							<h5 class="item_price"><?php echo $productAssoc['price']; echo " TK" ?></h5>

							<div class="available">
								<ul>
									<li>Color
										<select>
										<option>Silver</option>
										<option>Black</option>
										<option>Dark Black</option>
										<option>Red</option>
									</select></li>
								
								<div class="clearfix"> </div>
							</ul>
							</div>
							
							<div class="available">
								<?php  $quantity=$productAssoc['quantity'] ;
									if ($quantity>0)
									{?>
										<h2 class="item_price"><?php echo $User->greenPara("Available");?>
											</h2>
							</div>
								
								<a href="checkout.php?p_id=<?php echo $User->insert_cart($userAssoc['u_id'],$productAssoc['p_id']) ?>" class="add-cart item_add">ADD TO CART</a>
							<?php }
								else {?>
									<h2 class="item_price"><?php echo $User->redPara("Out of Stock");}
							?>
							
							
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					 
		
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
			