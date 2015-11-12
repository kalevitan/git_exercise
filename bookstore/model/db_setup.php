<?php

require_once('db.php');

$query = 'CREATE DATABASE publications;';

$query = "GRANT ALL ON publications.* TO 'bookstore_db'@'localhost'
IDENTIFIED BY 'pa55word';";

$query .= 'USE publications;';

$query .= "CREATE TABLE classics (
 author VARCHAR(128),
 title VARCHAR(128),
 type VARCHAR(16),
 year CHAR(4)) ENGINE MyISAM;";

 $query .= "INSERT INTO classics(author, title, type, year)
  VALUES('Mark Twain','The Adventures of Tom Sawyer','Fiction','1876');
 INSERT INTO classics(author, title, type, year)
  VALUES('Jane Austen','Pride and Prejudice','Fiction','1811');
 INSERT INTO classics(author, title, type, year)
  VALUES('Charles Darwin','The Origin of Species','Non-Fiction','1856');
 INSERT INTO classics(author, title, type, year)
  VALUES('Charles Dickens','The Old Curiosity Shop','Fiction','1841');
 INSERT INTO classics(author, title, type, year)
  VALUES('William Shakespeare','Romeo and Juliet','Play','1594');";

$statement = $db->exec($query);
