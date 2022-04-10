<?php
    include './navbaradmin.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: adminlogin.php");  
    }
    $sql="SELECT * FROM queries";
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
            RECEIVED QUERIES
            <br>
        </div>
        <table class="tablecontainer" id="table" border=black width=90% height=100%>
            <div class="tableheader">
                <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>QUERY</th>
                <th>TIME POSTED&nbsp&nbsp&nbsp</th>
                </tr>
            </div>            
            <?php
                while($count>0){
                    $row=mysqli_fetch_array($result);
                    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["query"]."</td><td>".$row["time"]."</td></tr>";
                    $count=$count-1;
                }
            
            ?>
        </table>
        
    </div> 
    
</body>
</html>
