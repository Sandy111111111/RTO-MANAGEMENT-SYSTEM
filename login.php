<?php
    //Data Entry
    $username = $_POST['username'];
    $password = $_POST['password'];

     //Database Connection
    $conn = new mysqli('localhost', 'root' , '', 'rto',3306 );
     if($conn->connect_error){
          die('Connection Failed! :' .$conn->connect_error);
      }
    $result = mysqli_query($conn, "SELECT * FROM rtosignupTable WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0)
    {
if($password == $row["password"])
{
    echo
    "<script>alert('successfully logged in');</script>";
    include 'rtoHome.html';
}
    
    else{
        echo
        "<script>alert('wrong password');</script>";
        include 'rtologin.html';
    }
}
else{
    echo
    "<script>alert('User not found ');</script>";
    include 'rtologin.html';
}

    //Database Connection
   
    
 /*   else{
        $stmt = $conn->prepare("insert into login_table(username, password)values(?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $execval= $stmt->execute();
        echo $execval;
        echo "login.html";
        $stmt->close();
        $conn->close();
    }*/
     
   
?>



