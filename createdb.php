<?php
    $servername='localhost';
    $username='root';
    $password='';
    $con=mysqli_connect($servername,$username,$password);
    $dbname='alumni_portal_db';
    // creating db if not exists
    $sql="CREATE DATABASE IF NOT EXISTS alumni_portal_db";
    if($con->query($sql) != TRUE){
        $perr="Error while creating database";
    }

    //creating tables if not exists
    $sql="CREATE TABLE IF NOT EXISTS alumni_login_details (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(40) NOT NULL
        )";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if($con->query($sql) != TRUE){
        echo "ERROR";
    }
    else{
        echo "TRUE";
    }
?>