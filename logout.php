<?php
   session_start();
   unset($_SESSION["loginid"]);
   unset($_SESSION["password"]);
   echo " <script>alert('Logged out Successfully!!') ;</script>";
   header('Refresh: 0.1; URL = index.html');
?>
