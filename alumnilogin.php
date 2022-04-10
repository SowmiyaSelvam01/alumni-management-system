<?php
  include './navbarindex.php';
  $message="";
  if(count($_POST)>0){
    $result= mysqli_query($con, "SELECT * FROM alumnilogin WHERE email='".$_POST["email"]."'");
    if(!$result){
      echo mysqli_error($con);
      exit;
    }
    $row= mysqli_fetch_array($result);
    $pwd=test_input($_POST["password"]);
    $pwd=md5($pwd);
    if((is_Array($row)) & ($pwd===$row["password"])){
      $_SESSION["id"]=$row["id"];
      $_SESSION["email"]= $row["email"];
      $_SESSION["password"]=$row["password"];
    }
    else{
      $message= "Invalid Email or Password";
    }
  }
  if(isset($_SESSION["id"])){
    header("Location:alumnihome.php");
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./assets/css/stylehome.css" />
    <title>ALUMNI LOGIN</title>
  </head>
  <body>
    <div class="main">
       <div class="bg-img">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name="alumnilogin" method="post" class="container">
          <center><h2><u>ALUMNI LOGIN</u></h2><br><br></center>
          <div class="message">
            <?php 
              if($message!=""){
                echo $message;
              }
            ?>
          </div>
          <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Enter your email" autocomplete="off" required><br><br>
          <label>Password</label><br>
          <input type="password" name="password" placeholder="Enter your password" autocomplete="off" required><br><br>
          <button type="submit" class="btn">Login</button><br><br>
          <p>Don't have an account ?&nbsp&nbsp&nbsp
            <b><a href="signup.php" class="link">Sign Up Now</a></b>
          </p>
        </form>
       </div>
    </div>
  </body>
</html>
