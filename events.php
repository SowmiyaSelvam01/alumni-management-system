<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $eventname=$date=$description="";
    $sql="SELECT * FROM events where fromdate>CURDATE() ORDER BY fromdate ASC";
    $result=mysqli_query($con,$sql);
    $count=$result->num_rows;
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
            <br>
        </div>
            <?php
            while($count>0){
                    $row=mysqli_fetch_array($result);?>
                <div class="eventcontainer">
                    <table width=100% height=250px>
                        <tr>
                            <th>
                                <div class="eventname">
                                    <?php echo strtoupper($row["eventname"]);?>
                                </div>
                                <div class="eventdate">
                                    DATE: <?php 
                                    if($row["fromdate"]==$row["todate"]){
                                        echo $row["fromdate"];
                                    }
                                    else{
                                        echo $row["fromdate"]." - ".$row["todate"];
                                    }
                                    ?>
                                </div>
                                <div class="eventdesc">
                                    <?php echo $row["description"];?>
                                </div>
                            </div>
                            </div>
                        </th>
                        <th>
                            <a href="events/<?php echo $row["file_name"];?>" target="_blank">
                                <img id="myImg" src="events/<?php echo $row["file_name"];?>">
                            </a>                    
                        </th></tr>
                    </table>        
                </div>
                <?php
                    $count=$count-1;
                }
            ?>            
    </div>    
</body>
</html>