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
            padding: 0 4px;
        }
        
        .wrapper.main_content.countries {
            text-indent: 20%;
        }
        
        .video {
            position: absolute;
            top: 2%;
            right: 10%;
            overflow: scroll;
            background-attachment: fixed;
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
        
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type=submit] {
            box-align: center;
            align-content: center;
            width: 30%;
            background-color: #605597;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #594f8d;
        }
        
        .divi {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .no {
            width: 20%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
    </style>
</head>

<body>
    <script>
        function price() {
            var p = document.getElementById('nu').value;
            var c = document.getElementById('ch').value;
            p = p * 150000 + c * 80000;
            document.getElementById("price").innerHTML = p;
        }

        function validation() {
            var name = document.getElementById('name').value;
            var mail = document.getElementById('mail').value;
            var contact = document.getElementById('no').value;
            var adult = document.getElementById('nu').value;
            var child = document.getElementById('ch').value;
            var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;

            if (name.length < 3 || name.length > 30) {
                alert("name must be 3-30 character width");
                name.focus();
            }

            if (mail == '') {
                alert("mail id must not be empty");
            }

            if (contact.length != 10) {
                alert("contact number must be of 10 character length");
                contact.focus();
            }

            if (adult == ""){
                alert("enter the no of travellers");
            }

            if (name == '' || mail == '' || contact == "") {
                alert("all fields must be filled");
                name.focus();
                mail.focus();
                contact.focus();
            }

            if (name != '' && mail != '' && contact != "" && name.length > 3 && name.length < 30 && contact.length == 10 && adult !='') {
                alert("your order is placed successfully our coustomer care executive will contact you soon on your order");
            }
        }

    </script>
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
            <center><b><font size = "6px">BOOK TICKETS</font></b></center>
            <center><b><font size = "3px">BRAZIL 5 DAYS / 6 NIGHTS</font></b></center>
            <center><p>** LEAVE THE DATE FIELD EMPTY IF YOU WANT TO TALK ABOUT TRAVEL DATE TO CUSTOMER CARE EXECUTIVE **</p></center>
            <div class="divi">
                <form action="brazil1.php" method="post" name="booking" onsubmit="validation()">
                    <label for="name">Booking Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name...">

                    <label for="state">State</label>
                    <select id="state" name="state">
                        <option value="tn">Tamil Nadu</option>  
                        <option value="ka">Karnataka</option>
                        <option value="ap">Andra pradesh</option>
                        <option value="kl">Kerala</option>
                    </select>

                    <label for="mail">E-mail id</label>
                    <input type="email" id="mail" name="mail" placeholder="Your mail id...">

                    <label for="no">Contact Number</label>
                    <input type="number" id="no" name="no" placeholder="Your contact number...">

                    <label for="from">FROM DATE : </label>
                    <input type="date" id="from" name="from">

                    <table id="tab">
                        <tr>
                            <td>
                                <div class="no">
                                    <label for="nu">Number of Travellers</label>
                                    <input type="number" id="nu" name="nu" placeholder="no...">
                                </div>
                                <div class="no">
                                    <label for="ch">Number of childrens below-5y</label>
                                    <input type="number" id="ch" name="ch" placeholder="no...">
                                </div>
                            </td>
                            <td>
                                <p>TOTAL PRICE : </p>
                                <p id="price" onclick="price()">Click to check price</p>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="ok" value="submit">
                </form>
            </div>

        </div>
    </div>
</body>

</html>