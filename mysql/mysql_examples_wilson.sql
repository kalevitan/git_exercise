SELECT * FROM classics WHERE type = "fiction";

SELECT author FROM classics WHERE type ="fiction";

SELECT title FROM classics WHERE year > 1800;

SELECT type FROM classics WHERE author = "Mark Twain";

SELECT * FROM classics WHERE year < 2000;

INSERT INTO classics(author, title, type, year)
 VALUES('Jim Bob','Phun with PHP and MySQL','Educational','2015');

INSERT INTO classics(author)
 VALUE('Alice Smith');

INSERT INTO classics(title)
 VALUES('My Book');

INSERT INTO classics(type)
 VALUES('non-fiction');

INSERT INTO classics(year)
 VALUES(2000);

UPDATE classics SET author='Jane Doe'WHERE year = 2000;

UPDATE classics SET year = 2001 WHERE title ='My Book';

UPDATE classics SET title= 'Testing' WHERE author = 'Alice Smith';

UPDATE classics SET type= 'science' WHERE author = 'Alice Smith';

UPDATE classics SET title= 'My Book' WHERE author = 'Jane Doe';

DELETE FROM classics WHERE year = 2000;

DELETE FROM classics WHERE title = "My Book";

DELETE FROM classics WHERE type= 'fiction';

DELETE FROM classics WHERE year is NULL;

DELETE FROM classics WHERE author = 'Jim Bob';