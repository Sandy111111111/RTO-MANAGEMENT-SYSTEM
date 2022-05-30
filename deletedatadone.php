
<?php
$email =$_POST['email'];
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

$sql = "DELETE FROM licenseregister WHERE email='$email'";
//$sql = "SELECT firstname,lastname,email,mobile,gender,dob,address,city,pin,state,license,vehicle FROM licenseregister";
$result = mysqli_query($conn, $sql);
echo
        "<script>alert('deleted successfully');</script>";
        include 'thankupage.html';


mysqli_close($conn);
?>
