<?php

session_start();

   $con = mysqli_connect('localhost','root','');

   mysqli_select_db($con,'web project');
   
   $title=$_POST['title'];
   $type=$_POST['type'];
   
   
   $s= "select * from  post where Title = '$title'";
   
   $result = mysqli_query($con,$s);
   $num=mysqli_num_rows($result);  
   
   if($num >0){    
	   
	  $reg="insert into post (Title,Type) 
	  values('$title','$type')";
	  mysqli_query($con,$reg);
	  echo "registration successful";
	  echo "<a href='bus.php'>View Result</a>";
	  
   }
?>

