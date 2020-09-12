<?php 
$con=mysqli_connect('localhost','root','','rahul');

function search_user()
{
	global $con;
	if (isset($_GET['search_btn'])) {
	$search_query = htmlentities($_GET['search_query']);
	$get_user = "select * from rahul where name like '%$search_query%' or country like '%$search_query%'";
	}
	else{
		$get_user="SELECT * from rahul order by country ,name DESC LIMIT 5";
	}
	$run_user = mysqli_query($con,$get_user);
	while ($row=mysqli_fetch_array($run_user)) {
           

        $user_name=$row['name'];
        $user_profile=$row['profile'] ;
                $user_country=$row['country'];
        $user_gender=$row['gender'] ;

echo "
<div class='card' style='width:300px;margin:auto;padding-left:10px;text-align:center;color:blue;background-color:LightGrey' >
   <img hieght='100px' width='100px' src='$user_profile'>
   <h1>$user_name</h1>
   <p class='h5'>$user_country</p>
   <p class='h5'>$user_gender</p>
  <form method='post'>
     <button name='add'>chat with $user_name</button>

  </form>
</div>

<br>
<br>


";
if (isset($_POST['add'])) {
echo "<script>window.open('home.php?name=$user_name','_self')</script>";

}
		
	}
}
 ?>