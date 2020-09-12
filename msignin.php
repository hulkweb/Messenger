<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="msignin.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	h1{
text-transform: uppercase;

  	}
  	.form-header p{
  		font-size: 40px;
  	}
  	.signin-form{
  	border:1px solid blue;
  	border-radius: 2px;
  		height: 500px;
  		background-color: LightGrey;
      
  		padding-right: 10px;
  		padding-right: 10px;
  		font-family: sans-serif;

  	}
  	input{
  		color: white;
  		width: 200px;

  	}
  	.l{
  		background-image: url('bg-01');
  		background-repeat: no-repeat;
  		background-size: cover;
  		height: 800px;
  	}
  	.btn{
  		width: 300px;
  		margin-left: 40px;

  	}
  </style>
	<title></title>
</head>
<body>
	<div class="container-fluid p-2 l ">
		<br>
		  <div class="signin-form container p-0" style="width: 400px">
		  	<form action="login.php" method="post">
		  		<div class="form-haeder text-center p-3 m-0 rounded bg-primary w-100">
		  			<h1>sign in</h1>
		  		
		  			
		  		</div>
		  		<div class="form-group p-3">
		  			<label>Email</label>
		  			<input type="text" name="email" placeholder="abc@xyz.com" required="" class="form-control rounded ">
		  		</div>
		  		<div class="form-group p-3" >
		  			<label>Password</label>
		  			<input type="password" name="password" placeholder="" required="" class="form-control rounded">
		  		</div>
		  		<div class="form-group pl-4">
		  			<input type="submit" name="submit" value="Login" class="btn text-center btn-primary">
		  		</div>
                

		  	</form>
		  	<div  style="width: 400px" ><p class="text-center h4 pt-2"> Don't have an acccount? <a href="signup.php"> create here</a></p></div>
         <a href="welcome.php" class="text-center text-light rounded-pill h4 m-4 bg-primary p-3">HOME</a>
		  </div>
		       
      
	</div>

</body>
</html>