<html>
<head>
 <title>artist</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    <style>
body
{
  background-image: linear-gradient(
            rgba(0, 0, 0, 0.95),
            rgba(0, 0, 0, 0.97)
          ),
          url(http://localhost/dbmsminiproject/images/artistedit.jpg);
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
 <h1 class="text-warning text-center" > Edit Artist </h1>
 <br>
 <div>
   <button type="button" class="btn btn-outline-secondary"><a href="artistadd.html">Add New Artist details</a></button>
   <button type="button" class="btn btn-outline-secondary"><a href="admincategory.html">Home Page</a></button>
 </div>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Name </th>
 <th> Date Of Birth </th>
 <th> Age </th>
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
 $q = "select * from artist ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Date Of Birth'];  ?> </td>
 <td> <?php echo $res['Age'];  ?> </td>
 <td> <?php echo $res['Language'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="http://localhost/dbmsminiproject/artistdelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="http://localhost/dbmsminiproject/artistupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>


</body>
</html>