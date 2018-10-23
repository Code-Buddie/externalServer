CREATE DATABASE userDetails;

use userDetails;
-- GH
DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	username VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	date TIMESTAMP
);

DROP TABLE IF EXISTS
    `returningUsers`;
CREATE TABLE returningUsers(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    visits INT(4) NULL DEFAULT '2',
    visitTimes VARCHAR(1024) NOT NULL DEFAULT ''
);

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `user` varchar(16) DEFAULT NULL,
  `pass` varchar(512) DEFAULT NULL,
  KEY `user` (`user`(6))
);

INSERT INTO `admin` (`user`, `pass`)
VALUES
	('ziwa','9e65cf7151d4c461a93ca9c227477bcd45515d84'),
	('admin','9e65cf7151d4c461a93ca9c227477bcd45515d84');