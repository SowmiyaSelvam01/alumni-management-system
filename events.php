<?php
    include './navigationbar.php';
    include './dbconnect.php';
    $eventname=$date=$description="";
    $sql="SELECT * FROM events ORDER BY 'fromdate' ASC";
    $result=mysqli_query($con,$sql);
    // $row=mysqli_fetch_array($result);
    // echo $row;
    $count=$result->num_rows;
    // echo $count;
    if($result == TRUE){
        
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
        <div class="head"><b>EVENTS - UPCOMING EVENTS</b></div><br>
        <div class="content">
            View the upcoming alumni events and conferences!
            <br><br>
            UPCOMING EVENTS
        </div>
            <?php
            while($count>0){
                    $row=mysqli_fetch_array($result);?>
                <div class="eventcontainer">
                    <div class="eventname">
                        <?php echo $row["eventname"];?>
                    </div>
                    <div class="eventdate">
                        DATE:<?php echo $row["fromdate"]." - ".$row["todate"];
                        ?>
                    </div>
                    <div class="eventdesc">
                        <?php echo $row["description"];?>
                    </div>
                </div>
                <?php
                    $count=$count-1;
                }
            ?>
    </div>
</body>
</html>