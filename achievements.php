<?php
    include './navbaradmin.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: adminlogin.php");  
    }
    $sql="SELECT * FROM achievements";
    $result=mysqli_query($con,$sql);
    $count=$result->num_rows;    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="adminmain">
        <div class="head">
            ALUMNI ACHIEVEMENTS RESPONSES
            <br>
        </div>
        <table class="tablecontainer" id="table" border=black width=90% height=60%>
            <div class="tableheader">
                <tr>
                <th>ID</th>
                <th>NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </th>
                <th>EMAIL</th>
                <th>ACHIEVEMENT</th>
                <th>DESCRIPTION</th>
                <th>PROOF </th>
                </tr>
            </div>
            
            <?php
                while($count>0){
                    $row=mysqli_fetch_array($result);
                    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["achievement"]."</td><td>".$row["description"]."</td><td><a href='./uploads/".$row["file_name"]."' target='_blank'>VIEW</a></td></tr>";
                    $count=$count-1;
                }
            
            ?>
        </table>
        
    </div>
    
</body>
</html>
