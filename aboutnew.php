<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cascade.css">
    <style>
        body {
            background-color: #f3f5f9;
        }
        
        p {
            text-indent: 5%;
            color: black;
            text-size: 50;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: red;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>
                <a href="homenew.php">
                    <font color="aliceblue"><b>A2Z</b></font>
                </a>
            </h2>

            <ul>
                <li><a href="homenew.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="gallerynew.php"><i class="fa fa-youtube-play"></i>  Gallery</a></li>
                <li><a href="aboutnew.php"><i class="fas fa-address-card"></i>About</a></li>
                
                <?php
                    if(isset($_SESSION['user']))
                    {
                    echo(" <li><a><i class='fa fa-sign-in'></i>Hi " .$_SESSION['user']. "</a></li>");
                    echo('<li><a href="new_logout.php?logout">Logout</a></li>');
                    }

                    else
                    {
                    echo "<li><a href='login.php'><i class='fa fa-sign-in'></i>  login</a></li>";
                    }
                ?>
                <li><a href="https://www.google.com/maps/place/Coimbatore+Institute+of+Technology/@11.0283259,77.0250919,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba858979f85136b:0xdd9ca28d3c37cf8a!8m2!3d11.0283259!4d77.0272806" target="_blank"><i class="fas fa-map-pin"></i>Find us on</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <br>
            <h1><b><center><font color="rgb(25, 0, 255)">A2Z TRIPS</b><sub style="font-size:15px">by rador groups</sub><b></font></center></b></h1>
            <br>
            <hr width=100% size=2px color="red">
            <br><br>
            <p style="font-size:30px"><b>A2Z TRIPS</b> is a company established in the year 2010,APRIL,20 by <b>RADOR groups of company.</b> Untill now we have 10,00,000+ happy customers.This is our company's 10th anniversary. Our A2Z trips company became world wide popular because
                of our happy customers. We are happy to continue our services world wide after the stop of spread of Corona(covid-19). We are felling happy to do tour services world wide. Untill that stay home, stay safe, avoid outdoors...</p><br>
            <center><iframe width="560" height="315" src="https://www.youtube.com/embed/X01R1a85CI8" frameborder="0" allow="accelerometer; autoplay; 
            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center><br>
            <p>
                <center>We arrange guide, visa for tours around the world</center>
            </p>
        </div>
    </div>
</body>

</html>