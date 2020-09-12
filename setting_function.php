<?php
 session_start();

$con=mysqli_connect('localhost','root','','rahul');
include 'settingheader.php';
   ?>


<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/findajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title></head>
  <body>
    <div class="row">
      <div class="col-sm-2">
        
      </div>
    <?php  $user=$_SESSION['email'];
                $get_user="select *from rahul where email='$user'";
                $run_user=mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);
                $user_gender=$row['id'];
                $user_name=$row['name'];
                $user_profile=$row['id'];
                $user_country=$row['name'];?>

    </div>
    <div class="col-sm-8">
            </td>
          </tr>

                



        </table>
      </form>
      
    </div>



  </body>
  </html>