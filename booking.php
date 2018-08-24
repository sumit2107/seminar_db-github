<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
body { color:#3f312e; background:#ecd078 url('images/bg.png') repeat-x; font: 14px Helvetica, Arial, Sans-serif; }
</style>
<meta charset="UTF-8">
<title>BOOKING FORM</title>
</head>
<body>
<form action="booking.php" method="post">
<fieldset>
<legend> Personal Details: </legend>
<label for="name">name: </label><input type="text" name="name" id="name" required autofocus palceholder="your name" pattern="[a-zA-Z]{3,}" title="Please enter in more than three letters">
<label for="name">email: </label><input type="text" name="email" id="email" required placeholder="Your Email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter in avalid email address">
<label for="phone">Phone: </label><input type="tel" name="phone" id="phone" required placeholder="your phone no" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" title="please enter in a valid phone number in this format: #### ### ###">
<label for="Department">Department: </label>
<select name="department" required>
<option value=""> </option>
<option value="ISE"> ISE</option>
<option value="MEC"> MEC</option>
<option value="CSE"> CSE</option>
<option value="CIV"> CIV</option>
<option value="AERO">AERO </option>
<option value="CH"> CH</option>
</select>
<label for="Seminar hall">Seminar Hall: </label>
<select name="seminar hall" required>
<option value=""> </option>
<option value="seminar 3"> seminar 3</option>
<option value="seminar 4"> seminar 4</option>
<option value="seminar 5"> seminar 5</option>
<option value="seminar 6"> seminar 6</option>
<option value="rajlakshmi seminar hall"> rajlakshmi seminar hall</option>
</select>
</fieldset>
<br>
<fieldset>
<legend>Booking Details: </legend>
<label for="date">date: </label> <input id="date" type="date" name="date" min="2013-12-02">
<p> Period of Time:</p>
<label for="first half">First half: </label><input id="first half" type="radio" name="first half" value="yesfirst half">
<label for="second half">Second half: </label><input id="second half"<input type="radio" name="second half" value="yessecond half">
<br>
 <input name="submit_btn" type="submit" id="submit_button" value="submit"/>

<?php

if(isset($_POST['submit'])){
	$name = $_POST['Faculty name'];
	$email = $_POST['email'];
	$Phone = $_POST['Phone'];
	$Department = $_POST['Department'];
	$SeminarHall = $_POST['SeminarHall'];
	$date = $_POST['date'];
	$Periodoftime = $_POST['Periodoftime'];
	$firsthalf = $_POST['firsthalf'];
	$secondhalf = $_POST['secondhalf'];
	if($Facultyname=='' or $email=='' or $phone==''){
		echo "<script>alert('Any field is empty')</script>";
		exit();
	}
	$query = "insert into posts values('$Facultyname','$email','$Phone','$Department','$SeminarHall','$SeminarHall','$Booking date','$Periodoftime','$firsthalf','$secondhalf)";
	if(mysql_query($query)){
		echo"<center><h1>Request has been submitted</h1></center>";
	}
}
?>	
</fieldset>
</form>
</body>
</html>	
	