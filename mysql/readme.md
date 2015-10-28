# MySQL Examples

You've been asked to create a MySQL database for a local bookstore here in town. The database will store book information such as author, title, type and publishing year. Follow the steps to create your database via via shell access.

Create your publications database.

    CREATE DATABASE publications;

So let’s create a user who can access just the new publications database and all its objects, by entering the following (replacing the username jim and also the password pa55word with ones of your choosing):

    GRANT ALL ON publications.* TO 'jim'@'localhost'
    IDENTIFIED BY 'pa55word';

Now we need to select the publications database.

    USE publications;

Create our first table titled "classics".

    CREATE TABLE classics (
     author VARCHAR(128),
     title VARCHAR(128),
     type VARCHAR(16),
     year CHAR(4)) ENGINE MyISAM;

Describe the classics tables so that you can clarify the how the columns are set up.

    DESCRIBE classics;

Create your content using the "INSERT" clause.

    INSERT INTO classics(author, title, type, year)
     VALUES('Mark Twain','The Adventures of Tom Sawyer','Fiction','1876');
    INSERT INTO classics(author, title, type, year)
     VALUES('Jane Austen','Pride and Prejudice','Fiction','1811');
    INSERT INTO classics(author, title, type, year)
     VALUES('Charles Darwin','The Origin of Species','Non-Fiction','1856');
    INSERT INTO classics(author, title, type, year)
     VALUES('Charles Dickens','The Old Curiosity Shop','Fiction','1841');
    INSERT INTO classics(author, title, type, year)
     VALUES('William Shakespeare','Romeo and Juliet','Play','1594');

Type out and test 5 SQL statements for each of the following clauses: SELECT, UPDATE, INSERT and DELETE. Then copy/paste them into a file called mysql_examples_YOURNAME.sql. Here is one to get you started:

    SELECT * FROM classics;
