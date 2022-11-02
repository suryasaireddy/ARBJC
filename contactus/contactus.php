<!DOCTYPE html>
<html>
<head>
  <link href = "../css/style.css" type = "text/css" rel = "stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<link href="css/style.css" type = "text/css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div>
    <nav>
        <div class="logo">
            <h4>Jobs</h4>
        </div>
        <div class = "navright">
            <ul class="navlinks">
                <li><a href="#home" class = "linkpulse">Home</a></li>
                <li><a href="contactus/contactus.html" target = "_self" class = "linkpulse">Contact</a></li>
                <li><a href="#home" class = "linkpulse">About</a></li>
            </ul>
        </div>
        <div class="navbtn">
            <button id = "loginBtn" onclick="login()" class = "btn">Login</button>
            <button class = "btn" id = "signupBtn" onclick="signup()">SignUp</button>
        </div>
    </nav>
    <!-- <div class="line" style="height:12px; width:100%; margin-left: 0;"></div> -->
</div>
  <div style="text-align:center">
    <h2><u>Contact Us</u></h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="contactusimage.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="email">Email-Id</label>
        <input type="text" id="emailid" name="email" placeholder="Your email id..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
