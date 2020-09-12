<?php
 session_start();
include 'connect.php';

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
    <?php global $con; 
    $user=$_SESSION['email'];
                $get_user="select *from rahul where email='$user'";
                $run_user=mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);
                $user_id=$row['id'];
                $user_name=$row['name'];
                $user_profile=$row['profile'];
                $user_country=$row['country'];
                 $user_email=$row['email'];?>

    
    <div class="col-sm-6" style="margin-left: 50px">
          <form method="post" action="" enctype="multiform/data">
            <table class="table table-bordered table-hover" >
              <tr align="center">

                <td colspan="6" class="active">Change account Setting</td>
                
              </tr>
              <tr><td style="font-weight: bold;">Change Your username</td>
                <td>
                  <input type="text" name="u_name" class="form-control" required="" value="<?php echo $user_name;?>">
                </td>
              </tr>
              <tr><td><td><a href="upload.php" class="btn btn-default" style="font-size: 15px;text-decoration: none;color: blue;"><i class="fa fa-user"></i>Change profile </a></td></td></tr>
               <tr><td style="font-weight: bold;">Change Your Email</td>
                <td>
                  <input type="text" name="u_email" class="form-control" required="" value="<?php echo $user_email;?>">
                </td>
              </tr>
              <tr><td>Country</td>
                <td>
                  <select class="form-control" name="u_country">
                    <option>malesia</option>
                    <option>russia</option>
                  </select>
                  
                </td>
              </tr>
               <tr><td>gender</td>
                <td>
                  <select class="form-control" name="u_gender">
                    <option>male</option>
                    <option>female</option>
                    <option>others</option>
                  </select>
                  
                </td>
              </tr>
              <tr>
                <td style="font-weight: bold;">forgotten password</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">forget password</button>
                 <div id="mymodal" class="modal-fade" role="dialog">
                    <div class="modal-dialog">
                       <div class="modal-content">
                         <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                           
                         </div>
                         <div class="modal-body">
                          <form action="recovery.php?id=<?php $user_id; ?>" method="post">
                            <strong>what is your best friend name?</strong>
                            <textarea class="form-control" cols="83" rows="4" name="content" placeholder="someone">
                              
                            </textarea><br>
                            <input type="submit" class="btn btn-default" name="submit" value="submit" style="width: 100px"><br><br>
                            <pre>answer the question if you have forgot your password</pre>

                          </form><?php
                              if (isset($_POST['submit'])) {
                              $BFN=$_POST['content'];
                             
                               
                               if ($BFN="") {
                                echo "<script>alert('please enter something')</script>";
                                 echo "<script>window.open('settingac.php')</script>";
                                 exit();
                               }
                               else{
                                  $update= "update rahul set forgotten='$BFN' where email='$user_email";
                               $row=mysqli_query($con,$update);
                               if ($row) {
                                 echo "<script>alert('working...')</script>";
                                 echo "<script>window.open('settingac.php')</script>";
                               }
                               }
                             }
                           ?>
                           
                         </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-default" dataa-dismiss="modal">Close</button>
                           
                         </div>
                       </div>
                      
                    </div>
                   
                 </div>

                </td></tr>

                <tr><td></td>
                  <td><a href="Change-password.php" class=" btn btn-default" style="text-decoration: none;font-size: 15px;color: blue;"><i class="fa fa-key fa-w "></i>change password</a></td></tr>
              </tr>
              <tr align="center"><td colspan="6"><button type="submit" name="update" class="btn btn-primary btn-md h4">update</button></td></tr>
              
            </table>
            
          </form>
             <?php 
             if (isset($_POST['update'])) {
                 $user_name=htmlentities($_POST['u_name']);
                  $user_email=htmlentities($_POST['u_email']);
                   $u_gender=htmlentities($_POST['u_gender']);
                    $u_country=htmlentities($_POST['u_country']);
              $update="update rahul set name='$user_name',email='$user_email',gender='$u_gender',country='$u_country'";
              $run=mysqli_query($con,$update);
              if ($run) {
                 echo "<script>alert('updated succesfully')</script>";
                                 echo "<script>window.open('.php')</script>";
               
              }

             }


              ?>
    </div>



  </body>
  </html>