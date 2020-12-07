<?php 
session_start();
?>


<html>

<head>
    <title>
        book australia
    </title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cascade.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: 'Josefin Sans', sans-serif;
        }
        
        p,
        li {
            line-height: 26 pt;
            font-size: 18 px;
        }
        
        body {
            background-color: #f3f5f9;
        }
        
        li {
            list-style-type: circle;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: rgb(25, 0, 255);
        }
        
        .image {
            -ms-flex: 25%;
            flex: 25%;
            max-width: 50%;
            padding: 0 4 px;
        }
        
        .video {
            position: absolute;
            top: 2%;
            right: 10%;
            overflow: scroll;
            background-attachment: fixed;
        }
        
        #tab {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #tab td,
        #tab th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #tab td:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #tab td:hover {
            background-color: #ddd;
        }
        
        #tab th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4b4276;
            color: white;
        }

        .button {
            position: -webkit-sticky;
            background-color: #4b4276;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
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
            <hr width="100%" size="2px" color="red">
            <br>
            <br>

            <table id="tab" align="left">
                <tr>
                    <th></th>
                    <th><CENTER>PLAN DETAILS</CENTER></th>
                    <th></th>
                </tr>
                <tr>
                    <td><center><b><h2>AUSTRALIA 5DAYS/6 NIGHTS</h2></b></center></td>
                    <td>
                        <center><b><font size = "10px"><a href="aus 5-6.php">1,20,500 rs</a></font></b></center> <br><br> (Photograph with Stars & Souvenir at Movie World <br><br> Famous Ben and Jerry's ice cream once during the tourIce Cream at the Great Barrier
                        Reef
                        <br><br> Enjoy a truly Australian local Delicacy - TIM TAM Biscuit packet per room once during the tour<br><br>1 soft drink at Movie World during lunch) 
                    </td>
                    <td style="padding: 50px;">
                        <a href="aus 5-6.php" class="button">BOOK NOW</a>
                    </td>
                </tr>
                <tr>
                    <td><center><b><h2>AUSTRALIA 7 DAYS/8 NIGHTS</h2></b></center></td>
                        <td>
                        <center><b><font size = "10px"><a href="aus 7-8.php">1,80,500 rs</a></font></b></center> <br><br> (Photograph with Stars & Souvenir at Movie World <br><br> Famous Ben and Jerry's ice cream once during the tourIce Cream at the Great Barrier
                        Reef
                        <br><br> Enjoy a truly Australian local Delicacy - TIM TAM Biscuit packet per room once during the tour<br><br>1 soft drink at Movie World during lunch<br><br>Chance to Watch World Cup T20 (At an additional Cost)<br><br>Enjoy a
                        Helicopter Ride<br><br>Cuddle the Koala and a Photograph per person FREE at Dream World (Feb - Mar 2020))
                    </td>
                    <td style="padding: 50px;">
                        <a href="aus 7-8.php" class="button">BOOK NOW</a>
                    </td>
                </tr>
                <tr>
                    <td><center><b><h2>BRAZIL 5 DAYS/6 NIGHTS</h2></b></center></td>
                    <td>
                        <center><b><font size = "10px"><a href="brazil 5-6.php">1,50,000 rs</a></font></b></center>3 nights’ accommodation in Rio De Janeiro<br><br>3 nights’ accommodation in Amazon Jungle<br><br>2 nights’ accommodation in Iguazu Falls<br><br>Daily
                        breakfast except on day 1
                        <br><br>Meals as mentioned in the itinerary<br><br>Sugar Loaf and Corcovado Mountain tour on seat in coach basis<br><br>Guanabara Bay tour on seat in coach basis<br><br>Samba Show with dinner on seat in coach basis<br><br>Iguazu
                        Falls tour on seat in coach basis</td>
                    <td style="padding: 50px;">
                        <a href="brazil 5-6.php" class="button">BOOK NOW</a>
                    </td>
                </tr>
                <tr>
                    <td><center><b><h2>BRAZIL 7 DAYS/8 NIGHTS</h2></b></center></td>
                    <td>
                        <center><b><font size = "10px"><a href="brazil 7-8.php">2,20,500 rs</a></font></b></center>3 nights’ accommodation in Rio De Janeiro<br><br>3 nights’ accommodation in Amazon Jungle<br><br>2 nights’ accommodation in Iguazu Falls<br><br>Daily
                        breakfast except on day 1
                        <br><br>Meals as mentioned in the itinerary<br><br>Sugar Loaf and Corcovado Mountain tour on seat in coach basis<br><br>Guanabara Bay tour on seat in coach basis<br><br>Samba Show with dinner on seat in coach basis<br><br>Iguazu
                        Falls tour on seat in coach basis<br><br>Brazilian Falls tour on seat in coach basis<br><br>Return airport transfers on seat in coach basis.
                    </td>
                    <td style="padding: 50px;">
                        <a href="brazil 7-8.php" class="button">BOOK NOW</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>