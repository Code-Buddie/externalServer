CREATE DATABASE userDetails;

use userDetails;
-- GH
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    date TIMESTAMP
);

