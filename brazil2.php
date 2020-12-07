<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $no = $_POST['no'];
    $from = $_POST['from'];
    $adult = $_POST['nu'];
    $child = $_POST['ch'];
    $state = $_POST['state'];

    if(!is_numeric($child))
    {
        $child = 0;
    }
    $price = $adult * 220500 + $child * 150000;

    $con = new mysqli('localhost','root','','booking_aus_7/8');

    if (($name == '' || $mail == '' || $no == "" ) || ($adult == "" || !is_numeric($adult)) || (strlen($no) != 10) || ($mail == '') || (strlen($name) < 3 || strlen($name) > 30))  {
        echo "enter valid details";
        header('location: brazil 7-8.php');
    }
    if($con->connect_error)
    {
        die('Connection Failed : '.$con->connect_error);
    }
    else
    {
        if ((($name == '' || $mail == '' || $no == "") || ($adult == "" || !is_numeric($adult) ) || (strlen($no) != 10) || ($mail == '') || (strlen($name) < 3 || strlen($name) > 30)))  {
        }
        else{
        $stmt = $con->prepare("INSERT into `brazil-7/8`(`name`,`email`, `contact`, `date`,`adult`,`child`, `price`, `state`) VALUES('$name', '$mail', '$no', '$from','$adult', '$child', '$price', '$state')");
        $stmt->execute();
        echo"<center><h2>Your order is successfully placed</h2></center>";
        echo"<br/>NAME : $name<br/>";
        echo"<br/>E-MAIL : $mail<br/>";
        echo"<br/>CONTACT NO : $no<br/>";
        echo"<br/>DATE OF TRAVEL: $from<br/>";
        echo"<br/>ADULT : $adult<br/>";
        echo"<br/>CHILD : $child<br/>";
        echo"<br/>STATE : $state<br/>";
        echo"<br/>PRICE : $price<br/>";
        echo"<center><BR/><B>YOU WILL RECEIVE A CONFORMATION CALL IN YOUR GIVEN PHONE NUMBER</B><BR/></CENTER>";
        echo "<center><b><br/><a href='homenew.php'>Click Here</a> to go to home page</b></center>";
        $stmt->close();
        $con->close();
        }
    }
    if(isset($_REQUEST['ok']))
    {
        if ((($name == '' || $mail == '' || $no == "") || ($adult == "" || !is_numeric($adult) ) || (strlen($no) != 10) || ($mail == '') || (strlen($name) < 3 || strlen($name) > 30)))  {
        }
        else{
        $xml = new DOMDocument("1.0","UTF-8");
        $xml->load("b2.xml");

        $rootTag = $xml->getElementsByTagName ("document")->item(0);
        
        $dataTag = $xml->createElement("data");

        $name = $xml->createElement("Name",$_REQUEST['name']);
        $mail = $xml->createElement("E-Mail",$_REQUEST['mail']);
        $no = $xml->createElement("Contact_no",$_REQUEST['no']);
        $from = $xml->createElement("Date",$_REQUEST['from']);
        $adult = $xml->createElement("Adult",$_REQUEST['nu']);
        $child = $xml->createElement("Child",$_REQUEST['ch']);
        $state = $xml->createElement("State",$_REQUEST['state']);
        $price = $xml->createElement("Price",$price);
        
        $dataTag->appendChild($name);
        $dataTag->appendChild($mail);
        $dataTag->appendChild($no);
        $dataTag->appendChild($from);
        $dataTag->appendChild($adult);
        $dataTag->appendChild($child);
        $dataTag->appendChild($state);
        $dataTag->appendChild($price);

        $rootTag->appendChild($dataTag);

        $xml->save("b2.xml");
        }
    }
?>