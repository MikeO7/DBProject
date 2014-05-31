CREATE DATABASE IF NOT EXISTS Test;


USE Test;


DROP TABLE IF EXISTS Customers;
DROP TABLE IF EXISTS Employees;
DROP TABLE IF EXISTS Products;
DROP TABLE IF EXISTS Orders;
DROP TABLE IF EXISTS Invoices;
DROP TABLE IF EXISTS ProductDetails;
DROP TABLE IF EXISTS Shippers;
DROP TABLE IF EXISTS Payments;
DROP TABLE IF EXISTS Supplies;
DROP TABLE IF EXISTS ProductSupplier;



CREATE TABLE Customers ( -- good
         CustomerId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         CompanyName VARCHAR(30),
         ContactName VARCHAR(30),
         MobilePhone VARCHAR(10),
         Email VARCHAR(30),
         Address VARCHAR(30),
         City VARCHAR(30),
         State VARCHAR(30),
         Country VARCHAR(30),
         PostCode VARCHAR(5),
         SalesRepId INT 
       );


CREATE TABLE Employees ( -- good
         empolyeeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         LastName VARCHAR(30),
         FirstName VARCHAR(30),
         jobTitle VARCHAR(10),
         ReportsTo VARCHAR(30), -- FK????
         MobilePhone VARCHAR(30),
         Email VARCHAR(30),
         Address VARCHAR(30),
         City VARCHAR(30),
         Country VARCHAR(30),
         State VARCHAR(2),
         PostalCode INT(5)
       );

CREATE TABLE Products ( -- good
         ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Name VARCHAR(30),
         Description VARCHAR(1000),
         SuggestedUnitPrice NUMERIC(15,2), 
         BuyUnitPrice NUMERIC(15,2), 
         UnitsInStock INT
       );

CREATE TABLE Orders ( -- good
         OrderId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         CustomerId VARCHAR(30), -- FK
         EmployeeId VARCHAR(30), -- FK
         OrderedDate DATE, 
         RequiredDate DATE, 
         OrderStatus INT, -- ??????
         ShippedDate Date,
         ShipperID VARCHAR(30),
         ShipToName VARCHAR(30),
         ShipToAddress VARCHAR(30),
         ShiToCity VARCHAR(30),
         ShiptTCountry VARCHAR(30),
         ShipToPostalCode VARCHAR(5)
       );

CREATE TABLE Invoices ( -- good
         InvoiceId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         OrderId VARCHAR(30),
         InvoiceDate DATE
       );

CREATE TABLE ProductDetails ( -- good
         ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         MoreDescription VARCHAR(1000) 
       );

CREATE TABLE Shippers ( -- good
         ShipperId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         CompanyName VARCHAR(30),
         ContactName VARCHAR(30),
         ContactPhone VARCHAR(10) 
       );

CREATE TABLE Payments ( -- good
         PrderId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         PaymentDate Date,
         Amount NUMERIC(15,2)
       );

CREATE TABLE Supplies ( -- good
         SupplierId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         CompanyName VARCHAR(30),
         ContactName VARCHAR(30),
         PhoneMobile VARCHAR(30),
         Email VARCHAR(30),
         Address VARCHAR(30),
         City VARCHAR(30),
         PostalCode VARCHAR(5)
       );

CREATE TABLE ProductSupplier ( -- good
         ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         SupplierId VARCHAR(30),
         Notes VARCHAR(1000)
       );


