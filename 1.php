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
</head>
<body>
<div class="container">    
<?php
if (isset($_POST['submit'])) 
{
    $data = mysqli_query($conn, "SELECT * FROM MOVIE");
    $arr = mysqli_fetch_array($data);
    $gen = "1";
    if($gen == "1")
    {
$sql = "SELECT * from movie where genre='Romantic'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Movie Name</th><th>Genre</th><th>Release Date</th><th>Director</th><th>Lead Role</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Movie Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Release Date'] . "</td>
    <td>" . $row['Director'] . "</td>
    <td>" . $row['Lead Role'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}
    if($gen == "2")
    {
$sql = "SELECT * from movie where genre='Action'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Movie Name</th><th>Genre</th><th>Release Date</th><th>Director</th><th>Lead Role</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Movie Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Release Date'] . "</td>
    <td>" . $row['Director'] . "</td>
    <td>" . $row['Lead Role'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}

if($gen == "3")
    {
$sql = "SELECT * from movie where genre='Comedy'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Movie Name</th><th>Genre</th><th>Release Date</th><th>Director</th><th>Lead Role</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Movie Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Release Date'] . "</td>
    <td>" . $row['Director'] . "</td>
    <td>" . $row['Lead Role'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}

if($gen == "4")
    {
$sql = "SELECT * from movie where genre='Fiction'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Movie Name</th><th>Genre</th><th>Release Date</th><th>Director</th><th>Lead Role</th><th>Language</th></tr></thead>";
while ($row = mysqli_fetch_array($result))
 {
    echo "<tr><td>" . $row['Movie Name'] . "</td>
    <td>" . $row['Genre'] . "</td>
    <td>" . $row['Release Date'] . "</td>
    <td>" . $row['Director'] . "</td>
    <td>" . $row['Lead Role'] . "</td>
    <td>" . $row['Language'] . "</td>
    </tr>";
 }
}
}
?>
</div>
<div class="back">
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/movieclass.html">BACK</a></button>
    <button type="button"><span></span><a href="http://localhost/dbmsminiproject/index.html">Logout</a></button>
</div>

</body>
</html>