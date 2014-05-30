DROP DATABASE IF EXISTS IT;

CREATE DATABASE IT;

USE IT;


DROP TABLE IF EXISTS Customers;
DROP TABLE IF EXISTS Employees;
DROP TABLE IF EXISTS Products;
DROP TABLE IF EXISTS Orders;
DROP TABLE IF EXISTS Invoices;
DROP TABLE IF EXISTS ProductDetails;
DROP TABLE IF EXISTS OrderLines;
DROP TABLE IF EXISTS Shippers;
DROP TABLE IF EXISTS Payments;
DROP TABLE IF EXISTS Supplies;
DROP TABLE IF EXISTS ProductSupplier;



CREATE TABLE Customers (
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
         SalesRepId INT --FK
       );


CREATE TABLE Employees (
         empolyeeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         LastName VARCHAR(30),
         FirstName VARCHAR(30),
         jobTitle VARCHAR(10),
         ReportsTo VARCHAR(30), --FK????
         MobilePhone VARCHAR(30),
         Email VARCHAR(30),
         Address VARCHAR(30),
         City VARCHAR(30),
         Country VARCHAR(30),
         State VARCHAR(2),
         PostalCode(5)
       );

CREATE TABLE Products (
         ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Name VARCHAR(30),
         Description VARCHAR(400),
         SuggestedUnitPrice DOUBLE(2.2), 
         BuyUnitPrice DOUBLE(2.2), 
         UnitsInStock INT
       );


