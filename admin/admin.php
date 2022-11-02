<?php

    session_start(); 

    require_once '../database/connect.php';
    
    
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $search = "select * from admin_login where email = '$email'";
        $result = $connect->query($search);
        $result_count = mysqli_num_rows($result);
        
        if($result_count)
        {
            $fetch = mysqli_fetch_assoc($result);
            $pass = $fetch['password'];

            if($pass == $password)
            {
                
                $_SESSION["id"] = $fetch['id'];
                $_SESSION['username'] = $fetch['firstname'];
                echo "Hello ". $_SESSION['username'];
                echo '<script>alert("Login Successfull");</script';
                header("location: home.php");
            }
            else
            {
                
               echo '<script>alert("Invalid Password");</script>';
               echo '<script>document.getElementById("password").focus();</script>';
            }

        }
        else
        echo '<script>alert("Invalid Username");</script>';
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" type = "text/css" rel="stylesheet">
    <script src="../js/script.js"></script>

    <title>Jobs</title>
</head>
<body>
<div>
        <div id = "admin-Modal" class="modal">
            <div class="modal-content"> 
                <div class="student-login" id = "admin">
                    <h2>Admin</h2>
                    <div class="line"></div>
                    <div class="form-content">
                        <form action="" method = "post">
                           <div class="form-ele">
                               <input type="hidden" value = "students" name = "userType">
                               <input type="text" placeholder="email" name = "email" required>
                           </div>
                           <div class="form-ele">
                               <input type="password" placeholder = "password" name = "password" required>
                           </div>
                           <div class="form-ele">
                               <input type="submit" name = "login" value = "login">
                           </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>