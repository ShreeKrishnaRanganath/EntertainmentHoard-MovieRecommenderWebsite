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
?>
<html>
    <head>
<title>Movie</title>
<link rel="stylesheet" href="http://localhost/dbmsminiproject/css/8.css">
<style>
    body
    {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.60),
            rgba(0, 0, 0, 0.6)
          ),
          url(http://localhost/dbmsminiproject/images/musicis.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</head>
<body>
<div class="container">    
<?php
if (isset($_POST['submit'])) 
{
    $data = mysqli_query($conn, "SELECT * FROM music");
    $arr = mysqli_fetch_array($data);
    $gen = $_POST['radio'];
    if($gen == "1")
    {
$sql = "SELECT * from music where genre='Carnatic'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Song Name</th><th>Genre</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Song Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}
    if($gen == "2")
    {
$sql = "SELECT * from music where genre='Hindustani'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Song Name</th><th>Genre</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Song Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}

if($gen == "3")
    {
$sql = "SELECT * from music where genre='Indian'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Song Name</th><th>Genre</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Song Name'] . "</td>
    <td>" . $row['Genre'] . "</td> 
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}

if($gen == "4")
    {
$sql = "SELECT * from music where genre='Bollywood'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Song Name</th><th>Genre</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Song Name'] . "</td>
    <td>" . $row['Genre'] . "</td>   
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}
}
?>
</div>
<div class="back">
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/musicclass.html">BACK</a></button>
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/index.html">Logout</a></button>
</div>

</body>
</html>