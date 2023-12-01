drop schema if exists group2_Candy;
create database group2_Candy;
use group2_Candy;

create table CandyProducts (
    productID INT PRIMARY KEY AUTO_INCREMENT,
    productName VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    imageURL VARCHAR(255)
);

create table orderLineItem (
    candyID INT AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    imageURL VARCHAR(255),
    quantity INT NOT NULL,
    totalPrice DECIMAL(10, 2) NOT NULL
);

create table User (
    userID INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    -- TODO: Make password encrypted.
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    firstName VARCHAR(255),
    lastName VARCHAR(255)
);

-- TODO: Password encryption on User table