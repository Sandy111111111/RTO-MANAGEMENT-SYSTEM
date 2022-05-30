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

$sql = "SELECT vehicleNo,ownerName,profession,area,state,pincode FROM vehicleregister_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  " Vehicle No " . $row["vehicleNo"]. "<br> Owner Name: " . $row["ownerName"]. "<br> Profession: " . $row["profession"]. "<br> Area: " . $row["area"]. "<br> State" . $row["state"]. "<br> Pincode" . $row["pincode"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
