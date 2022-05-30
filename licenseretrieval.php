<!DOCTYPE html>
<html>
<body>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'rto';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname,lastname,email,mobile,gender,dob,address,city,pin,state,license,vehicle FROM licenseregister";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo  " FirstName: " . $row["firstname"]. "<br><br>Lastname: " . $row["lastname"]. "<br><br> Email:" .$row["email"] . "<br><br> Mobile:" .$row["mobile"] . "<br><br> Gender:" .$row["gender"] . "<br><br> DOB:" .$row["dob"] . "<br><br> Address:" .$row["address"] . "<br><br> City:" .$row["city"] . "<br><br> Pin:" .$row["pin"] . "<br><br> State:" .$row["state"] . "<br><br> License:" .$row["license"] . "<br><br> Vehicle Type:" .$row["vehicle"] ; 
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
