<?php
    include './navbaradmin.php';
    include './dbconnect.php';
    $sql="SELECT * FROM postedjobs";
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
                <th>EMAIL</th>
                <th>COMPANY NAME</th>
                <th>JOB POSITION</th>
                <th>JOB DESCRIPTION</th>
                <th>SKILLS NEEDED</th>
                <th>SALARY RANGE</th>                
                <th>TIME POSTED&nbsp&nbsp&nbsp</th>
                <th>STATUS &nbsp&nbsp&nbsp</th>
                </tr>
            </div>
            
            <?php
                while($count>0){
                    $row=mysqli_fetch_array($result);
                    echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["companyname"]."</td><td>".$row["job"]."</td><td>".$row["jobdescription"]."</td><td>".$row["skills"]."</td><td>".$row["salary"]."</td><td>".$row["timeposted"]."</td><td></td></tr>";
                    $count=$count-1;
                }
            
            ?>
        </table>
        
    </div> 
</body>
</html>
