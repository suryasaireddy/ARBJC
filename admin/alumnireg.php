<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    if(isset($_POST['post']))
    {
        

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $regdno = $_POST['regdNo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['Phone'];
        $company = $_POST['company'];

        $jobs_sql = "insert into alumni (firstname, lastname, regd_no, email, password, confirm_password, phone, company) values ('$firstname', '$lastname', '$regdno','$email', '$password', '$password', '$phone', '$company')";
        
        if($connect->query($jobs_sql))
        {
            echo "added successfully";
        }
        else
            echo "Insertion failed";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../alumni/css/alumnicss.css" type = "text/css" rel="stylesheet">
    <title>Jobs</title>
</head>
<body>
    <div class = "bg">

        <div class = "topnav">

            <a class = "logout" href="logout.php">Logout</a>
            <span style = "font-size: 20px;"><?php echo "ADMIN: ".$_SESSION['username']; ?></span>

        </div>

        <div class = "sidenav">
            <ul class = "links">
            <li class="item"><a href="home.php">Home</a></li>
                <li class="item"><a href="jobs.php">Jobs</a></li>
                <li class="item"><a href="students.php">Students</a></li>
                <li class="item active"><a href="alumnis.php">Alumnis</a></li>
                <!-- <li class="item"><a href="admins.php">Admins</a></li> -->
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">

                <br>
                
        <div class = "msgBox" style = "height : 85%;"> 

                    <div class = "heading">
                        Add Alumni
                    </div>
            <div class="form-content" style = "height : 90%;">
                    <form action="" method = "post">
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">FirstName :        </label>
                            <input style = "margin-left: 56px; margin-top: 0; width : 50%;" type="text" name="firstname"  required/> 
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">LastName :  </label>
                            <input type="text" style = "margin-left: 56px; margin-top: 0; width : 50%;" name="lastname" size="15" required/>
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="expiry" style = "padding-left: 5px">Regd.No:  </label>
                            <input style = "margin-left: 70px; margin-top: 0; width : 50%;" type="text" name="regdNo" size="15" required/>
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">Email :  </label>
                            <input type="text" name="email" style = "margin-left: 88px; margin-top: 0; width : 50%;" required/>
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">Password :  </label>
                            <input type="text" name="password" style = "margin-left: 64px; margin-top: 0; width : 50%;" required/>
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">Company :  </label>
                            <input type="text" name="company" style = "margin-left: 64px; margin-top: 0; width : 50%;" required/>
                        </div>
                        <div class="form-ele" style = "margin-left : 40px;">
                            <label for="jobRole" style = "padding-left: 5px">Phone :  </label>
                            <input type="text" name="Phone" style = "margin-left: 87px; margin-top: 0; width : 50%;" required/>
                        </div>

                        <div class="form-ele">
                            <input type="submit" name = "post" style = "background-color: rgb(52, 174, 52); float: right; margin-top: 0;" value = "ADD">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

<?php

    

?>