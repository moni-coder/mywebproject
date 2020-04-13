<!DOCTYPE html>
<html>
<head>

<title>feedback</title>
<link rel="stylesheet" href="feedback.css">
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
	<h1 id="title">Send Us Message</h1>
  <form id="survey-form"  method="POST" action="feedback connect.php">
     <main class="row-tab">
       <section class="name">
         <label> Name:</label>
       </section>
       <section class="input">
         <input type="text" placeholder="" name="name" required>
         </section>
    </main>
    
    <main class="row-tab">
       <section class="name">
         <label>Email</label>
       </section>
       <section class="input">
         <input type="email"placeholder="" name="email" required>
         </section>
    </main>
    
    <main class="row-tab">
       <section class="name">
         <label>Phone No</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="phone" required>
         </section>
    </main>
	
	 
    <main class="row-tab">
       <section class="name">
         <label>Subject</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="sub" required>
         </section>
    </main>
	
	<main class="row-tab">
       <section class="name">
         <label>Message</label>
       </section>
       <section class="input">
        <input type="text"placeholder="" name="message" required>
         </section>
    </main>
	 
	<div class="row-tab">
  <button class="xy" >Submit</button>
</div>
	</form>
	</section>
	
	</body>
	</html>
	
	