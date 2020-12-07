<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $enc_pass = password_hash($pass, PASSWORD_DEFAULT);

    $con = new mysqli('localhost','root','','users');
    if($con->connect_error)
    {
        die('Connection Failed : '.$con->connect_error);
    }
    else
    {
        $stmt = $con->prepare("INSERT into `details`(`fname`,`lname`, `email`, `password`) VALUES('$fname', '$lname', '$mail', '$enc_pass')");
        $stmt->execute();
        echo"<center>Registered Successfully</center>";
        echo "<center><a href='login.php'>Click Here</a>to login</center>";
        $stmt->close();
        $con->close();   
    }
?>