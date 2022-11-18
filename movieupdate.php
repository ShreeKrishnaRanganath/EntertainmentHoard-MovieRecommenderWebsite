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
 $name = $_POST['moviename'];
 $genre = $_POST['genre'];
 $date = $_POST['releasedate'];
 $director = $_POST['director'];
 $lead = $_POST['leadrole'];
 $language = $_POST['language'];
 $q = " update `movie` set `id`=$id, `Movie Name`='$name', `Genre`='$genre', `Release Date`='$date', `Director`='$director', `Lead Role`='$lead', `Language`='$language' where `id`=$id  ";

 $query = mysqli_query($conn,$q);

 header('location:movieedit.php');
 }

?>


<html>
<head>
 <title>movie</title>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body
    {
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/movieupdate.jpg);
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

 <label> Movie Name </label>
 <input type="text" name="moviename" class="form-control"> <br>
 <label> Genre </label>
 <input type="text" name="genre" class="form-control"> <br>
 <label> Release Date </label>
 <input type="date" name="releasedate" class="form-control"> <br>
 <label> Director </label>
 <input type="text" name="director" class="form-control"> <br>
 <label> Lead Role </label>
 <input type="text" name="leadrole" class="form-control"> <br>
 <label> Language </label>
 <input type="text" name="language" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>