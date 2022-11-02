
<?php

include 'connect.php';

if(isset($_POST['submit']))
{
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $regd_no = $_POST['regdno'];
    $phone = $_POST['phone'];
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $company = $_POST['company'];

    $sql = "insert into alumni(firstname,lastname, regd_no, email, password, confirm_password,  phone, company) values ('$firstname','$lastname','$regd_no','$email','$password','$cpassword','$phone',  '$company')";

    if($connect->query($sql))
    {
      echo '<script>alert("Inserted successfully");</script>';
    }
    else
      echo '<script>alert("Insertion failed");</script>';
        
       
    $connect->close();    

}

?>



<html>  
    <head>   
    <title>  
    Registration Page  
    </title>  
    </head>  
    <body bgcolor="Lightskyblue">  
    <br>  
    <br>  
    <form action  = "#" method = "post">  
      
    <label> Firstname </label>         
    <input type="text" name="firstname" size="15" id = "firstname"/> <br> <br>  
    <label> Lastname: </label>         
    <input type="text" name="lastname" size="15" id = "lastname"/> <br> <br> 
    <label> Registered Number </label>         
    <input type="text" name="regdno" size="15" id = "regdNo"/> <br> <br>  
      
    Phone :  
    </label>  
    <input type="text" name="country code"  value="+91" size="2"/>   
    <input type="text" name="phone" size="10" id = "phone"/> <br> <br>  

    <label> Company: </label>         
    <input type="text" name="company" size="15" id = "company"/> <br> <br>

    Email:  
    <input type="email" id="email" name="email"/> <br>    
    <br> <br>    

    <label> Password: </label>         
    <input type="text" name="password" size="15" id = "password"/> <br> <br>

    <label> Confirm Password: </label>         
    <input type="text" name="cpassword" size="15" id = "cpassword"/> <br> <br>


    <input type="submit" name = "submit" value="Submit"/>  
    </form>  
    </body>  
    </html>  