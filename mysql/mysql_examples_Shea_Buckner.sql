-- SELECT STATEMENTS

SELECT * FROM classics;

SELECT * FROM classics WHERE year > 1800;

SELECT * FROM classics WHERE title LIKE 'T%';

SELECT * FROM classics HAVING type = 'Fiction';

SELECT COUNT(*), year FROM classics GROUP BY year;

-- INSERT STATEMENTS

INSERT INTO classics (author, title, type, year)
VALUES ('Shea Buckner', 'HTML5 Resource Guide', 'Non-Fiction', '2015');

INSERT INTO classics (author, title, type, year)
VALUES ('FName LName', 'Book title', 'Fiction', '2000');

INSERT INTO classics (author, title, type, year)
VALUES ('Albert Torres', 'Awesome movie name', 'Movie', '2013');

INSERT INTO classics (author, title, type, year)
VALUES ('Travis Tinker', "Tinker's Guide", 'Non-Fiction', '2018');

INSERT INTO classics (author, title, type, year)
VALUES ('Billy Buckner', "Met's Baseball", 'Non-Fiction', '2015');

-- UPDATE STATEMENTS

UPDATE classics
SET year = 2020
WHERE type = 'Fiction';

UPDATE classics
SET type = 'fiction'
WHERE type = 'Fiction';

UPDATE classics
SET title = 'The Adventures of Tom Sawyer and Huckelberry Finn'
WHERE author = 'Mark Twain';

UPDATE classics
SET author = 'Billy Mayes'
WHERE author = 'FName LName';

UPDATE classics
SET title = 'Sweet Book Title'
WHERE title = 'Book title';

-- DELETE STATEMENTS

DELETE FROM classics
WHERE type = 'Movie';
 
DELETE FROM classics
WHERE year = 2020 AND author LIKE 'C%';

DELETE FROM classics
WHERE type = 'Non-fiction';

DELETE FROM classics
WHERE title = 'T%';

DELETE FROM classics
WHERE author = 'Shea Buckner' OR type = 'play';