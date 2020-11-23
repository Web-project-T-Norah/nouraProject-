<?php
$con=mysqli_connect("localhost" , "root" , "" , "plantsdb")
or die( mysqli_connect_error());
//echo "conncted<br>";


$sql=mysqli_query($con,"CREATE TABLE IF NOT EXSITS PlantsUT(
Id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (Id),
Username VARCHAR(30)NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(50) NOT NULL,
User_type VARCHAR(20) NOT NULL
)"); 
//or die( mysqli_connect_error());
//echo "table created";

$sql= mysqli_query($con,"INSERT INTO PlantsUT (Username,Email,Password,User_type) VALUES
('Salam','saloo338@hotmail.com','90909090','admin')");







?>








