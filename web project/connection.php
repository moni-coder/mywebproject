<?php

   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'web project');
   
   $name=$_POST['username'];
   $age=$_POST['age'];
   $email=$_POST['email'];
   $password=$_POST['pass'];
   $phone=$_POST['phone_no'];
   
   $s= "select * from registration where UserName = '$name'";
   
   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result); 
   
   if($num ==1){ 
	   echo "username allready Taken";
   }
   
   else{  
	  $reg="insert into registration (UserName,Age,Email,Password,Phone) 
	  values('$name','$age','$email','$password','$phone')";
	  mysqli_query($con,$reg);
	  echo "registration successful";
   }
?>

