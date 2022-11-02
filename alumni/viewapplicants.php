<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    //applicants;
    $alumni_id = $_SESSION['id'];
    $sql = "select * from students where id in (select student_id from jobs_applied where job_id in (select job_id from jobs_posted where alumni_id = '$alumni_id'))";
    $resultSet = $connect->query($sql);
    $noOfApplicants = ($resultSet->num_rows > 0) ? $resultSet->num_rows : 0;


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/alumnicss.css" type = "text/css" rel="stylesheet">
    <title>Jobs</title>
</head>
<body>
    <div class = "bg">

        <div class = "topnav">

            <a class = "logout" href="logout.php">Logout</a>
            <span style = "font-size: 20px;"><?php echo $_SESSION['username']; ?></span>

        </div>

        <div class = "sidenav">
            <ul class = "links">
                <li class="item"><a href="home.php">Home</a></li>
                <li class="item"><a href="jobs.php">Post Jobs</a></li>
                <li class="item active"><a href="viewapplicants.php">View Applicants</a></li>
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">

                <br>
                
        <div class = "msgBox"> 

                    <div class = "heading">
                        Applied Candidates: <?php echo "$noOfApplicants"; ?>
                    </div>
                    <table>
                        <thead>
                            <th>S.no</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Regd No.</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <!-- <th>Company</th> -->
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                
                                if($resultSet->num_rows > 0)
                                {
                                    $i = 1;
                                    while($row = $resultSet->fetch_assoc())
                                    {
                                        echo  "<tr><td>".$i++."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["regd_no"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>"."</td><td></td></tr>";
                                    }
                                }
                                else
                                {
                                    echo "<p><center>No Student Applied</center></p>";
                                }

                            ?>
                        </tbody>
                    </table>
            </div>

        </div>
    </div>
</body>
</html>

<?php

    

?>