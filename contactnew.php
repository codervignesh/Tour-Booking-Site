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
            background: url('https://static.toiimg.com/photo/msid-74745493,width-96,height-65.cms') no-repeat top center;
            background-size: cover;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: red;
        }
        
        p {
            text-indent: 5%;
            color=#ffc107;
            font-size: 20;
        }
        
        .wrapper2 {
            position: absolute;
            top: 600%;
            right: 40%;
            transform: translate(-50%, -50%);
        }
        
        .contact-form {
            width: 100%;
            max-width: 500px;
            height: auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 50px;
            border-radius: 5px;
        }
        
        .title {
            font-size: 2em;
            line-height: 1.25em;
            text-align: center;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: 2px;
            color: #eeedf1;
            padding-bottom: 15px;
        }
        
        .input-fields {
            padding: 0 30px;
        }
        
        .input-fields .items {
            width: 100%;
            padding-bottom: 15px;
        }
        
        .input-fields .items .label {
            display: block;
            font-size: 1em;
            color: #eeedf1;
            text-transform: capitalize;
            transition: all 0.5s ease;
            padding-bottom: 5px;
        }
        
        .input-fields .items .input,
        .input-fields .items .text-area {
            background: transparent;
            border: 0;
            border: 1px solid #eeedf1;
            width: 100%;
            padding: 8px 10px;
            font-size: 1em;
            color: #eeedf1;
            border-radius: 3px;
        }
        
        .btn {
            margin: 0 30px;
            background: #4b4276;
            color: #eeedf1;
            font-size: 1.25em;
            padding: 10px 0;
            text-align: center;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 2px;
        }
        
        .items #msg {
            height: 100px;
        }
    </style>
</head>

<body>
    <script>
        function validation() {
            var name = document.getElementById('name').value;
            var mail = document.getElementById('mail').value;
            var subject = document.getElementById('subject').value;
            var msg = document.getElementById('msg').value;

            if (name == '' || mail == '' || subject == "" || msg == "") {
                alert("all fields must be filled");
                name.focus();
                mail.focus();
                subject.focus();
                msg.focus();
            } else if (name.length < 3 || name.length > 30) {
                alert("name must be 3-30 character width");
                name.focus();
            } else if (subject.length < 10 || subject.length > 300) {
                alert("subject must be 10-300 character width");
                name.focus();
            } else if (msg.length < 5 || msg.length > 1000) {
                alert("message must be 5-1000 character width");
                name.focus();
            } else {
                alert("thank you for your valuable feedback");
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
                <li><a href="contactnew.php"><i class="fas fa-address-book"></i>Contact</a></li>
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
            <div class="wrapper2">
                <form action="" method="post">
                    <div class="contact-form">
                        <div class="title">Contact US</div>
                        <div class="alert"></div>
                        <div class="input-fields">
                            <div class="items">
                                <label for="name" class="label">name</label>
                                <input id="name" name="name" placeholder="enter your name" type="text" class="input">
                            </div>
                            <div class="items">
                                <label for="mail" class="label">email</label>
                                <input id="mail" name="email" placeholder="enter your mail id" type="email" class="input">
                            </div>
                            <div class="items">
                                <label for="subject" class="label">subject</label>
                                <input id="subject" name="subject" placeholder="subject" type="text" class="input">
                            </div>
                            <div class="items">
                                <label for="msg" class="label">message</label>
                                <textarea id="msg" class="text-area"></textarea>
                            </div>
                            <p>you will receive a conformation mail</p>
                        </div>
                        <div class="btn" onclick="validation()">send</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>