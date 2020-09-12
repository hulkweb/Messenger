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
  <link rel="stylesheet" type="text/css" href="img/home.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
   </head>
	<body>
    <?php
         $user=$_SESSION['email'];
     $upload="select * from rahul where email='$user'";
     $query=mysqli_query($con,$upload);
     $row=mysqli_fetch_array($query);
     $pass=$row['password'];
    

      
  ?>
 <div class="row">
  <div class="col-sm-3">
    <a href="setttingac.php" class="btn btn-primary floar-left"> back</a>
    
  </div>
   <div class="col-sm-6">
    <form method="post">
      <table class="table table-hover table-bordered">
          <tr align="center"><td colspan="6" class="active"><h3>Change Password</h3></td>
          </tr>
          <tr><td style="font-weight: bold;">Old Password</td><td><input type="Password" name="old_pass" placeholder="old Password" class="form-control"></td>
          </tr>
           
          </tr>
          <tr><td style="font-weight: bold;">New password</td><td><input type="Password" name="new_pass" placeholder="new password" class="form-control" required=""></td>
          </tr>
          
          </tr>
          <tr><td style="font-weight: bold;">confirm  Password</td><td><input type="Password" name="con_pass" placeholder="confirm Password" class="form-control" required=""></td>
          </tr>

          </tr>
          <tr align="center"><td colspan="6" class="active"><input type="submit" name="change" class="btn btn-primary" value="Change Password" required=""></td>
          </tr>
      </table>
    </form>
            <?php  
           if (isset($_POST['change'])) {
             $old_pass=$_POST['old_pass'];
             $new_pass=$_POST['new_pass'];
             $con_pass=$_POST['con_pass'];
             //if (strlen($new_pass)<8||strlen($con_pass)<8) {}
             if ($pass!=$old_pass) {
               echo "<script>alert('enter correct password!')</script>";
               echo "<script>window.open('change-password.php')</script>";
             }
             else{
              if ($new_pass!=$con_pass) {
                echo "<script>alert('password does not match!')</script>";
               echo "<script>window.open('change-password.php')</script>";
              }
              else{
                $con;
                $change="update rahul set password='$new_pass' where email='$user'";
                $run=mysqli_query($con,$change);
                if ($run) {
                   echo "<script>alert('password succesfily changed!')</script>";
                   echo "<script>window.open('change-password.php')</script>";
                  
                }
                else{
                   echo "<script>alert('Failed!')</script>";
               echo "<script>window.open('change-password.php')</script>";
                }

                
                }

              }

             }
           




            ?>
    
  </div>
   <div class="col-sm-3">
    
  </div>
   
 </div>
    
  </body>
  </html>