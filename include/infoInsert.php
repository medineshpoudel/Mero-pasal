<?php
include_once('connection.php');

// $productID= $_GET[''];
$category = $_GET['category'];
$shopName= $_GET['shopName'];
$phNo= $_GET['contact'];
$email= $_GET['email'];
$location= $_GET['location'];
$website= $_GET['website'];
$regNo = $_GET['regNo'];


$sql = "INSERT INTO shopInfo(regNo,shopName,contact,email,website,category) VALUES('$regNo','$shopName','$phNo','$email','$location','$website');";

mysqli_query($conn,$sql);

header('Location: ../retailerHome/index.php');