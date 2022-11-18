<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "entertainment";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{		

$name = $_POST['name'];
$date = $_POST['dob'];
$age = $_POST['age'];
$language = $_POST['language'];

    $insert = mysqli_query($conn,"INSERT INTO `artist`(`Name`,`Date Of Birth`,`Age`,`Language`) VALUES ('$name','$date','$age','$language')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo " <script>alert('Records Saved Successfully') ;</script>";
        header('location:artistedit.php');
    }
}

mysqli_close($conn);