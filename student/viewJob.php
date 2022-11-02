<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    $studentId = $_SESSION["id"];
    $id = $_GET["id"];

    $sql = "select * from jobs where id = '$id'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $role = $row['role'];
    $postedDate = $row['date'];
    $date = strtotime($row['expiry']);
    $expiryDate = date('Y-m-d', $date);
    $comp = $row['company'];

    if(isset($_POST['apply']))
    {
        

        echo "<script></script>";
       


        $jobs_sql = "insert into jobs_applied (job_id, student_id) values ('$id', '$studentId')";
        
        if($connect->query($jobs_sql))
        {
            //echo '<script>alert("Inserted successfully");</script>';
        }
        else
            echo '<script>alert("Insertion failed");</script>';


        $connect->close();


    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/viewJob.css" type = "text/css" rel="stylesheet">
    <title>Jobs</title>
</head>
<body>
    <div class = "bg">

        <div class = "topnav">

            <a class = "logout" href="logout.php">Logout</a>
            <span style = "font-size: 20px;"><?php echo "Student: ".$_SESSION['username']; ?></span>

        </div>

        <div class = "sidenav">
            <ul class = "links">
                <!-- <li class="item"><a href="home.php">Home</a></li> -->
                <li class="item active"><a href="jobs.php">back</a></li>
                <!-- <li class="item"><a href="viewapplicants.php">View Applicants</a></li> -->
                <!-- <li class="item"><a href="settings.php">Profile</a></li> -->
            </ul>
        </div>
        <div class = "content">

                <br>
                
        <div class = "msgBox"> 

                    <div class = "heading">
                        Job Details
                    </div>
            <div class="form-content" align = "center">
                    <form action="" method = "post">
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Job Role:        </label>
                            <input style = "margin-left: 70px; font-size: 20px;" type="text" name="jobRole" size="15" value = "<?php echo $role; ?>"  readOnly required/> 
                        </div>
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Posted Date: </label>
                            <input style = "margin-left: 47px; font-size: 20px;" type="text" name="refCode" size="15" required value = "<?php echo $postedDate; ?>"  readOnly/>
                        </div>
                        <div class="form-ele">
                            <label for="expiry" style = "padding-left: 5px; font-size: 20px;">Expiry Date :  </label>
                            <input style = "margin-left: 45px; font-size: 20px;" type="text" name="expDate" size="15" required value = "<?php echo $expiryDate; ?>"  readOnly/>
                        </div>
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px; font-size: 20px;">Company Name: </label>
                            <input type="text" name="CompName" style = "font-size: 20px;" required value = "<?php echo $comp; ?>"  readOnly/>
                        </div>

                        <div class="form-ele">
                            <input type="submit" id = "btn" name = "apply" style = "background-color: rgb(52, 174, 52); float: right; margin-top: 0; margin-right:10px;" value = "APPLY">
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