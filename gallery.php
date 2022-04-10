<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
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
    <div class="alumnimain">
        <div class="head">
            <b> GALLERY </b>
        </div>
        <div class="subheading">
            CAMPUS IMAGES
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg1.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg2.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg3.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg4.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg5.jpeg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg6.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg7.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg8.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg9.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/campusimg10.jpg" alt="img" >
        </div>
    </div>

</body>
</html>