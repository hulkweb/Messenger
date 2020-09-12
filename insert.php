

<div class="container border-primary" style="border: 2px solid blue;padding: 10px;">
	<div class="h2 bg-success text-white text-center p-2">Quiz</div>



<form action="" method="post">
	<div class="form-group "> 
		<label>Enter  Q.1 here..</label> 
		<input type="text" name="q1" required="" class="form-control">
<div class="p-2 w-50 h5 d-flex flex-column">
		option1<input type="text" name="1op1"><br>
		option2<input type="text" name="1op2"><br>
		option3<input type="text" name="1op3"><br>
		option4<input type="text" name="1op4"><br>
		Answer<input type="text" name="1ans"><br>

</div>
	</div>
	
<div class="form-group "> 
		<label>Enter  Q.2 here..</label> 
		<input type="text" name="q2" required="" class="form-control">
<div class="p-2 w-50 h5 d-flex flex-column">
		option1<input type="text" name="2op1"><br>
		option2<input type="text" name="2op2"><br>
		option3<input type="text" name="2op3"><br>
		option4<input type="text" name="2op4"><br>
		Answer<input type="text" name="2ans"><br>

</div>
	</div>
	<div class="form-group "> 
		<label>Enter  Q.3 here..</label> 
		<input type="text" name="q3" required="" class="form-control">
<div class="p-2 w-50 h5 d-flex flex-column">
		option1<input type="text" name="3op1"><br>
		option2<input type="text" name="3op2"><br>
		option3<input type="text" name="3op3"><br>
		option4<input type="text" name="3op4"><br>
		Answer<input type="text" name="3ans"><br>

</div>
	</div>
	<div class="w-50 p-3">
		Subject<input type="text" name="subject" class="form-control w-50">
	</div>
	

	<button class="btn btn-primary m-auto d-block" name="insert"> insert</button>
</form>
</div>
<?php 
if (isset($_POST['insert'])) {
	$con=mysqli_connect('localhost','root','','eio') or die('disconected') ;

	$q=array($_POST['q1'],$_POST['q2'],$_POST['q3']);
	print_r($q);
	$o1=array($_POST['1op1'],$_POST['2op1'],$_POST['3op1']);
	$o2=array($_POST['1op2'],$_POST['2op2'],$_POST['3op2']);
	$o3=array($_POST['1op3'],$_POST['2op3'],$_POST['3op3']);
	$o4=array($_POST['1op4'],$_POST['2op4'],$_POST['3op4']);
$qa=array($_POST['1ans'],$_POST['2ans'],$_POST['3ans']);
   for ($i=0; $i <4 ; $i++) { 
   	# code...
   
        $insert='INSERT INTO answers (question,answer,op1,op2,op3,op4) VALUES ("$q[$i]","$qa[$i]","$o1[$i]","$o2[$i]","$o3[$i]","$o4[$i]") ';
	   $run=mysqli_query($con,$insert) or die($con);


       if ($run) {
      echo "readdi";
       }


}
}