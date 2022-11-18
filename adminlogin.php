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
if (isset($_POST['login'])) {
    $name = mysqli_real_escape_string($conn, $_POST['loginid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pass']);

    $name = stripcslashes($name);
    $pwd = stripcslashes($pwd);

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE 
    loginid='$name' AND pass='$pwd' ")


    or die("Database failed to connect" . mysqli_error());
    $row = mysqli_fetch_array($result);
    if ($row['loginid'] == $name && $row['pass'] == $pwd)
     {
       
readfile('admincategory.html');
    } else {
        echo " <script>alert('failed to login!!Username or password incorrect') ;</script>";
        echo "<script>location.href='adminlogin.html'</script>";
    }
}
mysqli_close($conn);

?>