.<?php
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
	<style type="text/css">*{
        box-sizing: border-box;
    }</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="img/home.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.file{
  		display: none;
          
  	}
  	li{
  		list-style-type: none;

  	}
  	img{
  		margin-bottom: 10px;
  	}
.right-header-contentchat{
	height: auto;
	min-height: 500px;
	background: white;
	padding: 5px;
  overflow-y: scroll;
}
.right-header-contentchat p{
font-size: 25;
font-family: sans-serif;
}
  </style>
	<title></title>
	<body>
     <div class="main-section" >
     	 <div class="row" >
     	 	 <div class="col-sm-3 col-md-3 col-xs-12 left-sidebar">
     	 	 	<div class="input-group-btn">
     	 	 		<center>
     	 	 			<a href="find_friends.php">
     	 	 				<button class="btn btn-default search-icon flot-right" name="search_user" type="submit">add new user
     	 	 			       <i class="fa fa-search"></i>
     	 	 		         </button>
     	 	 		    </a>
     	 	 		</center>
     	 	 	</div>
     	 	 	<div class="left-chat  bg-dark">
     	 	 		<ul>
     	 	 			<?php include 'img/get_users_data.php';  ?>
     	 	 		</ul>
     	 	 	</div></div>
     	 	 <div class="col-sm-9 col-md-9 col-xs-12 right-sidebar m-0">
              <div class="row m-0">
              	<!--getting the user informtion who is logged in-->
              	<?php
              	          $pass=$_SESSION['email'];
                $get="select *from rahul where email='$pass'";

                $run=mysqli_query($con,$get) or die(mysqli_error($con)) ;  
                $row=mysqli_fetch_array($run);
           
                $user_id=$row['id'];
                $user_name=$row['name']; 
                $user_profile=$row['profile'];

               ?>
              	<!--getting the user informtion on which user click-->
                <?php  
                if (isset($_GET['name'])) {
                   global $con;
               
                  $get_username=$_GET['name'];
                  $get_user="select * from rahul where name='$get_username'";
                  $run_user=mysqli_query($con,$get_user);
                  $row_user=mysqli_fetch_array($run_user);
                  
                  $username=$row_user['name'];
                  $profile=$row_user['profile'];}  
                 
                    $total_msgs="SELECT * from chat where (sender_username='$user_name'AND reciever_username='$username') OR (sender_username='$username' AND reciever_username='$user_name')";
                   $run_msgs=mysqli_query($con,$total_msgs);
                    $total=mysqli_num_rows($run_msgs);


                    ?>
                    <div class="col-md-12 right-header">
                    	<div class="right-header-img">
                    		<img src="<?php echo $profile; ?>" alt="user_img">
                    	</div>
                    	<div class="right-header-details">
                    		<form method="post">
                    			<?php echo "<p class='h4'>$username</p>"; ?>
                    			<span><?php echo $total."messeges" ; ?></span>&nbsp
                                <div class="right-header-img" style="float: right;padding: -5px">
                            <img src="<?php echo $user_profile; ?>" alt="user_img">
                        </div><p style="float: right;font-size: 25px;padding: 15px;"><?php echo $user_name;  ?></p>
                    			<button name="logout" class="btn btn-danger " style="float: right;">logout</button>
                    		</form>
                    		<?php
                    		     if (isset($_POST['logout'])) {
                    	         $update_msg=mysqli_query($con,"UPDATE rahul SET log_in ='offline' where name='$user_name'");
                    	         echo "<script>window.open('logout.php','_self');</script>";
                    	         exit();
                    		}  ?>
                    	</div>
                    </div>

              </div>

     	 	 	<div class="row">
     	 	 		<div class="col-md-12 right-header-contentchat" style="height: 500px;background: white;" id="scrolling-to-button">
     	 	 			<?php

                         $update="UPDATE chat SET msg_status='read' WHERE sender_username='$username'AND reciever_username='$user_name'" ;
                         $update_msg=mysqli_query($con,$update);
     	 	 			$sel_msg="SELECT * from chat where (sender_username='$user_name'AND reciever_username='$username') OR (sender_username='$username' AND reciever_username='$user_name') ORDER by 1 ASC";
     	 	 			$run_msg=mysqli_query($con,$sel_msg);
     	 	 			while($row=mysqli_fetch_array($run_msg)){
     	 	 				$sender = $row['sender_username'];
     	 	 				$reciever = $row['reciever_username'];
     	 	 				$msg_content=$row['msg_content'];
     	 	 				 $msg_date=$row['msg_date'];
     	 	 				 $image=$row['profile'];
     	 	 			  ?>
     	 	 			  <ul>
     	 	 			  	<?php if ($user_name == $sender AND $username==$reciever) {
     	 	 			  	
     	 	 			  	echo "<li><div class='rightside-right-chat pr-3 mb-2 rounded'>
     	 	 			  	          <span> $username <small>$msg_date</small></span><br>
     	 	 			  	          <p class='h5'>$msg_content</p>";
     	 	 			  	          if (!$profile="") {
	echo "<img src='img/$image' height='100px' width='100px' ><div>";
}
     	 	 			  	          
                                     
     	 	 			  	  echo"   </li>
     	 	 			  	      <li></li>
                                  ";	
     	 	 			  	} 
                             else if ($user_name == $reciever AND $username==$sender) {
                            
                              echo "<li><div class='rightside-left-chat pr-3 mb-2 rounded'>
     	 	 			  	          <span> $username <small>$msg_date</small></span><br>
     	 	 			  	          <p class='h5'>$msg_content</p>";
if (!$profile="") {
	echo "<img src='img/$image' height='100px' width='100px' ><div>";
}
     	 	 			  	          
                                     
     	 	 			  	  echo"   </li>
     	 	 			  	      <li></li>
                                  ";	
                            }  ?>

     	 	 			  </ul>
                        <?php }  ?>
     	 	 			
     	 	 		</div>

     	 	 		
     	 	 	</div>
     	 	 	<div class="row">
     	 	
                    
                            <div class="col-sm-12 right-chat-textbox bg-dark">
             <div class="container-fluid  m-0 pt-3  w-100">
                 <form  method="post" enctype="multipart/form-data">
                    <div class="row p-2">
                        <div class="form-group col-10">
                        	<input type="file" name="imgs" class="file" >
                            <input type="text" name="msg_content" placeholder="type your msg here......." class="form-control rounded border-primary">
                        </div>
                        <div class="form-group col-2 ">
                            <input type="submit" name="submit" value="send" class="btn btn-primary">
                        </div>
                        
                 </form>
                
            </div>
     	 	 		</div>
     	 	 	</div>
     	 	 </div>
     	 </div>
     </div>
     <?php 
     $con;
     if (isset($_POST['submit'])) {
     	$msg=$_POST['msg_content'];
     	  $image=$_FILES['imgs']['name'];
         $file=$_FILES['imgs']['tmp_name'];
        move_uploaded_file($file,'img/'.$image);
     	if ($msg==""||$image=="") {
     	echo "<div><script>alert('unable to send msg!')";
     }elseif (strlen($msg)>100) {
     echo "<div><center>message is too long,use only 100 words</center></div>";
     	}
         else{
         	$insert="INSERT INTO chat (sender_username,reciever_username,msg_content,msg_status,msg_date,profile) values ('$user_name','$username','$msg','unread',NOW(),'$image')";
           $run_insert=mysqli_query($con,$insert);
         }
     }
      ?>
</body>
</html>