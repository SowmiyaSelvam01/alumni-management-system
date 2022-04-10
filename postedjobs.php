<?php
    include './navbaradmin.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: adminlogin.php");  
    }
    $sql="SELECT * FROM postedjobs ORDER BY timeposted DESC";
    $result=mysqli_query($con,$sql);
    $count=$result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/table2excel.js" type="text/javascript">
    </script>
</head>
<body>
    <div class="adminmain">
        <div class="head">
            JOBS POSTED
            <button type="submit" name="downloadexcel" id="downloadexcel" class="open-button">Download Excel File</button>
            <br>
        </div>
        <div class="content">
            Recently posted job will appear on the top!
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
                <!-- <th>STATUS &nbsp&nbsp&nbsp</th> -->
                </tr>
            </div>            
            <?php
                while($count>0){
                    $row=mysqli_fetch_array($result);
                    echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["companyname"]."</td><td>".$row["job"]."</td><td>".$row["jobdescription"]."</td><td>".$row["skills"]."</td><td>".$row["salary"]."</td><td>".$row["timeposted"]."</td></tr>";
                    $count=$count-1;
                }            
            ?>
        </table>        
    </div> 
</body>
</html>
<script>
    document.getElementById('downloadexcel').addEventListener('click',function(){
        var table2excel= new Table2Excel();
        table2excel.export(document.querySelectorAll("#table"));
    });
</script>
