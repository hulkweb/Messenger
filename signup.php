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
    .form-header{
      width: 450px;
    }
  	.form-header p{
  		font-size: 40px;
  	}
  	.signin-form{
  	border:1px solid blue;
  	border-radius: 2px;
  		height: 800px;
  		background-color: white;background-color: LightGrey;
      width: 450px;
      font-family: sans-serif
      background-color: LightGrey;
     
      
      
  	}
  	input{
  		color: white;
  		width: 200px;

  	}
  	.l{
  		background-image: url('bg-01');
  		background-repeat: no-repeat;
  		background-size: cover;
  		height: 900px;
      
      
  	}
  	.btn{
  		width: 300px;
  		margin-left: 40px;
  		
  	}
  </style>
	<title></title>
</head>
<body>
	<div class="container-fluid  l ">
		<br>
		  <div class="signin-form container ">
		  	<form action="sign_upuser.php" method="post">
		  		<div class="form-haeder text-center p-3 rounded btn-primary">
		  			<h1>sign up</h1>
		  			<p class="h4">fill out this form and start chating with your friends</p>
		  			
		  		</div>
           
            <div class="form-group p-1" >
            <label>Email</label>
            <input type="email" name="email" placeholder="xyz@abc.com" required="" class="form-control rounded">
          </div>
           <div class="form-group p-1" >
            <label>Password</label>
            <input type="password" name="password" placeholder="" required="" class="form-control rounded" autocomplete="off">
          </div>
           <div class="form-group p-1" >
            <label>Username</label>
            <input type="text" name="rahul" class="form-control">
           
          </div>
		  		<div class="form-group p-1" >
            <label>country</label>
             <select name="country" class="form-control">
                 <option disabled="">country</option>
                 <option>Japan</option>
                 <option>China</option>
                  <option>USA</option>
                 <option>India</option>
              </select>
          </div>
            <div class="form-group p-1" >
            <label>Gender</label>
             <select name="gender" class="form-control">
                 <option >female</option>
                 <option>male</option>
                 
              </select>
          </div>
          <div >
            <p class="text-center h4 " ><input type="checkbox"   required="" style=" width: 30px">Accept our <a href="privacy.php">Terms & Services</a> </p>
          </div>

          
		  		<div class="form-group pl-4">
		  			<input type="submit" name="signup" value="Signup" class="btn text-center btn-primary">
		  		</div> 
       

		  	</form>

		  	<div  style="width: 400px" ><p class="text-center h5s pt-2"> Already sign up? <a href="login.php"> Login here</a></p></div>
		  </div>
      <a href="welcome.php" class="text-center text-info h4">HOME</a>
		  
	</div>

</body>
</html>
