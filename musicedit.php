<html>
<head>
 <title>music</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    <style>
body
{
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/musicedit.jpg);
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
 <h1 class="text-warning text-center" > Edit Music </h1>
 <br>
 <div>
   <button type="button" class="btn btn-outline-secondary"><a href="musicadd.html">Add New Song</a></button>
   <button type="button" class="btn btn-outline-secondary"><a href="admincategory.html">Home Page</a></button>
 </div>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Song Name </th>
 <th> Genre </th>
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
 $q = "select * from music ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Song Name'];  ?> </td>
 <td> <?php echo $res['Genre'];  ?> </td>
 <td> <?php echo $res['Language'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="http://localhost/dbmsminiproject/musicdelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="http://localhost/dbmsminiproject/musicupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>


</body>
</html>