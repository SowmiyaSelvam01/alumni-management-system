<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
    $name=$achievement=$description=$proof=$msg=$file=$file_loc=$final_file="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $achievement=test_input($_POST["achievement"]);
        $description=test_input($_POST["description"]);
        if(isset($_FILES['submit'])){}
        $file=$_FILES['file']['name'];
        $file_loc=$_FILES['file']['tmp_name'];
        $folder="uploads/";
        // making file name in lowercase
        $new_file_name=strtolower($file);
        $final_file=str_replace(' ','-',$new_file_name);
        if(move_uploaded_file($file_loc,$folder.$final_file)){
            $sql="INSERT INTO achievements (id,name,email,achievement,description,file_name) values (Null,'$name','$email','$achievement','$description','$final_file')";
            if(mysqli_query($con,$sql)){
                $msg="Thank you for the response, Details recorded successfully!";
            }
            else{
                echo "error";
            }
        }
    }
    function test_input($data) {
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
        <div class="head"><b>ALUMNI ASSIST - SHARE ACHIEVEMENTS</b></div>
        <div class="content">Share your achievements with the almamater </div>
        <div class="message">
            <?php
                if($msg!=""){
                    echo $msg;
                }
            ?>
        </div>
    <div class="formcontainer">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="mentorform" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter name" name="name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter email" name="email" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Achievement</span>
                    <input type="text" placeholder="Enter achievement" name="achievement" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <span class="details">Description</span>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" autocomplete="off" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Upload Proof</span>
                    <input type="file" id="proof" name="file" required>
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