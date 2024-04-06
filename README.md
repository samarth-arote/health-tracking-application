use the xampp server to run code.

     step 1 : download the code or copy paste.
     step 2 : download the xampp server and start apache and mysql.
     step 3 : copy online-voting-system-using-php folder and paste into htdocs folder in xampp.
     step 4 : goto default browser and type "http://localhost/health-tracking-application/login.html"

Note:- in phpmyadmin you create following database or tables

Database name:- 

     userdb 
Query:-

     create database userdb;


Query:- 

     CREATE TABLE userinfo (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    age INT(255) NOT NULL,
    dob DATE NOT NULL,
    weight INT(11) NOT NULL,
    height INT(11) NOT NULL
    );

     CREATE TABLE users (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    );
