<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $sqlQuery = "select * from jobs;";
    $result = $connect->query($sqlQuery);

    


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/studentcss.css" type = "text/css" rel="stylesheet">
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
                <li class="item active"><a href="jobs.php">Jobs View</a></li>
                <li class="item"><a href="viewapplied.php">View Applied</a></li>
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">
                <div class = "msgBox"> 

                <div class = "presentData heading">
                            Jobs
                    </div>
                    <div class = "line"></div>
                        <table>
                            <thead>
                                <th>S.no</th>
                                <th>Role</th>
                                <th>Posted Date</th>
                                <th>Organization</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    if($result->num_rows > 0)
                                    {
                                        $i = 1;
                                        while($row = $result->fetch_assoc())
                                        {
                                            echo  "<tr><td>".$i++."</td><td>".$row["role"]."</td><td>".$row["date"]."</td><td>".$row["company"]."</td>"."<td><a href="."viewJob.php?id=".$row["id"]." style ="."text-decoration: none;".">View Details</a></td>"."</tr>";
                                        }
                                    }

                                ?>
                            </tbody>
                        </table>

                        <div class = "line"></div>

                    </div>
                </div>

                </div>

        </div>
    </div>
</body>
</html>

<?php

    

?>

<a href="viewJob.php">View Job</a>