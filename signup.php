
<?php

    include 'connect.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $fname = $_POST['fullname'];
        $regd_no = $_POST['regd'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];

        $sql = "insert into alumni(uname, regd_no, email, password, phone, company) values ('$fname','$regd_no','$email','$password','$phone','$company')";

        if($connect->query($sql))
        {
          echo "Inserted successfully";
        }
        else
          echo "Insertion failed";
            
           
        $connect->close();    

    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method = "post">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
            
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
          <br>
          <br>

          <label for="email"><b>Name</b></label>
          <input type="text" placeholder="full name" name="fullname" id="name" required>
            <br><br>

            <label for="email"><b>Regd.NO</b></label>
          <input type="text" placeholder="Regd.no" name="regd" id="regd" required>
            <br><br>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <br>
            <br>
            <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="conf-psw" required>
          <br><br>
            <label for="psw"><b>Phone</b></label>
          <input type="text" placeholder="Mobile" name="phone" id="phone" required>
           

            <label for="psw"><b>Company</b></label>
          <input type="text" placeholder="company" name="company" id="company" required>
            <br>
            <br>

          

          
          <hr>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      
          <button type="submit" name = "submit" class="registerbtn">Register</button>
        </div>
        
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>


