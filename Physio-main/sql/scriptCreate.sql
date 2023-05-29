create database  Physio;

USE Physio;

CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(50),
  userPass VARCHAR(50),
  nameC VARCHAR(50)
);

CREATE TABLE userForm (
  id INT AUTO_INCREMENT PRIMARY KEY,
  idUser VARCHAR(50),
  nameC VARCHAR(50),
  age VARCHAR(3),
  city VARCHAR(50),
  email VARCHAR(100),
  pathology VARCHAR(200),
  service VARCHAR(200),
  observations VARCHAR(500)
);

insert into user (userName, userPass, nameC) values ("ADMIN", "123456", "ADMINISTRADOR");