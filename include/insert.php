<?php
include_once('connection.php');

// $productID= $_GET[''];
$productName= $_GET['productName'];
$productImage= $_GET['productImage'];
$shopName= $_GET['shopName'];
$location= $_GET['location'];
$remarks= $_GET['remarks'];
$price = $_GET['price'];
$category = $_GET['category'];

$sql = "INSERT INTO PRODUCT(productName,category,productImage,price,shopName,location,remarks) VALUES('$productName','$category','$productImage','$price','$shopName','$location','$remarks');";

mysqli_query($conn,$sql);

header('Location: ../retailerHome/index.php');