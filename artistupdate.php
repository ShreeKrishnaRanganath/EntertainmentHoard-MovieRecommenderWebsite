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
 $date = $_POST['dob'];
 $age = $_POST['age'];
 $language = $_POST['language'];
 $q = " update `artist` set `id`=$id, `Name`='$name', `Date Of Birth`='$date', `Age`='$age', `Language`='$language' where `id`=$id  ";

 $query = mysqli_query($conn,$q);

 header('location:artistedit.php');
 }

?>


<html>
<head>
 <title>Artist</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body
    {
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/artistupdate.jpg);
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
 <h1 class="text-white text-center">  Update Artist Details </h1>
 </div><br>

 <label> Name </label>
 <input type="text" name="name" class="form-control"> <br>
 <label> Date Of Birth </label>
 <input type="date" name="dob" class="form-control"> <br>
 <label> Age </label>
 <input type="text" name="age" class="form-control"> <br>
 <label> Language </label>
 <input type="text" name="language" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>