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

 if(isset($_POST['submit'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $genre = $_POST['genre'];
 $language = $_POST['language'];
 $q = " update `music` set `id`=$id, `Song Name`='$name', `Language`='$language' where `id`=$id  ";

 $query = mysqli_query($conn,$q);

 header('location:musicedit.php');
 }

?>


<html>
<head>
 <title>Music</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body
    {
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/musicupdate.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}
.card
{
  background-color: rgba(0, 0, 0, 0.3);
}
.card label{
  color: white;
}

  </style>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Movie </h1>
 </div><br>

 <label> Song Name </label>
 <input type="text" name="name" class="form-control"> <br>
 <label> Genre </label>
 <input type="text" name="genre" class="form-control"> <br>
 <label> Language </label>
 <input type="text" name="language" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>