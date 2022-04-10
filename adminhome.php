<?php
    include './navbaradmin.php';
    session_start();
    $_SESSION["logged_in"]=TRUE;
    // count the number of queries
    $sql="SELECT * FROM queries";
    $result=mysqli_query($con,$sql);
    $queries_count=$result->num_rows;
    // count the number of shared achievements
    $sql="SELECT * FROM achievements";
    $result=mysqli_query($con,$sql);
    $achievements_count=$result->num_rows;
    // count the number of jobs posted
    $sql="SELECT * FROM postedjobs";
    $result=mysqli_query($con,$sql);
    $jobs_count=$result->num_rows;
    // count the number of mentor requests
    $sql="SELECT * FROM mentorrequests";
    $result=mysqli_query($con,$sql);
    $mentorreq_count=$result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>
    <div class="admindashboard">
        <a href="queries.php">
            <div class="dashboard-container">
                <div class="number"><?php echo $queries_count?></div>
                <div class="name">QUERIES RECEIVED</div>
            </div>
        </a>
        <a href="achievements.php">
            <div class="dashboard-container">
                <div class="number"><?php echo $achievements_count?></div>
                <div class="name">SHARED ACHIEVEMENTS</div>
            </div>
        </a>
        <a href="postedjobs.php">
            <div class="dashboard-container">
                <div class="number"><?php echo $jobs_count?></div>
                <div class="name">POSTED JOBS</div>
            </div>
        </a>
        <a href="mentorrequests.php">
            <div class="dashboard-container">
                <div class="number"><?php echo $mentorreq_count?></div>
                <div class="name">MENTOR REQUESTS</div>
            </div>
        </a>
    </div>
</body>
</html>