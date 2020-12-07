<?php   
    include('new_login_connection.php');  
    $email = $_POST['email1'];  
    $password = $_POST['password1'];  
       
    $enc_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "SELECT email ,fname , password from details where email ='$email'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result);
    if($row>0)  
    {
        if(password_verify($password,$data['password']))
        {
            $username = $data['fname'];
            session_start();
            if(isset($_POST['ch1']))
            {
                setcookie("user",$email, time()+1800);
                setcookie("pass",$password, time()+1800);
            }
            $_SESSION['user'] = $username;
            header("Location: homenew.php");    
        }
        else{
            echo '<center>invalid user name or password <br/></center> ';
            echo '<center><a href ="login.php">click here</a> to go back to login page</center>';
        }
    }
    else
    {
        echo 'Failed';
    }
?> 