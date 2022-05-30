<?php
    //Data Entry
    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPassword'];

      //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
   
    if($conn->connect_error){
          die('Connection Failed! :' .$conn->connect_error);
      }


    if($adminName == 'rtoAdmin' && $adminPassword == 'rto411052Pune')
    {
        echo
        "<script>alert('Admin successfully logged in');</script>";
        //include 'retrieval_data.php';
         include 'adminButtons.html';
    }
    

  else  {
    echo
    "<script>alert('YOU ARE NOT ADMIN , UNAUTHORIZED ACCESS PROHIBITED');</script>";
    include 'rtoHome.html';
}


   
?>
