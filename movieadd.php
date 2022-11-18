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

$name = $_POST['MovieName'];
$genre = $_POST['Genre'];
$date = $_POST['ReleaseDate'];
$director = $_POST['Director'];
$lead = $_POST['LeadRole'];
$language = $_POST['Language'];

    $insert = mysqli_query($conn,"INSERT INTO `movie`(`Movie Name`, `Genre`,`Release Date`,`Director`,`Lead Role`,`Language`) VALUES ('$name','$genre','$date','$director','$lead','$language')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo " <script>alert('Records Saved Successfully') ;</script>";
        header('location:movieedit.php');
    }
}

mysqli_close($conn);