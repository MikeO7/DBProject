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

CREATE TABLE Employees ( 
        EmployeeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        LastName VARCHAR(255),
        FirstName VARCHAR(255),
        JobTitle VARCHAR(255),
        ReportsTo VARCHAR(255), -- FK????
        MobilePhone VARCHAR(255),
        Email VARCHAR(255),
        Address VARCHAR(255),
        City VARCHAR(255),
        Country VARCHAR(255),
        State VARCHAR(255),
        PostalCode INT(255)
       );

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
        SalesRepId INT,
        FOREIGN KEY(SalesRepId) REFERENCES Employees(EmployeeId)
       );

CREATE TABLE Products ( 
        ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255),
        Description VARCHAR(1000),
        SuggestedUnitPrice NUMERIC(15,2), 
        BuyUnitPrice NUMERIC(15,2), 
        UnitsInStock INT(255)
       );

CREATE TABLE Orders ( 
        OrderId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        CustomerId INT,
        EmployeeId INT,
        OrderedDate DATE, 
        RequiredDate DATE, 
        OrderStatus INT, -- ??????
        ShippedDate Date,
        ShipperID VARCHAR(30),
        ShipToName VARCHAR(30),
        ShipToAddress VARCHAR(30),
        ShiToCity VARCHAR(30),
        ShiptTCountry VARCHAR(30),
        ShipToPostalCode VARCHAR(5),
        FOREIGN KEY(CustomerId) REFERENCES Customers(CustomerId),
        FOREIGN KEY(EmployeeId) REFERENCES Employees(EmployeeId)
       );

CREATE TABLE Invoices ( 
        InvoiceId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        OrderId VARCHAR(30),
        InvoiceDate DATE
       );

CREATE TABLE ProductDetails ( 
        ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        MoreDescription VARCHAR(1000) 
       );

CREATE TABLE Shippers ( 
        ShipperId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        CompanyName VARCHAR(30),
        ContactName VARCHAR(30),
        ContactPhone VARCHAR(10) 
       );

CREATE TABLE Payments ( 
        PrderId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        PaymentDate Date,
        Amount NUMERIC(15,2)
       );

CREATE TABLE Supplies ( 
        SupplierId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        CompanyName VARCHAR(30),
        ContactName VARCHAR(30),
        PhoneMobile VARCHAR(30),
        Email VARCHAR(30),
        Address VARCHAR(30),
        City VARCHAR(30),
        PostalCode VARCHAR(5)
       );

CREATE TABLE ProductSupplier ( 
        ProductCode INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        SupplierId VARCHAR(30),
        Notes VARCHAR(1000)
       );


