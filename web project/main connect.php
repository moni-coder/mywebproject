<?php
$conn = mysqli_connect('localhost','root','');

 mysqli_select_db($conn,'web project');

if($conn)
{
	echo "connection ok";
}
else
	
	{
		
	die("connection failed beceause ".mysqli_Connect_error());
	}
?>