<?php
session_start();
$con=mysqli_connect('localhost','root','');
if ($con) {
echo "connected"."<hr>";
}

mysqli_select_db($con,'rahul');
if (isset($_POST['submit'])) {
	# code...

$email = $_POST['email'];
$pass = $_POST['password'];



$q="SELECT * FROM rahul WHERE email='$email' AND password='$pass' ";
$result =mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);


if ($num>=1) {
	
$_SESSION['email']=$email;
$_SESSION['pass']=$pass;

$update_msg=mysqli_query($con,"UPDATE rahul SET log_in='online' WHERE email='$email'");
$user=$_SESSION['EMAIL'];
$get_user="select *from rahul where email='$email'";
$run_user=mysqli_query($con,$get_user);
$row=mysqli_fetch_assoc($run_user);
$user_name=$row['name'];
header('location:home.php?name=$user_name');
}
else echo "<h1>wrong paaaword<h2>";;
}
	
  ?>