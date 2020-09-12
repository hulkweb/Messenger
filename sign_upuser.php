<?php
$con=mysqli_connect('localhost','root','') or die('connection was not established');
mysqli_select_db($con,'rahul');

if (isset($_POST['signup'])) {
$user=$_POST['rahul'];	
$email=$_POST['email'];
$pass=$_POST['password'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$rand=rand(1,2);


if ($rand==1) {
		$profile="img/rahul.jpg";

	}
	elseif ($rand==2) {
		$profile="img/nicky3.jpg";}
$insert="INSERT INTO rahul(name,email,password,gender,country,profile) VALUES ('$user','$email','$pass','$gender','$country','$profile')";
$query=mysqli_query($con,$insert);
if ($query) {
	header('location:msignin.php');
}
else{echo "<script>alert('registration failed,try again!')</script>";echo "<script> window.open('signup.php',_self);</script>";}
	

}
if ($user="") {	echo "<script>alert('we can not verify your name')</script>";
}
if (strlen($pass)<8) {
	echo "<script>alert('password should be minimum 8 character!')</script>";
	exit();
}
//$check_email="select * from users where email='$email'";
//$eun_email=mysqli_query($con,$check_email);
//$check=mysqli_num_rows($eun_email);
//if ($check==1) {
//	echo "<script>alert('Email already exist, please try again later')</script>";
//echo "<script> window.open('signup.php',_self);</script>";
//	exit();
//}


  ?>