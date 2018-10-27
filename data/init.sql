CREATE DATABASE userDetails;

use userDetails;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id       INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name     VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL,
  email    VARCHAR(50) NOT NULL,
  date     TIMESTAMP
);

DROP TABLE IF EXISTS
returningUsers;
CREATE TABLE returningUsers (
  id         INT(11) UNSIGNED                                                                                                                                                                                           AUTO_INCREMENT PRIMARY KEY,
  NAME       VARCHAR(50)   NOT NULL,
  username   VARCHAR(50) NOT NULL,
  email      VARCHAR(50) NOT NULL,
  visits     INT(4)      NULL                                                                                                                                                                                           DEFAULT '2',
  visitTimes VARCHAR(1024) NOT NULL                                                                                                                                                                                     DEFAULT ''
);

DROP TABLE IF EXISTS admin;
CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `admin` (`adminId`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(1, 'ziwa', '$2y$10$R1C3dmWAVITVsYIaKp0S7efudE5MiInelQczt.CsbmJBdczICKLna', 'ma@mail.com', 'Yes', NULL, 'No'),
(2, 'admin', '$2y$10$R1C3dmWAVITVsYIaKp0S7efudE5MiInelQczt.CsbmJBdczICKLna', 'admin@ziwa.cc', 'Yes', NULL, 'No');
