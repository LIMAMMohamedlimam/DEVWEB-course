CREATE DATABASE  IF NOT EXISTS `test_db` ;

USE  `test_db`;

CREATE TABLE user(
  id INT  AUTO_INCREMENT PRIMARY KEY ,
  prénom  VARCHAR (50) ,
  nom     VARCHAR (50), 
  age     INT,
  email   VARCHAR (128) 
) ;

INSERT INTO user (prénom, nom, age, email) VALUES
('Mohamed Limam', 'Limam', 25, 'limammohamm@cytech.fr'),
('Ayoub', 'SEMGAT',23, 'Semgatayoub@cytech.fr');