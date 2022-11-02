<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $id = $_SESSION['id'];
    $sql = "select * from jobs where id in (select job_id from jobs_applied where student_id = '$id')";
    $result = $connect->query($sql);
    $_SESSION['jobsApplied'] = ($result->num_rows > 0) ? $result->num_rows : 0;
    


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
                <li class="item"><a href="jobs.php">Jobs View</a></li>
                <li class="item active"><a href="viewapplied.php">View Applied</a></li>
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">
                <div class = "msgBox"> 

                    <div class = "heading">
                        Jobs Applied
                    </div>
                    <table>
                        <thead>
                            
                            <?php
                                
                                if($result->num_rows > 0)
                                {?>
                                    <th>S.no</th>
                                    <th>Role</th>
                                    <th>Reference Code</th>
                                    <th>Posted Date</th>
                                    <th>Expiry Date</th>
                                    <th>Company</th>
                                <?php
                                }
                                else
                                {
                                    echo "<center><p> No jobs Applied</P></center>";
                                }

                            ?>
                        </thead>
                        <tbody>
                            <?php
                                
                                if($result->num_rows > 0)
                                {
                                    $i = 1;
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo  "<tr><td>".$i++."</td><td>".$row["role"]."</td><td>".$row["reference"]."</td><td>".$row["date"]."</td><td>".$row["expiry"]."</td><td>".$row["company"]."</td>"."</tr>";
                                    }
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