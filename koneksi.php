<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "pendaftaran";
 $con     = new mysqli($hostname, $username, $pass, $db);


if($con==false){

  die("koneksi gagal". $con->connect_error);
 }

  

?>
