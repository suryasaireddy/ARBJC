<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="#" method="post">
  <div class="imgcontainer">
    <img src="adminloginimg.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name = "submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

<?php

    session_start();
    include 'connect.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['psw'];
        
        $email_search = "select * from students where email = '$email'";
        $result = $connect->query($email_search);
        $result_count = mysqli_num_rows($result);
        
        if($result_count)
        {
            $fetch = mysqli_fetch_assoc($result);
            $pass = $fetch['password'];

            if($pass == $password)
            {
                
                $_SESSION["loggedin"] = true;
                $_SESSION['username'] = $fetch['first_name'];
                echo "Hello ". $_SESSION['username'];
                echo '<script>alert("Login Successfull");</script';
                //header("location: index.php");
            }
            else
            {
                
               echo '<script>alert("Invalid Password");</script>';
            }

        }
        else
        echo '<script>alert("Invalid Username");</script>';


    }

?>