<?php
 
 include("main connect.php");
  
if($_GET['submit'])
	{
   $name=$_GET['name'];
   $from=$_GET['from'];
   $start=$_GET['start'];
   $fare=$_GET['fare'];
   $off=$_GET['off'];
   
if($name!="" && $from!="" && $start!="" && $fare!="" && $off!=""){
$reg="INSERT INTO MMMM VALUES ('$name','$from','$start','$fare','$off')";
$data=mysqli_query($conn,$reg);
 
 if($data)
  {
	 echo "Data Inserted into Database";
  }
}  
}
?>
<?php
include("main connect.php");
 if($_GET['update']){
   $name=$_GET['name'];
   $from=$_GET['from'];
   $start=$_GET['start'];
   $fare=$_GET['fare'];
   $off=$_GET['off'];
   $query = "UPDATE MMMM SET TTTTTT='$name',mmm='$from',ggg='$start',jjj='$fare',njj='$off'";
   $data=mysqli_query($conn,$query);
   if($data)
  {
	 echo "Data Inserted into Database.<a href='display.php'>Check Updated List Here</a>";
  }
	} 
 ?>