 <nav class="navbar  bg-dark "href="#">
    <a href="home.php?name=$user_name"; style="text-decoration: none;font-size: 40px;float: left;">MyChat</a>
    <?php  
  
    $con=mysqli_connect('localhost','root','','rahul');
    $user=$_SESSION['email'];
    $q="select * from rahul where email='$user' ";
    $g=mysqli_query($con,$q);
    $r=mysqli_fetch_array($g);
    $user_name=$r['name'];

     ?>
     <ul class="navbar-nav">
      <li><a href="setttingac.php" style="color: white;text-decoration: none;font-size: 20px;float: left;padding: 5px;">setting</a></li>
       
     </ul>
   </nav> <br>