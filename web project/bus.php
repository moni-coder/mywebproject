
<!DOCTYPE html>
<html>

    <head>
	<link rel="stylesheet" type="text/css" href="bus.css">
	</head>
	
	<body>
	 <nav class="navbar">
  <div class="container">
        <ul class="nav">
          <li><a href="train.php">View Train Details</a></li>
		 <li><a href="bus.php">View Bus Details</a></li>
		 <li> <a href="cover.php"><button>Logout</button> </a></li>
       </ul>
	   <h2> Bd Transport Rating</h2>
      </div>
    </nav>
	
	
	
         <section class="section-a">
		  
	
	<main class="main">
	
	<!-- cards-->
	<section class="cards">
	<section class="image">
	   <img src="bus.jpg">
	</section>
	<section class="title">
	   <h1>Eagle Paribahan</h1>
	</section>
	<section class="des">
	    <h3>Type:Outside city Bus</h3>
		<a href="bus details/Eagle Paribahan.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	
	<!--cards-->
	<section class="cards">
	<section class="image">
	   <img src="bus.jpg">
	</section>
	<section class="title">
	   <h1>Green Line Paribahan</h1>
	</section>
	<section class="des">
	   <h3>Type:Outside city Bus</h3>
	   <a href="bus details/Green Line Paribahan.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	
	<!--cards-->
	<section class="cards">
	<section class="image">
	   <img src="bus.jpg">
	</section>
	<section class="title">
	   <h1>Agomony Paribahan</h1>
	</section>
	<section class="des">
	  <h3>Type:Ouside city Bus</h3>
	  <a href="bus details/Agomony Paribahan.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	
	<!--cards-->
	<section class="cards">
	<section class="image">
	    <img src="bus.jpg">
	</section>
	<section class="title">
	    <h1>Kohinur Paribahan</h1>
	</section>
	<section class="des">
	   <h3>Type:Ouside city Bus</h3>
	   <a href="bus details/Kohinur Paribahan.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	<!-- cards-->
	<section class="cards">
	<section class="image">
	   <img src="bus.jpg">
	</section>
	<section class="title">
	   <h1>MR Enterprise</h1>
	</section>
	<section class="des">
	    <h3>Type:Ouside city Bus</h3>
	    <a href="bus details/MR Enterprise.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	
	
	<!--cards-->
	<section class="cards">
	<section class="image">
	   <img src="bus.jpg">
	</section>
	<section class="title">
	   <h1>Chondra Paribahan</h1>
	</section>
	<section class="des">
	  <h3>Type:Ouside city Bus</h3>
	  <a href="bus details/Chondra Paribahan.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	
	
	<!--cards-->
	<section class="cards">
	<section class="image">
	    <img src="bus.jpg">
	</section>
	<section class="title">
	    <h1>Alam Asia</h1>
	</section>
	<section class="des">
	   <h3>Type:Ouside city Bus</h3>
	   <a href="bus details/Alam Asia.php">
	    <button class="xy">Read More</button>
		</a>
	</section> 
	</section>
	</section>
	</main>
	</body>
	
	<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'web project');
  
  
   
   $s= "select * from  post ";
  $result = mysqli_query($con, $s);

   if (mysqli_num_rows($result) > 0) {
	   echo "<table border='2'><tr><th>Title</th><th>Type</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr> <td>".$row["Title"]."</td><td>".$row["Type"]."</td></tr>";
    }
	echo"</table";
   }
	
	
   else {
    echo "0 results";
        }
   ?>

</html>