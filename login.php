
<?php
    
    session_start();

    include 'database/connect.php';

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['userType'];

        $email_search = "";
        if($usertype == "students")
            $email_search = "select * from students where email = '$email'";
        else
            $email_search = "select * from alumni where email = '$email'";
        

        
        $result = $connect->query($email_search);
        $result_count = mysqli_num_rows($result);
        
        if($result_count)
        {
            $fetch = mysqli_fetch_assoc($result);
            $pass = $fetch['password'];

            if($pass == $password)
            {
                
                $_SESSION["loggedin"] = true;
                $_SESSION['username'] = $fetch['firstname'];
                $_SESSION['id'] = $fetch['id'];
                echo "Hello ". $_SESSION['username'];
                echo "Login Successfull";
                if($usertype == "alumni")
                    header("location: ./alumni/home.php");
                if($usertype == "students") 
                    {
                        $_SESSION['username'] = $fetch['first_name'];
                        header("location: student/home.php");
                    }
            }
            else
            {
                
               echo "Invalid Password";
               echo '<script>document.getElementById("password").focus();</script>';
            }

        }
        else
        echo "Invalid Username";


    }

?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align = "center">

    <form action="" method = "post">
        <h2><u><i>Alumni Login</i></u></h2>
        UserName: <input type="text" placeholder = "email" name = "email">
        <br>
        <br>
        Password: <input type="password" placeholder = "password" name = "psw">
        <br>
        <br>
        <button type="submit" name = "submit" class="registerbtn">Login</button>

    </form>

    
    
</body>
</html> -->




