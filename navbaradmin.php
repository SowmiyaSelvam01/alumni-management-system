<?php
    include './dbconnect.php';
    include './scrolltotop.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - ALUMNI PORTAL</title>
    <link rel="stylesheet" href="./assets/css/stylesheetalumni.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="topheader"></div>
    <div class="header">
        <div class="logo-admin">
            <a href="adminhome.php"><img src="./assets/images/sistlogo.jpg" alt="logo"  height="75" ></a>                 
            <div class="text-admin"><b> &nbsp&nbsp&nbsp ALUMNI PORTAL </b></div>           
        </div>
    </div>
    <div class="side-navbar">
        <br><br><br><br><br><br><br><br><br>
        <ul> <b>
            <li><a href="adminhome.php"><i class="fa fa-home"></i>&nbsp
                HOME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="queries.php">QUERIES &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li><br>
            <li><a href="achievements.php">ACHIEVEMENTS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="postedjobs.php">POSTED JOBS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="mentorrequests.php">MENTOR REQUESTS</a></li>
            <li><a href="updateevents.php">UPDATE EVENTS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
            <li><a href="logout.php">LOGOUT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
        </ul></b>
    </div>
</body>
</html>