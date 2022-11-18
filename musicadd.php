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
$genre = $_POST['genre'];
$lang = $_POST['language'];

    $insert = mysqli_query($conn,"INSERT INTO `music`(`Song Name`, `Genre`,`Language`) VALUES ('$name','$genre','$lang')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo " <script>alert('Records Saved Successfully') ;</script>";
        header('location:musicedit.php');
    }
}

mysqli_close($conn);