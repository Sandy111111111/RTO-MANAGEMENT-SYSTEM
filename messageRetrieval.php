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

$sql = "SELECT name,email,subject,message FROM contacttable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  " Name " . $row["name"]. "<br> Email: " . $row["email"]. "<br> Subject: " . $row["subject"]. "<br> Message: " . $row["message"] ;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
