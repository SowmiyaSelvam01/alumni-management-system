<?php
    include './navigationbar.php'; 
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
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
        <div class="head">
           <b> ABOUT US </b>
        </div>
        <div class="subheading">
            <b>VISION</b>
        </div>
        <div class="content">
            Develop a fully connected, strong Sathyabama alumni community.<br>
        </div>
        <div class="subheading">
            <b>MISSION</b>
        </div>
        <div class="content">
            Promote alumni relationships, develop student engagement, and allow student-alumni interactions to benefit Sathyabama Institute of Science and Technology.
        </div><div class="subheading">
            <b>LETTER FROM ALUMNI COUNCIL</b>
        </div>
        <div class="content">
            <p>
            Dear Alumni,<br><br>
            Greetings from your Alma mater!<br><br>
            Alumni are vital to the institution's continued survival and progress. Consider some of the world's most prestigious universities; alumni have made substantial contributions. You are an important representative of our university. I hope you are well, doing well, and achieving success for yourself, your organisation, your family, and, of course, your alma mater.<br><br>
            Our Chancellor refers to our alumni as "our ambassadors and torch-bearers" on several occasions. This holds true for any university. Our Council's sole mission is to serve the  alumni community. The emphasis is on "for the alumni, by the alumni, and through the alumni" in this section. We appreciate all of your help and support in our attempt. To deepen our partnership, we'd like to hear your thoughts and comments. Let us strive for greater heights as a team. <br><br>
            I encourage you to participate actively in the activities conducted by the Alumni Office and Chapters, which can provide possibilities for professional advancement, knowledge enrichment, and networking. <br><br>
            Thank you for taking the time to visit the alumni page. I truly hope you will return to our site on a regular basis to keep up with news and happenings at the Institute and among our alumni.I once again welcome you to connect, collaborate, communicate with your alma mater, and explore the possibilities offered by the Alumni.<br><br><br>
            With best wishes, <br><br>
            Director <br>
            Alumni Council <br>
            Sathyabama Institute of Science and Technology <br>
            Chennai
            </p>
        </div>
</div>
</body>
</html>