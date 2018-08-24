<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> REGISTRATION PAGE </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#ff7675">
 <div id="main-wrapper">
     <center><h2>registration<br> SEMINAR HALL</h2></center>
	  <center><img src="image/logo.png" class="logo"/></center>
	  <form class="myform" action="register.php" method="post">
	  <label><b> username:
	  </label><br>
	  <input name="username" type="text" class="inputvalues" placeholder="username"/><br>
	  <label><b> password:
	  </label><br>
	  <input name="password" type="password" class="inputvalues" placeholder="password" required/><br>
	  <label><b>confirm password:
	  <input name="cpassword" type="password" class="inputvalues" placeholder=" confirm password" required/><br>
	  <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
	  <a href="index.php"> <input type="button" id="back_btn"  value="Back"/> </a>
	  </form>
	  <?php
         if(isset($_POST['submit_btn']))
		 {
			 //echo'<script type="text/javascript"> alert("sign up button clicked")</script>';
			 $username = $_POST['username'];
			 $password = $_POST['password'];
			 $cpassword = $_POST['cpassword'];
			 
			 if($password==$cpassword)
			 {
				 $query= "select * from user WHERE username='$username'";
				 $query_run = mysqli_query($con,$query);
				 
				 if(mysqli_num_rows($query_run)>0)
				 {
					 //there is already a user with the same username
					 echo'<script type="text/javascript"> alert("User already exits...try another user") </script>';
				 }
				 else
				 {
					 $query= "insert into user values('$username','$password')";
					 $query_run = mysqli_query($con,$query);
					
				 
					 if($query_run)
					 {
						echo'<script type="text/javascript">alert("User Registered successfuly...Go to login page to login")</script>'; 
					 }
				     else
				     {
					    echo'<script type="text/javascript">alert("ERROR!")</script>';
				     }
			 }
			 
		 }
		 else{
	    echo'<script type="text/javascript">alert("password and confirm password does not match!")</script>';
		 }
		} 
	  ?>
 </div>


</body>
</html>
