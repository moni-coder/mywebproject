<?php
   $con = mysqli_connect('localhost','root','');

   mysqli_select_db($con,'web project');
   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $sub=$_POST['sub'];
   $message=$_POST['message'];
   
   $s= "select * from feed where name = '$name'";
   
   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result); 
   
   if($num ==1){ 
	   echo "username allready Taken";
   }
   
   else{	   
	  $reg="insert into feed (name,email,PhoneNo,subject,message) 
	  values('$name','$email','$phone','$sub','$message')";
	  mysqli_query($con,$reg);
	  echo "successful";
   }
?>

