<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $sqlQuery = "select * from students;";
    $result = $connect->query($sqlQuery);
    $applicants = $result->num_rows;
    $sqlQuery = "select * from alumni;";
    $result = $connect->query($sqlQuery);
    $alumnis = $result->num_rows;
    $sqlQuery = "select * from jobs;";
    $result = $connect->query($sqlQuery);
    $jobCount = $result->num_rows;



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/admincss.css" type = "text/css" rel="stylesheet">
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
                <li class="item active"><a href="home.php">Home</a></li>
                <li class="item"><a href="jobs.php">Jobs</a></li>
                <li class="item"><a href="students.php">Students</a></li>
                <li class="item"><a href="alumnis.php">Alumnis</a></li>
                <!-- <li class="item"><a href="admins.php">Admins</a></li> -->
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">
                <div class="cards">
                    <div class="card">
                        <span>Students : <?php echo $applicants; ?></span>
                    </div>
                    <div class="card">
                        <span>Alumnis : <?php echo $alumnis; ?></span>
                    </div>
                    <div class="card">
                        <span>Jobs : <?php echo $jobCount; ?></span>
                    </div>
                </div>

                
                

        </div>
    </div>
</body>
</html>

<?php

    

?>