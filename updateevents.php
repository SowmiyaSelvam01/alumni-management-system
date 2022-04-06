<?php
    include './navbaradmin.php';
    include './dbconnect.php';
    $sql="SELECT * FROM events";
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
            UPCOMING EVENTS
            <br>
        </div>
        <table class="tablecontainer" id="table" border=black width=90% height=60%>
            <div class="tableheader">
                <tr>
                <th>ID</th>
                <th>EVENT NAME</th>
                <th>ORGANIZER</th>
                <th>EVENT DESCRIPTION</th>
                <th>FROM DATE&nbsp&nbsp</th>
                <th>TO DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <!-- <th>SALARY RANGE</th>                
                <th>TIME POSTED&nbsp&nbsp&nbsp</th>
                <th>STATUS &nbsp&nbsp&nbsp</th> -->
                </tr>
            </div>
            
            <?php
                while($count>0){
                    $row=mysqli_fetch_array($result);
                    echo "<tr><td>".$row["id"]."</td><td>".$row["eventname"]."</td><td>".$row["organizer"]."</td><td>".$row["description"]."</td><td>".$row["fromdate"]."</td><td>".$row["todate"]."</td></tr>";
                    $count=$count-1;
                    // <td>".$row["salary"]."</td><td>".$row["timeposted"]."</td><td></td>
                }
            
            ?>
        </table>
        
    </div> 
    
</body>
</html>
