<?php 
	class User{
		protected $connection;
		protected $result;
		protected $assocRowFromCustomer;
		protected $assocRowFromUser;
		protected $userIDSession;
		public static  $dbName="ecommerce";
		public static  $userName="root";
		public static  $hostName="localhost";
		public static  $password="";
		public static  $port="";

		
		//User constractor will give us a error if connection failed and return false
		function __construct(){
			$bool = 0;
			if($this->connection = mysqli_connect(User::$hostName,User::$userName,User::$password,User::$dbName)){
				$bool =1;
			} else {
				$this->getError();
			}
			return $bool;
		}
		
		//this function will give us any mysql error might need for debuging :D
		protected function getError(){
			if(mysqli_error($this->connection)){
				$error = mysqli_error($this->connection);
				echo("<p>Mysql connect error ".$error ."</p>");
			}
			if(mysqli_error($this->connection)){
				return(true);
			} else {
				return(false);
			} 
		}
		public function redPara($string){
			$string1="<p style='color:red'>".$string."</p>";
			return($string1);
		}
		
		public function greenPara($string){
			$string1="<p style='color:green'>".$string."</p>";
			return($string1);
		}
		
		//login validation
		public function loginValidation($post){
			$username=$post['u_name'];
			$password = $post['password'];
			$sql="select * from user where user_name='$username' and password='$password';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			//$error= array();
			$error['error']="";
			if(mysqli_num_rows($result)>0){
				$this->assocRowFromUser=mysqli_fetch_assoc($result);
				$sql1="select * from customer where c_id='".$this->assocRowFromUser['u_id']."';";
				$result1 = mysqli_query($this->connection,$sql1);
				$this->getError();	
				$this->assocRowFromCustomer=mysqli_fetch_assoc($result1);
			} 
			else {
				$error['error']=$this->redPara("Username OR Password Doesnt Match");
			}
			return($error['error']);
		}
		
		
		// Registration validation
		public function RegistrationFormValidation($post){			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];		
			$username = $_POST['username'];
			$pass = $_POST['pass']; 
			$gender = $_POST['gender'];
			
			
			$error['user_name']='';
		
			$sql="select * from user where user_name='$username';";
			$result = mysqli_query($this->connection,$sql);
			$numRow = mysqli_num_rows($result);
			if($numRow>0){
				$error['user_name']="Username Already Taken";
			}
			else{
				//insert in user table
				$sql1="insert into user (user_name,password) values ('$username','$pass');";
				$result1 = mysqli_query($this->connection,$sql1);
				$this->getError();
				
				//retrive the user id form unser name
				$sql2="select u_id from user where user_name='$username';";				
				$result2 = mysqli_query($this->connection,$sql2);
				$this->getError();
				$assoc=mysqli_fetch_assoc($result2);
				
				//insert in customer table
				$sql3="insert into customer(c_id,name,email,phone,address,gender) values (".$assoc['u_id'].",'$name','$email','$phone','$address','$gender');";			
				mysqli_query($this->connection,$sql3);
				$this->getError();
			}
			return($error['user_name']);
		}
		
		//get associative array for user
		public function getAssocRowFromUser(){
			return($this->assocRowFromUser);	
		} 
		
		public function getAssocRowFromCustomer(){
			return($this->assocRowFromCustomer);	
		} 
		
		public function getCustomerInfo($u_id)
		{
			$sql = "select * from customer where c_id='$u_id';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function catagory($type)
		{
			$sql = "select * from catagory where catagory_for='$type';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function product($type)
		{
			$sql = "select * from product natural join catagory where catagory.c_id=product.catagory_id and catagory.catagory_for='$type';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function getProduct($p_id)
		{
			$sql = "select * from product  where p_id='$p_id';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function insert_cart($c_id,$p_id)
		{
			$sql = "insert into cart(p_id,c_id) values ('$p_id','$c_id');";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
			return($p_id);
		}
		
		public function get_cart($c_id)
		{
			$sql = "select * from product,cart where product.p_id = cart.p_id and cart.c_id='$c_id';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function total_price($c_id)
		{
			$sql = "select sum(price) as total_price from product,cart where product.p_id = cart.p_id and cart.c_id='$c_id';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			$total = mysqli_fetch_assoc($result);
			$total_price= $total['total_price'];
			return($total_price);
		}
		
		public function remove_fromCart($p_id,$c_id)
		{
			$sql = "delete from cart where c_id='$c_id' and p_id='$p_id';";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			return($result);
		}
		
		public function place_order($c_id)
		{
			$total_amount=$this->total_price($c_id);			
			
			$sql = "insert into order_list(c_id,issue_date,total_amount) values ('$c_id',now(),'$total_amount');";
			$result = mysqli_query($this->connection,$sql);
			$this->getError();
			
			$sql1 = "select max(o_id) as max_o_id from order_list where c_id='$c_id';";
			$result1 = mysqli_query($this->connection,$sql1);
			$this->getError();
			$assoc=mysqli_fetch_assoc($result1);
			
			$cart= $this->get_cart($c_id);
			//$assoc1 = mysqli_fetch_assoc($cart);
			while($assoc1 = mysqli_fetch_assoc($cart))
			{
				$sql2 = "insert into order_history(o_id,p_id,issue_date) values ('".$assoc['max_o_id']."', '".$assoc1['p_id']."',now());";
				$result2 = mysqli_query($this->connection,$sql2);
				$this->getError();
			}
			
			$sql3 = "delete from cart where c_id='$c_id';";
			$result3 = mysqli_query($this->connection,$sql3);
			$this->getError();
			
			return true;			
		}
		
	}


?>