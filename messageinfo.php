<?php
    //Data Entry
    
      //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
   
    if($conn->connect_error){
          die('Connection Failed! :' .$conn->connect_error);
      }


    
    else {
        echo
        "<script>alert('Processing the information');</script>";
        include 'messageRetrieval.php';
         
    }
?>
