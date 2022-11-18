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
<title>artist</title>
<link rel="stylesheet" href="http://localhost/dbmsminiproject/css/8.css">
<style>
    body
    {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.60),
            rgba(0, 0, 0, 0.6)
          ),
          url(http://localhost/dbmsminiproject/images/artistdis.jpg);
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
    $data = mysqli_query($conn, "SELECT * FROM artist");
    $arr = mysqli_fetch_array($data);
    $gen = $_POST['radio'];
    if($gen == "1")
    {
$sql = "SELECT * from artist where language='Tamil'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Name</th><th>Date Of Birth</th><th>Age</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Name'] . "</td>
    <td>" . $row['Date Of Birth'] . "</td>
    <td>" . $row['Age'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}
    if($gen == "2")
    {
        $sql = "SELECT * from artist where language='Telugu'";
        $result = mysqli_query($conn, $sql);
        echo "<table><thead><tr><th>Name</th><th>Date Of Birth</th><th>Age</th><th>Language</th></tr></thead>";
        while ($row = mysqli_fetch_array($result))
         {
            echo "<tr><td>" . $row['Name'] . "</td>
            <td>" . $row['Date Of Birth'] . "</td>
            <td>" . $row['Age'] . "</td>
            <td>" . $row['Language'] . "</td>
            </tr>";
         }
}

if($gen == "3")
    {
        $sql = "SELECT * from artist where language='Kannada'";
        $result = mysqli_query($conn, $sql);
        echo "<table><thead><tr><th>Name</th><th>Date Of Birth</th><th>Age</th><th>Language</th></tr></thead>";
        while ($row = mysqli_fetch_array($result))
         {
            echo "<tr><td>" . $row['Name'] . "</td>
            <td>" . $row['Date Of Birth'] . "</td>
            <td>" . $row['Age'] . "</td>
            <td>" . $row['Language'] . "</td>
            </tr>";
         }
}

if($gen == "4")
    {
        $sql = "SELECT * from artist where language='English'";
        $result = mysqli_query($conn, $sql);
        echo "<table><thead><tr><th>Name</th><th>Date Of Birth</th><th>Age</th><th>Language</th></tr></thead>";
        while ($row = mysqli_fetch_array($result))
         {
            echo "<tr><td>" . $row['Name'] . "</td>
            <td>" . $row['Date Of Birth'] . "</td>
            <td>" . $row['Age'] . "</td>
            <td>" . $row['Language'] . "</td>
            </tr>";
         }
}
}
?>
</div>
<div class="back">
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/artistclass.html">BACK</a></button>
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/index.html">Logout</a></button>
</div>

</body>
</html>