<?php 
	session_start();
	include('all_Classes.php');
	$User = new User;
	$error['error']='';
	
	if($_POST){		
		$error['error']=$User->loginValidation($_POST);
		if ($error['error']=='')
		{
			$_SESSION['assocUser']= $User->getAssocRowFromUser();
			$_SESSION['assocCustomer']= $User->getAssocRowFromCustomer();
			header("Location: home.php");	
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('password missmatch')";
			echo "</script>";
		}
	}

?>

<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
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
<div class="container">
		<div class="account">
		<h1>Sign In</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top">
			
			<form method="post" action="#">
                <div class="form-group">
                    <label>Username</label>
                    <input required type="text" class="form-control" name="u_name" id="username"  placeholder="Ehsan"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input required type="password" class="form-control" name="password" id="password"  placeholder="Enter your password"/>
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
            </form>
			
			
			
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="images/1.jpg" alt=""></a>
			<div class="five">
			<h2>25% </h2><span>discount</span>
			</div>
			<a href="register.php" class="create">Create an account</a>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
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
			