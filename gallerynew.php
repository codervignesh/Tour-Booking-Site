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
        
        * {
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: Arial;
        }
        
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }
        /* Create four equal columns that sits next to each other */
        
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }
        
        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }
        /* Responsive layout - makes a two column-layout instead of four columns */
        
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }
        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
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
                <li><a href="https://www.google.com/maps/place/Coimbatore+Institute+of+Technology/@11.0283259,77.0250919,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba858979f85136b:0xdd9ca28d3c37cf8a!8m2!3d11.0283259!4d77.0272806"><i class="fas fa-map-pin"></i>Find us on</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <br>
            <h1><b><center><font color="rgb(25, 0, 255)">A2Z TRIPS</b><sub style="font-size:15px">by rador groups</sub><b></font>
            </center></b></h1>
            <br>
            <hr width="100%" size="2px" color="red">

            <div class="row">
                <div class="column">
                    <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/7f/a1/e7.jpg" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSN0fnS64CJGuOUS-Mnm1y7OA5XgHt9uDGVj-rDD4F9vQ2I-m0l&usqp=CAU" style="width:100%">
                    <img src="data:image/jpeg;base64,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"
                        style="width:100%">
                    <img src="https://www.traveltourister.com/admin/include/upload/packages/5b9794278876eMauritius%20Tour%20Package%20from%20Bangalore.jpg" style="width:100%">
                </div>
                <div class="column">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/akbartravelsholidays/admin/thumbnail1572938128121549865393_496c23e2-5602-44f3-96e6-8a5edc3ab6f6-4272-dubai-palm-helicopter-tour---17-minutes-01.jpg.jpg" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSsh0rVBJ7UnbrJMM9zcqJ-oz77W0PppQs4I3V-jg5B_0LoSeDu&usqp=CAU" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTibMf2-P-1yO-aIoaiVIR6rt_EQV7m-5gEtCl-OmvpwdIvn0T&usqp=CAU" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiRYlIiKX8egC2utgMJzrvZgMG11rjV_EGRY1n3SJAl7FR9zsa&usqp=CAU" style="width:100%">
                </div>
                <div class="column">
                    <img src="https://s27363.pcdn.co/wp-content/uploads/2020/01/10-Day-Egypt-Itinerary-1129x752.jpg.optimal.jpg" style="width:100%">
                    <img src="https://www.naturewings.com/images/north-sikkim/north-sikkim-package-tour-in-summer.jpg" style="width:100%">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/akbartravelsholidays/admin/thumbnail156801739668rsz_kandy_city_mountain_view-1280x565.jpg" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQYvvolRdPPJgV6rKZCNVvHoYCdzYc_cCc8EJ8gveFYEhTS8o3Q&usqp=CAU" style="width:100%">
                </div>
                <div class="column">
                    <img src="https://cdn.getyourguide.com/img/tour_img-1598271-146.jpg" style="width:100%">
                    <img src="https://img.traveltriangle.com/attachments/pictures/891455/original/Amazing-bird-eyes-view-in-Maldives.jpg?tr=w-583,h-406" style="width:100%">
                    <img src="https://www.travza.in/holidays/wp-content/uploads/2020/01/usa-tour-packages.jpg" style="width:100%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSd_0OjvpEv7ySw1v2O7wMlm29yaH418XkVAbfDoBu6kdY_9LRd&usqp=CAU" style="width:100">
                </div>
            </div>
</body>

</html>