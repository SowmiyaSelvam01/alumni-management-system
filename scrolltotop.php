<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <i id="mybtn" onclick="topFunction()" class="fa fa-arrow-up" ></i>
    <script>
        var mybutton=document.getElementById("mybtn");
        window.onscroll=function(){
            scrollFunction()};
        function scrollFunction(){
            if(document.body.scrollTop >20 || document.documentElement.scrollTop >20){
                mybutton.style.display="block";
            }
            else{
                mybutton.style.display="none";
            }
        }

        function topFunction(){
            document.body.scrollTop=0;
            document.documentElement.scrollTop=0;
        }
    </script>
    
</body>
</html>