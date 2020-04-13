<!DOCTYPE html>
<html>
<head>

<title>add transport</title>
<link rel="stylesheet" href=" add transport details.css">
</head>
<body>

   <nav class="navbar">
  <div class="container">
        <ul class="nav">
<li ><a href="add post.php">Add Post </a></li>
<li ><a href="add transport details.php">Add Transport </a></li>
<li ><a href="view rating.php">View Rating</a></li>
<li> <a href="cover.php"><button>Logout</button> </a></li>
       </ul>
	   <h2> Bd Transport Rating</h2>
      </div>
    </nav>
	
	
	
	<section class="section-a">
	<h1 id="title">Add New Transport</h1>
  <form id="survey-form" method="POST" action="add post connection.php">
     <main class="row-tab">
       <section class="name">
         <label>Title</label>
       </section>
       <section class="input">
         <input type="text" placeholder="" name="title">
         </section>
    </main>
    
    <main class="row-tab">
       <section class="name">
         <label>Type</label>
       </section>
       <section class="input">
         <input type="text"placeholder="" name="type">
         </section>
    </main>
	
	
     <main class="row-tab">
     <section class="name">
      <label> Select image to upload:<label>
	   </section>
       <section class="input">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</section>
    </main>
	
	<div class="row-tab">
  <button class="xy" >Submit</button>
</div>
	</form>
	</section>
	
	</body>
	</html>
	
	