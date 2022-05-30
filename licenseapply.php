<?php
    //Data Entry
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $gender =$_POST['gender'];
    $dob =$_POST['dob'];
    $address =$_POST['address'];
    $city =$_POST['city'];
    $pin =$_POST['pin'];
    $state =$_POST['state'];
    $license =$_POST['license'];
    $vehicle =$_POST['vehicle'];



    //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
    if($conn->connect_error){
        die('Connection Failed! :' .$conn->connect_error);
    }
    
    else{
        $stmt = $conn->prepare("insert into licenseregister(firstname,lastname,email,mobile,gender,dob,address,city,pin,state,license,vehicle)values(?, ?, ? , ?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssssss",$firstname,$lastname, $email,$mobile,$gender,$dob,$address,$city,$pin,$state,$license,$vehicle);
        $execval= $stmt->execute();
        echo $execval;

        echo
        "<script>alert('Query send succesfully');</script>";
        include 'thankupage.html';

        $stmt->close();
        $conn->close();
    }
?>
