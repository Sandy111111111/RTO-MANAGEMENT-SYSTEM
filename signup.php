<?php
    //Data Entry
    $email =$_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];



    //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
    if($conn->connect_error){
        die('Connection Failed! :' .$conn->connect_error);
    }
    $duplicate = mysqli_query($conn , "SELECT * FROM rtosignupTable WHERE username = '$username' ");
    
    if(mysqli_num_rows($duplicate) > 0)
    {
        echo 
        "<script>alert('Username already taken, please enter differnt username');</script>";
        include 'rtosignup.html';
    }
    else{
        $stmt = $conn->prepare("insert into rtosignupTable(email,username,password)values( ?, ? , ?)");
        $stmt->bind_param("sss", $email,$username,$password);
        $execval= $stmt->execute();
        echo $execval;
      //  echo "<a href = 'C:\Users\hp\Downloads\rtologin.html'></a>";
      include 'rtologin.html';

        $stmt->close();
        $conn->close();
    }
?>
