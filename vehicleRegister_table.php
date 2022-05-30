<?php
    //Data Entry
    $vehicleNo =$_POST['vehicleNo'];
    $ownerName= $_POST['ownerName'];
    $profession = $_POST['profession'];
    $area= $_POST['area'];
    $state= $_POST['state'];
    $pincode= $_POST['pincode'];


    //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
    if($conn->connect_error){
        die('Connection Failed! :' .$conn->connect_error);
    }
   
    else{
        $stmt = $conn->prepare("insert into vehicleregister_table(vehicleNo,ownerName,profession,area,state,pincode)values( ?, ? , ?,?,?,?)");
        $stmt->bind_param("ssssss", $vehicleNo,  $ownerName, $profession, $area,$state,$pincode);
        $execval= $stmt->execute();
        echo $execval;
      //  echo "<a href = 'C:\Users\hp\Downloads\rtologin.html'></a>";
      echo 
      "<script>alert('REGISTRATION IN PROGRESS....');</script>";

      include 'rtoHome.html';

        $stmt->close();
        $conn->close();
    }
?>
