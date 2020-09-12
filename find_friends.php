<?php
 session_start();

$con=mysqli_connect('localhost','root','','rahul');
include 'find_friends-function.php';
   ?>


<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="find-friends.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title></head>
	<body>
   <?php include 'settingheader.php';  ?> <br>
          <div class="row bg-dark l">
             <div class="col-sm-4">
               
             </div>
             <div class="col-sm-4 pt-3">
                <form class="search-box" action="">
                  <div class="row">
                 <div class="col-sm-9"><input type="text" name="search_query" placeholder="find friends" autocomplete="off" required="" class="rounded form-control "> 
                 </div>
                 <div class="col-sm-3">
                  <button type="submit" name="search_btn" class="btn btn-primary">
                    search
                  </button>
                </div>
                </div>
                  
                </form>
               
             </div>
            <div class="col-sm-4">
              
            </div>
          </div><br><br>
          <?php  
          search_user();


           

           ?>
  </body>