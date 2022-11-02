<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $id = $_SESSION['id'];
    $sqlQuery = "select * from jobs where id in (select job_id from jobs_posted where alumni_id = '$id')";
    $result = $connect->query($sqlQuery);
    $jobs = ($result->num_rows > 0) ? $result->num_rows : 0;

    


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
                <li class="item active"><a href="home.php">Home</a></li>
                <li class="item"><a href="jobs.php">Post Jobs</a></li>
                <li class="item"><a href="viewapplicants.php">View Applicants</a></li>
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">
                <div class="cards">
                    <div class="card">
                        <span>Jobs Posted : <?php echo $jobs; ?></span>
                    </div>
                    <!-- <div class="card">
                        <span>Applied Persons : <?php ; ?></span>
                    </div> -->
                </div>

                <br>
                <div class="cards">
                    
                </div>
                <div class = "msgBox"> 

                    <div class = "presentData heading">
                            Jobs posted
                    </div>
                    <div class = "line"></div>
                        <table>
                            <thead>
                                <th>S.no</th>
                                <th>Role</th>
                                <th>Reference</th>
                                <th>Posted Date</th>
                                <th>Expiry Date</th>
                                <th>Company</th>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    if($result->num_rows > 0)
                                    {
                                        $i = 1;
                                        while($row = $result->fetch_assoc())
                                        {
                                            echo  "<tr><td>".$i++."</td><td>".$row["role"]."</td><td>".$row["reference"]."</td><td>".$row["date"]."</td><td>".$row["expiry"]."</td><td>".$row["company"]."</td></tr>";
                                        }
                                    }

                                ?>
                            </tbody>
                        </table>

                        <div class = "line"></div>

                    </div>

        </div>
    </div>
</body>
</html>

<?php

    

?>