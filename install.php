<?php
$servername = "localhost";
$username = "root";
$password = "root";

//crete connection
$conn=new PDO("mysql:host=$servername",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS PackLunch";
$conn->exec($sql);
echo ("database created successfully<br>");
$sql = "USE PackLunch";
$conn->exec($sql);
echo("Database selected seccessfully<br>");
$stmt=$conn->prepare("DROP TABLE IF EXISTS Tbluser;
CREATE TABLE Tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Forename VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
House VARCHAR(30) NOT NULL,
Year INT (2) NOT NULL,
Balance DECIMAL(5,2) NOT NULL,
Password VARCHAR(200) NOT NULL,
Role TINYINI (1) NOT NULL,
Username VARCHAR(30) NOT NULL)
");
$stmt->execute();
echo("Table Tblusers created successfully<br>")

$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblfood;
CREATE TABLE Tblfood
(foodID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Catagory VARCHAR(30) NOT NULL,
Stocklevel INT (2) NOT NULL,
Price DECIMAL(5,2) NOT NULL)
");
$stmt->execute();
echo("Table Tblfood created successfully<br>")
?>
