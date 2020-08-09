CREATE DATABASE MeroPasal;
USE MeroPasal;

CREATE TABLE multiuserlogin
(
    usertype VARCHAR(255),
    username VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255),
    email VARCHAR(255)
);
CREATE TABLE Product
(
    productID INT
    AUTO_INCREMENT,
    productName VARCHAR
    (255),
    category VARCHAR
    (255),
    productImage LONGBLOB,
    price VARCHAR
    (255),
    shopName VARCHAR
    (255),
    location VARCHAR
    (255),
    remarks VARCHAR
    (255),
    PRIMARY KEY
    (productID)
);

    CREATE TABLE ShopInfo
    (
        regNo VARCHAR(20) PRIMARY KEY,
        shopName VARCHAR(255),
        contact VARCHAR(10),
        email VARCHAR(20),
        website VARCHAR(30),
        category VARCHAR(20)
    );
