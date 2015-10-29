SELECT author FROM classics;
SELECT title FROM classics;
SELECT type FROM classics;
SELECT year FROM classics;
SELECT * FROM classics;

 UPDATE classics SET author='ian' WHERE year = '1811';
 UPDATE classics SET title='where the wild things roam' WHERE type = 'play';
 UPDATE classics SET year='1811' WHERE author = 'dude';
  UPDATE classics SET type='play' WHERE author = 'dude';
   UPDATE classics SET author='play' WHERE type = 'play';

INSERT INTO classics(author, title, type, year)
 VALUES('ian','stuff','Fiction','1982');

 INSERT INTO classics(author, title, type, year)
 VALUES('dude','things','Fiction','1981');
 
  INSERT INTO classics(author, title)
 VALUES('mike','i write books good');

 
   INSERT INTO classics(author, year)
 VALUES('eric','42');
 
   INSERT INTO classics(author, type)
 VALUES('fred','story');

 DELETE FROM classics
WHERE author='ian';

 DELETE FROM classics
WHERE title='i write books good';

 DELETE FROM classics
WHERE type ='play';

 DELETE FROM classics
WHERE year ='42';

 DELETE FROM classics
WHERE author ='mark';