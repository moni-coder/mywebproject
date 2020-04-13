<?php

include("main connect.php");
error_reporting(0);
    $_GET['name'];
    $_GET['from'];
   $_GET['start'];
   $_GET['fare'];
   $_GET['off'];
?>

<!DOCTYPE html>
<html>
<head>

<title>add transport</title>
<link rel="stylesheet" href="add transport details.css">
</head>
<body>

  <nav class="navbar">
  <div class="container">
        <ul class="nav">
<li ><a href="add post.php">Add Post</a></li>
<li ><a href="add transport details.php">Add Transport</a></li>
<li ><a href="View rating.php">View Rating</a></li>
<li> <a href="cover.php"><button>Logout</button> </a></li>
       </ul>
	   <h2> Bd Transport Rating</h2>
      </div>
    </nav>
	
	<section class="section-a">
	<h1 id="title">Add Transport Details</h1>
	
    <form id="survey-form"  method="GET" action="add transport details connect.php">
     <main class="row-tab">
       <section class="name">
         <label>Transport Name:</label>
       </section>
       <section class="input">
         <input type="text" placeholder="" name="name" value="<?php echo $_GET['name'];?>">
         </section>
    </main>
    
    <main class="row-tab">
       <section class="name">
         <label>From-To:</label>
       </section>
       <section class="input">
         <input type="text"placeholder="" name="from" value="<?php echo $_GET['from'];?>" >
         </section>
    </main>
    
    <main class="row-tab">
       <section class="name">
         <label>Start Time:</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="start" value="<?php echo $_GET['start'];?>" >
         </section>
    </main>
	
	 
    <main class="row-tab">
       <section class="name">
         <label>Fare(TK):</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="fare" value="<?php echo $_GET['fare'];?>" >
         </section>
    </main>
	
	 
    <main class="row-tab">
       <section class="name">
         <label>Off Day:</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="off" value="<?php echo $_GET['off'];?>">
         </section>
    </main>
	
	<div class="xy">
  <input type="submit" name="submit" value="Submit">
  <input type="submit" name="update" value="Update">
  <input type="submit" name="delete" value="Delete">
  <input type="submit" name="search" value="Find">
  
</div>
	</form>
	
	
	</body>
	</html>
	
	