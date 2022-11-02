<?php

    session_start();

    require_once '../database/connect.php';


    if(!isset($_SESSION["username"]))
    {
        header("location: ../index.php");
    }

    if(isset($_POST['post']))
    {
        

        $role = $_POST['jobRole'];
        $refCode = $_POST['refCode'];
        $date = date("d-m-y");
        $expiry = $_POST['expDate'];
        $compName = $_POST['CompName'];


        $jobs_sql = "insert into jobs (role, reference, date, expiry, company) values ('$role', '$refCode', '$date','$expiry', '$compName')";
        
        if($connect->query($jobs_sql))
        {
            //echo '<script>alert("Inserted successfully");</script>';
        }
        else
            echo '<script>alert("Insertion failed");</script>';


        //to update in jobs posted table

        $sql = "select max(id) from jobs";
        
        $result = $connect->query($sql);
        $fetch = mysqli_fetch_assoc($result);


        $alumni_id = $_SESSION['id'];
        $job_id = $fetch['max(id)'];
        
        $jobs_posted_sql = "insert into jobs_posted (job_id, alumni_id) values('$job_id', '$alumni_id')";

        if($connect->query($jobs_posted_sql))
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
                <li class="item active"><a href="jobs.php">Post Jobs</a></li>
                <li class="item"><a href="viewapplicants.php">View Applicants</a></li>
                <li class="item"><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class = "content">

                <br>
                
        <div class = "msgBox"> 

                    <div class = "heading">
                        POST JOB
                    </div>
            <div class="form-content">
                    <form action="" method = "post">
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px">Job Role:        </label>
                            <input style = "margin-left: 70px;" type="text" name="jobRole" size="15" required/> 
                        </div>
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px">Reference Code: </label>
                            <input type="text" name="refCode" size="15" required/>
                        </div>
                        <div class="form-ele">
                            <label for="expiry" style = "padding-left: 5px">Expiry Date :  </label>
                            <input style = "margin-left: 45px;" type="date" name="expDate" size="15" required/>
                        </div>
                        <div class="form-ele">
                            <label for="jobRole" style = "padding-left: 5px">Company Name: </label>
                            <input type="text" name="CompName"  required/>
                        </div>

                        <div class="form-ele">
                            <input type="submit" name = "post" style = "background-color: rgb(52, 174, 52); float: right;" value = "Post">
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