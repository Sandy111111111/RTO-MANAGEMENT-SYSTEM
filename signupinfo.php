<?php
    //Data Entry
    
      //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
   
    if($conn->connect_error){
          die('Connection Failed! :' .$conn->connect_error);
      }


    
    else {
        echo
        "<script>alert('Admin successfully logged in');</script>";
        include 'retrieval_data.php';
         
    }
?>
