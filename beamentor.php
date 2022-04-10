<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $eventname=$organizer=$description=$email=$fromdate=$todate=$msg="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $eventname=test_input($_POST["eventname"]);
            $organizer=test_input($_POST["organizer"]);
            $email=test_input($_POST["email"]);
            $description=test_input($_POST["description"]);
            $fromdate=test_input($_POST["fromdate"]);
            $todate=test_input($_POST["todate"]);
        }
        if(isset($_POST["submit"])){
            $sql="INSERT INTO mentorrequests(id, eventname, organizer,email, description, fromdate, todate) values (Null,'$eventname','$organizer','$email','$description','$fromdate','$todate')";
            if(mysqli_query($con,$sql)){
                $msg="Thank you for the response, We will get back to you.";
            }
            else{
                echo "Error";
            }
            mysqli_close($con);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
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
        <div class="head"><b>ALUMNI ASSIST - BE A MENTOR</b></div>
        <div class="content">
            <p>Be the mentor for the students of your almamater! Conduct workshops, seminars etc.,
                Show the students the workculture of your industry.</p>
        </div> 
       <div class="message">
            <?php
                if($msg!=""){
                    echo $msg;
                }
            ?>
        </div>     
        <div class="formcontainer">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="mentorform" method="post">
                <div class="input-box">
                        <span class="details">Event Name</span>
                        <input type="text" placeholder="Enter event name" name="eventname" autocomplete="off" required>
                </div>
                <div class="input-box">
                        <span class="details">Orgranizer Name</span>
                        <input type="text" placeholder="Enter organizer name" name="organizer" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter email" name="email" autocomplete="off" required>
                </div>
                <div class="input-box">
                        <span class="details">Description</span>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" autocomplete="off" required></textarea>
                    </div>
                <div class="input-box">
                        <span class="details">From Date</span>
                        <input type="date" name="fromdate"  min="<?=date("Y-m-d");?>" required>            
                </div>
                
                <div class="input-box">
                        <span class="details">To Date</span>
                        <input type="date" name="todate" min="<?=date("Y-m-d");?>" required>
                    </div>
                <button type="submit" value="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
</div>
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>