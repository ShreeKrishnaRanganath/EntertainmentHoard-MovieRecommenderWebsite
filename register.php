<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "entertainment";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_REQUEST['name'];
$loginid = $_REQUEST['loginid'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$insert = mysqli_query($conn,"INSERT INTO `user`(`Name`,`loginid`,`password`,`email`) VALUES ('$name','$loginid','$password','$email')");

    if(!$insert)
	{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}
else
{
	echo " <script>alert('Registered succesfully!! Login Now') ;</script>";
	include "index.html";
}

// Close connection
mysqli_close($conn);