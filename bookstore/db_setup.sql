/*****************************************
* Create the publications database
*****************************************/
DROP DATABASE IF EXISTS publications;
CREATE DATABASE publications;
USE publications;  -- MySQL command

-- create the classics table
CREATE TABLE classics (
  bookID INT(11) NOT NULL AUTO_INCREMENT,
  author VARCHAR(128) NOT NULL,
  title VARCHAR(128) NOT NULL,
  type VARCHAR(16) NOT NULL,
  year INT(4) NOT NULL,
  PRIMARY KEY (bookID)
);

-- insert data into the database
INSERT INTO classics VALUES
(1, 'Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction', 1876),
(2, 'Jane Austen', 'Pride and Prejudice', 'Fiction', 1811),
(3, 'Charles Darwin', 'The Origin of Species', 'Non-Fiction', 1856),
(4, 'Charles Dickens', 'The Old Curiosity Shop', 'Fiction', 1841),
(5, 'William Shakespeare', 'Romeo and Juliet', 'Play', 1594);

-- create the users and grant priveleges to those users
GRANT ALL
ON publications.*
TO 'bookstore_db'@'localhost'
IDENTIFIED BY 'pa55word';
