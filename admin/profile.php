<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $id = $_SESSION["id"];
    

    $sql = "select * from admin_login where id = '$id'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $firstName = $row['firstname'];
    $phone = $row['phone'];
    $email = $row['email'];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../student/css/viewJob.css" type = "text/css" rel="stylesheet">
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
                <li class="item"><a href="alumnis.php">Alumnis</a></li>
                <!-- <li class="item"><a href="admins.php">Admins</a></li> -->
                <li class="item active"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">

                <br>
                
        <div class = "msgBox"> 

                    <div class = "heading">
                        Details : 
                    </div>
            <div class="form-content" align = "center">
                    <form action="" method = "post">
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">First Name :        </label>
                            <input style = "margin-left: 40px; font-size: 20px; margin-top:0;" type="text" name="jobRole" size="15" value = "<?php echo $firstName; ?>"  readOnly required/> 
                        </div>
                        <!-- <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Last Name : </label>
                            <input style = "margin-left: 47px; font-size: 20px; margin-top:0;" type="text" name="refCode" size="15" required value = "<?php echo $lastName; ?>"  readOnly/>
                        </div>
                        <div class="form-ele">
                            <label for="expiry" style = "padding-left: 5px; font-size: 20px;">Regd.NO :  </label>
                            <input style = "margin-left: 45px; font-size: 20px; margin-top:0;" type="text" name="expDate" size="15" required value = "<?php echo $regd; ?>"  readOnly/>
                        </div> -->
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Email : </label>
                            <input type="text" name="CompName" style = "font-size: 20px; margin-top:0;" required value = "<?php echo $email; ?>"  readOnly/>
                        </div>
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Phone : </label>
                            <input type="text" name="CompName" style = "font-size: 20px; margin-top:0;" required value = "<?php echo $phone; ?>"  readOnly/>
                        </div>

                        <!-- <div class="form-ele">
                            <input type="submit" name = "apply" style = "background-color: rgb(52, 174, 52); float: right; margin-top: 0; margin-right:10px;" value = "APPLY">
                        </div> -->

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

<?php

    

?>