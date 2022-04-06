<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='alumni_management_system';
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if(!$con){
        die('Could not Connect to MySql'.mysql_error());
    }
    return $con;
?>