<html>
<head>
 <title>movie</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    <style>
body
{
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/movieedit.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}
.text-center
{
  color: white;
}

    </style>



</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Edit Movies </h1>
 <br>
 <div>
   <button type="button" class="btn btn-outline-secondary"><a href="movieadd.html">Add New Movie</a></button>
   <button type="button" class="btn btn-outline-secondary"><a href="admincategory.html">Home Page</a></button>
 </div>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Movie Name </th>
 <th> Genre </th>
 <th> Release Date </th>
 <th> Director </th>
 <th> Lead Role </th>
 <th> Language </th>
 <th> Update </th>
 <th> Delete </th>

 </tr >

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
 $q = "select * from movie ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Movie Name'];  ?> </td>
 <td> <?php echo $res['Genre'];  ?> </td>
 <td> <?php echo $res['Release Date'];  ?> </td>
 <td> <?php echo $res['Director'];  ?> </td>
 <td> <?php echo $res['Lead Role'];  ?> </td>
 <td> <?php echo $res['Language'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="http://localhost/dbmsminiproject/moviedelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="http://localhost/dbmsminiproject/movieupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>


</body>
</html>