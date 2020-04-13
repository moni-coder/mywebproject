<?php

   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'web project');
   
   $name=$_POST['uname'];
   $password=$_POST['pass'];
   
   $s= "select * from registration where UserName = '$name' && Password ='$password'";
   
   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
   
   if($num==1){ 
                echo"

				<script>

				alert('You are Successfully  Logged in');

				window.location.href='train.php';

				</script>

				"; 
   }
   
   else{
	   echo"

				<script>

				alert('Password Wrong');


				</script>

				";
   }
	   
?>
