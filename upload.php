<?php
 session_start();

$con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,"rahul");

if (!isset($_SESSION['email'])) {
    header('location:msignin.php');
    # code...
}      
   ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <style type="text/css">
     .card{
       
       max-width: 400px;
       margin: auto;
      
       color: blue;
       text-align: center;
      
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       font-family: arial;


     }
     input[type="file"]{
      display: none;

     }
     #button_profile{
     border: none;
     outline: 0;
     display: inline-block;
     padding: 9px;
     color: white;
     background-color: black;
     text-align: center;
     width: 100%;font-size: 18px;


     }
     .card p{
      color: grey;
      font-size: 27px;

     }
     #profile{
      position: relative;
      cursor: pointer;
      padding: 10px;
      border-radius: 4px;
      background: #000;
      width: 100%;
     }
    label{
      padding: 7px;
      display: table;
      color: #fff;
    }
     }
     .card img{
      width: 200px;
      height: 150px;

     }
   </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Change profile picture</title></head>
	<body>
    <?php 
     $user=$_SESSION['email'];
     $upload="select * from rahul where email='$user'";
     $query=mysqli_query($con,$upload);
     $row=mysqli_fetch_array($query);
     $user_name=$row['name'];
     $user_profile=$row['profile'];

      

?><a href="setttingac.php" class="btn btn-primary float-left">back</a>
     <div class='card'  >
   <img src='<?php echo $user_profile;?>'>
   
   <p class='h5'><?php echo $user_name;?></p>
   
 <form action="upload.php" method="POST" enctype="multipart/form-data">
   <input type="file" id="profile"  name="myfile">
   <button id="button_profile"  name="update">Update Profile</button>
 </form>

</div><br><br>";
<?php

 if (isset($_POST['update'])) {
  $u_image = $_FILES['myfile']['name'];
$image_temp = $_FILES['myfile']['tmp_name'];
$random_number = rand(1,100);
  if ($u_image=="") {
    # code...
    echo "<script>alert('please select a pic')</script>";
echo "<script>window.open('upload.php')</script>";

  }

 
 
 else{
  move_uploaded_file($image_temp,"img/$u_image.$random_number");
  $update="update rahul set profile='img/$u_image.$random_number' where name='$user_name'";
  $u=mysqli_query($con,$update);
  if ($u) {
   echo "<script>alert('your profile pic uploaded')</script>";
echo "<script>window.open('upload.php')</script>";
 
  }

 }
}
   
 ?>

    
  </body></html>