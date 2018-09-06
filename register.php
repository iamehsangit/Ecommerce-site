<?php 
	session_start();
	include('all_Classes.php');
	$User = new User;
	$error_registration['error']='';
	
	if($_POST){		
			$error_registration['error']= $User->RegistrationFormValidation($_POST);
	
	}
?>



<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
	<?php include('header_includer.php'); ?>
	<?php include('top_bar.php');?>
	<script>
    		function passwordMatch() {
        		var pass1 = document.getElementById("pass").value;
				var pass2 = document.getElementById("repeat_password").value;
        		if (pass1 != pass2) {
            		alert("Passwords Do not match");
            		//document.getElementById("pass1").style.borderColor = "#E34234";
					//document.getElementById("pass2").style.borderColor = "#E34234";
				}
			}
</script>
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
					<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
				      <li><a class="color1" href="#">Shop</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Bags</a></li>
										<li><a href="products.html">Caps & Hats</a></li>
										<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										<li><a href="products.html">Jackets & Coats</a></li>
										<li><a href="products.html">Jeans</a></li>
										<li><a href="products.html">Jewellery</a></li>
										<li><a href="products.html">Jumpers & Cardigans</a></li>
										<li><a href="products.html">Leather Jackets</a></li>
										<li><a href="products.html">Long Sleeve T-Shirts</a></li>
										<li><a href="products.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Shirts</a></li>
										<li><a href="products.html">Shoes, Boots & Trainers</a></li>
										<li><a href="products.html">Shorts</a></li>
										<li><a href="products.html">Suits & Blazers</a></li>
										<li><a href="products.html">Sunglasses</a></li>
										<li><a href="products.html">Sweatpants</a></li>
										<li><a href="products.html">Swimwear</a></li>
										<li><a href="products.html">Trousers & Chinos</a></li>
										<li><a href="products.html">T-Shirts</a></li>
										<li><a href="products.html">Underwear & Socks</a></li>
										<li><a href="products.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">	Lookbook</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Bags</a></li>
										<li><a href="products.html">Caps & Hats</a></li>
										<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										<li><a href="products.html">Jackets & Coats</a></li>
										<li><a href="products.html">Jeans</a></li>
										<li><a href="products.html">Jewellery</a></li>
										<li><a href="products.html">Jumpers & Cardigans</a></li>
										<li><a href="products.html">Leather Jackets</a></li>
										<li><a href="products.html">Long Sleeve T-Shirts</a></li>
										<li><a href="products.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Shirts</a></li>
										<li><a href="products.html">Shoes, Boots & Trainers</a></li>
										<li><a href="products.html">Shorts</a></li>
										<li><a href="products.html">Suits & Blazers</a></li>
										<li><a href="products.html">Sunglasses</a></li>
										<li><a href="products.html">Sweatpants</a></li>
										<li><a href="products.html">Swimwear</a></li>
										<li><a href="products.html">Trousers & Chinos</a></li>
										<li><a href="products.html">T-Shirts</a></li>
										<li><a href="products.html">Underwear & Socks</a></li>
										<li><a href="products.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="blog.html">Blog</a></li>				
				<li><a class="color6" href="contact.html">Conact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Register</h1>
		  	  
				
            <form method="post" action="#">
               <div class="form-group">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="name" id="name"  placeholder="Ehsanul Hasan"/>
                </div>
               
                <div class="form-group">
                    <label>Email</label>
                    <input required type="email" class="form-control" name="email" id="email"  placeholder="Ehsan@gmail.com"/>
                </div>
                
                <div class="form-group">
                    <label>Phone</label>
                    <input required type="text" class="form-control" name="phone" id="phone"  placeholder="01849292007"/>
                </div>
                
                <div class="form-group">
                    <label>Address</label>
                    <input required type="text" class="form-control" name="address" id="address"  placeholder=""/>
                </div>
                
                
                
                <div class="form-group">
                    <label>Username</label>
                    <input required type="text" class="form-control" name="username" id="user_name"  placeholder="Ehsan"/>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input required type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your password"/>
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input required type="password" class="form-control" name="repeat_password" id="repeat_password"  placeholder="Enter password again"/>
                </div>
                
                <div class="form-group">
                	<label>Gender</label>
                	<select class="form-control" name="gender">
                   		<option value="male">Male</option>
                   		<option value="female">Female</option>
                   		<option value="other">Others</option>
                	</select>
                </div>

                
                <input class="btn btn-primary" type="submit" onclick="passwordMatch()" value="Create Account" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
				</br>
                <li><a href="login.php" class="popup-text">Already Memeber</a>
                </li>
            </ul>
        </div>
	</div>
	<?php 
		if($_POST)
		{
			if($error_registration['error']=='')
			{
				echo "<script type='text/javascript'>";
				echo "alert('You are successfully registered. Please log in')";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('User Name already taken')";
				echo "</script>";
			}
		}
	?>
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
			