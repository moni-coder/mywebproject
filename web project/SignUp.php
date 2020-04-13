

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equive="X-UA-Compatible" content="IE=edge">
<title>Signup form</title>
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
	
         <section class="section-a">
          <h1 id="title"> User Registration </h1>
  
<form action="connection.php" method="post">
<label for="user">User Name</label>
<input type="text" name="username" id="user" required>
<label for="user">Age</label>
<input type="text" name="age" id="user" required>
<label for="email">Email</label>
<input type="email" name="email" id="email" required>
<label for="pass">password</label>
<input type="password" name="pass" id="pass" required>
<label for="phone">Phone No</label>
<input type="text" name="phone_no" id="phone" required>
<input type="submit" value="Registration">
<p>If you are register member please<a href="Login.php">Log In Here</a><p>
</form>
</section>


</body>
</html>

