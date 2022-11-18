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

$id = $_GET['id'];

$q = " DELETE FROM `movie` WHERE id = $id ";

mysqli_query($conn, $q);
header('location:movieedit.php');

?>