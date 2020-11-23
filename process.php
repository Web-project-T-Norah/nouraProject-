<?php

 $con= mysqli_connect("localhost","root","","UserPlants")
 or die( mysqli_connect_error());
/*
 mysqli_query($con,"CREATE TABLE UserTableOP (
 id INT NOT NULL AUTO_INCREMENT,
 PRIMARY KEY(id),
 username VARCHAR(20) NOT NULL,
 email VARCHAR(30) NOT NULL, 
 comment VARCHAR(200) NOT NULL)")
or die( mysqli_connect_error());
echo "Table created";
*/

$Username=$_POST['uname'];
$Email=$_POST['uemail'];
$Comment=$_POST['ucomment'];

mysqli_query($con,"INSERT INTO UserTableOP(username,email,comment) VALUES('$Username','$Email','$Comment')")
or die(mysqli_connect_error());

   echo "  !!! رأيك يهمنا شكراً لك   ".$Username;
   
?>