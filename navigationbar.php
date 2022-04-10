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
    <title>ALUMNI PORTAL</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>
    <div class="topheader"></div>
    <div class="header">
        <div class="logo">
            <a href="alumnihome.php"><img src="./assets/images/sistlogo.jpg" alt="logo"  height="75" ></a>                 
            <div class="text"><b> &nbsp&nbsp&nbsp ALUMNI PORTAL</b></div>          
        </div>
    </div>
    <div class="nav-bar">
        <div class="list-items">
            <ul><b>
                <li><a href="alumnihome.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="events.php">EVENTS</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">ALUMNI ASSIST&nbsp&nbsp&nbsp&nbsp&nbsp</a></b>
                    <div class="dropdown-content">
                        <a href="sendquery.php">Send Query</a>
                        <a href="postajob.php">Post a Job</a>
                        <a href="shareachievements.php">Share Achievements</a>
                        <a href="beamentor.php">Be a Mentor</a>
                    </div>
                </li><b>
                <li><a href="logout.php">LOG OUT</a></li></b>
            </ul>
        </div>
    </div>
</body>
</html>