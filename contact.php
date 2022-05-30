<?php
    //Data Entry
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    



    //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
    if($conn->connect_error){
        die('Connection Failed! :' .$conn->connect_error);
    }
    
    else{
        $stmt = $conn->prepare("insert into contacttable(name,email,subject,message)values(?, ?, ? , ?)");
        $stmt->bind_param("ssss",$name, $email,$subject,$message);
        $execval= $stmt->execute();
        echo $execval;

        echo
        "<script>alert('Query send succesfully');</script>";
        include 'rtoHome.html';

        $stmt->close();
        $conn->close();
    }
?>
