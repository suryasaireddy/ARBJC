<!-- <!DOCTYPE html>
<html>  
    <head>   
        <title>  
        Registration Page  
        </title>  
    </head>  
    <body bgcolor="Lightskyblue" align = "center">  
        <br>  
        <br>  
        <form action = "#" method = "post">  
        
            <label> Firstname </label>         
            <input type="text" name="firstname" size="15"/> <br> <br>  
            <label> Lastname: </label>         
            <input type="text" name="lastname" size="15"/> <br> <br> 
            <label> Registered Number </label>         
            <input type="text" name="regdno" size="15"/> <br> <br>  
            <label>   
            Gender :  
            </label><br>  
            <input type="radio" name="radiobtn" value = "male" checked/> Male <br>  
            <input type="radio" name="radiobtn" value = "female"/> Female <br>  
            <input type="radio" name="radiobtn" value = "other"/> Other  
            <br>  
            <br>  
            <label> 
            
            Phone :  
            </label>  
            <input type="text" name="country code"  value="+91" size="1"/>   
            <input type="text" name="phone" size="10"/> <br> <br>  
            Email:  
            <input type="email" id="email" name="email"/> <br>    
            <br> <br>    
            
            
            Password:  
            <input type="password" id="password" name="password"/> <br>    
            <br> <br>    
            

            Confirm Password:  
            <input type="password" id="cpassword" name="cpassword"/> <br>    
            <br> <br>    
            <input type="submit" name = "submit" value="Submit"/>

            
        </form>  
    </body>  
</html>   -->


<?php

    include 'database/connect.php';

    if(isset($_POST['register']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $regdno = $_POST['regdno'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        
        $sql = "insert into students (first_name, last_name, regd_no, gender, phone, email, password) values('$firstname','$lastname', '$regdno','$gender','$phone','$email','$password')";

        if($connect->query($sql))
        {
          echo '<script>alert("Inserted successfully");</script>';
        }
        else
          echo '<script>alert("Insertion failed");</script>';
            
           
        $connect->close();    

    }

?>