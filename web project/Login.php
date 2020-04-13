<!DOCTYPE html>
<html>
<head>

<title>signup form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

   <nav class="navbar">
  <div class="container">
        <ul class="nav">
          <li ><a href="cover.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="SignUp.php">Register</a></li>
<li><a href="Login.php">Login</a></li>
<li><a href="contact.php">ContactInfo</a></li>
<li><a href="feedback.php">FeedBack</a></li>
       </ul>
	   <h2> Bd Transport Rating</h2>
      </div>
    </nav>
	
	
	
	<script>
function validate() {
  var x = document.forms["myForm"]["uname"].value;
  var y= document.forms["myForm"]["pass"].value;
  if (x == ""||y == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(x=="admin"&&y=="1234")
  {
 
    window.open('add transport details.php');
  }
  else{
     return true;
    }
}
</script>
         <section class="section-a">
          <h1 id="title"> LogIn </h1>
<form name="myForm" action="log connect.php" onsubmit="return validate()" method="post">
<label for="user">User Name</label>
<input type="name" name="uname" id="email" required>
<label for="pass">password</label>
<input type="password" name="pass" id="pass" required>
<input type="submit" value="Log In">
<p>If you are not register member please<a href="SignUp.php">Register Here</a></p>
</form>
</section>

</body>
</html>