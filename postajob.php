<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $companyname=$job=$jobdescription=$salary=$skills=$msg=$email="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=test_input($_POST["email"]);
        $companyname=test_input($_POST["companyname"]);
        $job=test_input($_POST["job"]);
        $jobdescription=test_input($_POST["jobdescription"]);
        $salary=test_input($_POST["salary"]);
        $skills=test_input($_POST["skillsreq"]);
    }
    if(isset($_POST["submit"])){
        $sql="INSERT INTO postedjobs(id, email,companyname, job, jobdescription,salary,skills,timeposted) values (Null,'$email','$companyname','$job','$jobdescription','$salary','$skills',NOW())";
        if(mysqli_query($con,$sql)){
            $msg="Thank you for the response, We will get back to you!!";
        }
        else{
            echo "ERRor";
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
        <div class="head"><b>ALUMNI ASSISST - POST A JOB</b></div>
        <div class="content">
            Share opportunities with the students, Recruit from your almamater. Give the Job details below.
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
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your email" name="email" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Company Name</span>
                        <input type="text" placeholder="Enter company name" name="companyname" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Job Position</span>
                        <input type="text" placeholder="Enter Job Position" name="job" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Job Description</span>
                        <textarea name="jobdescription" id="jobdescription"  rows="10" placeholder="Job Description"  autocomplete="off" required></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">Salary Range</span>
                        <input type="text" name="salary" placeholder="Enter salary range" autocomplete="off" required>            
                    </div>
                    <div class="input-box">
                        <span class="details">Skills Required</span>
                        <input type="text" name="skillsreq" placeholder="Enter skills required" autocomplete="off" required>
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