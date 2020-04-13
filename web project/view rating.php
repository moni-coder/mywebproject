<!DOCTYPE html>
<html>
<head>

<title>add rating</title>
<link rel="stylesheet" href=" view rating.css">
</head>
<body>

   <nav class="navbar">
  <div class="container">
        <ul class="nav">
         <li ><a href="add post.php">Add Post</a></li>
        <li ><a href="add transport details.php">Add Transport</a></li>
        <li><a href=" view rating.php">View Rating</a></li>
<li> <a href="cover.html"><button>Logout</button> </a></li>
       </ul>
	   <h2> Bd Transport Rating</h2>
      </div>
    </nav>
	


	<section class="section-a">
	<h1 id="title">Transport Ratings Details</h1>
     <form id="survey-form" name="nav">
	    <main class="row-tab">
        <section class="label-select">
         <label>Transport Type</label>
        </section>
          <section class="select-input">
		  
	   <select name="SelectURL" onchange="window.open(document.nav.SelectURL.options[document.nav.SelectURL.selectedIndex].value)">
	   <option selected>--Select</option>
       <option value="view all train rating.php">Train</option>
       <option value="view all bus rating.php ">Bus</option>
       <select>
	   
         </section>
       </main>
	 </form>
	</section>
	
	</body>
	</html>
	
	