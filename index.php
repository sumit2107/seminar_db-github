<?php
 session_start();
 require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> LOGIN PAGE </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#ff7675">
 <div id="main-wrapper">
     <center><h2>Login <br>SEMINAR HALL</h2></center>
	  <center><img src="image/logo.png" class="logo"/></center>
	  <form class="myform" action="index.php" method="post">
	  <label><b> username: </b>
	  </label><br>
	  <input name="username" type="text" class="inputvalues" placeholder="username" required/><br>
	  <label><b> password: </b>
	  </label><br>
	  <input name="password" type="password" class="inputvalues" placeholder="password" required/><br>
	  <input name="login" type="submit" id="login_btn" value="Login"/><br>
	  <a href="register.php"><input type="button" id="register_btn"  value="register"/></a>
	  </form>
	  <?php
	  if(isset($_POST['login']))
	  {
	   $username=$_POST['username'];
	   $password=$_POST['password'];
		  $query="select * from user WHERE username='$username' AND password='$password'";
		  
		  $query_run = mysqli_query($con,$query);
		  if(mysqli_num_rows($query_run)>0)
		  {
			  //valid
			  $_SESSION['username']= $username;
			  header('location:homepage.php');
		  }
		  else
		  {
			  //invalid
			  echo '<script type="text/javascript"> alert ("invalid credential") </script>';
  	      }
	  }
	  
	  ?>
 </div>


</body>
</html>
 