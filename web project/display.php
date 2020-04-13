<style>
td{
	padding:10px;
}
</style>
<?php
include("main connect.php");
    $query="SELECT * FROM MMMM ";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total !=0){
		?>
		<table border="2">
		<tr>
        <th> Transport Name</th>
		<th>From-To</th>
		<th> Start Time</th>
		<th>Fare</th>
		<th> OFF Day</th>
		</tr>
	<?php	  
	while($result=mysqli_fetch_assoc($data))
	{
		echo" <tr>
        <td>".$result['tttttt']."</td>
		<td>".$result['mmm']."</td>
		<td> ".$result['ggg']."</td>
		<td>".$result['jjj']."</td>
		<td> ".$result['njj']."</td>
		<td><a href='add transport details.php?name=$result[tttttt]&from=$result[mmm]&start=$result[ggg]&fare=$result[jjj]&off=$result[njj]'>Edit</a></td>
		<td><a href='delete.php'>Delete</a></td>
		</tr>";
		}
	}	
?>