<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="isecure";

 $con=mysqli_connect($servername,$username,$password,$databasename);

 if(!$con){
     die("connection failed".mysqli_connect_error());
 }
 else{
     "Connection Done Sussefully";
 }
?>