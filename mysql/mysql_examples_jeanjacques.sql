select * from classics where type = 'Fiction';
select type, author from classics where (type = 'Play' or type = 'Non-fiction');
select * from classics where (year < 1800);
select author, title from classics order by title asc;
select * from classics where author like 'Charles %'; 


insert into classics (author, title, type, year) values ('William Shakespeare','Romeo and Juliet','Play','')
insert into classics (author, title, type, year) values ('Johann Geothe','Faust','Play','1772')
insert into classics (author, title, type, year) values ('Francois Voltaire','Zadig ou la Destinee','Fiction','1747');
insert into classics (author, title, type, year) values ('Mary Schelley','Frankenstein','Novel','1818');
insert into classics (author, title, type, year) values ('Miguel de Cervantes','Don Quixotte','Novel','1605');
insert into classics (author, title, type, year) values ('Miscellaneous','The National Lampoon','Magazine','2005');


update classics set  title = 'A Midsummer Night\'s Dream' where (title like 'Romeo %' and year = ''); 
update classics set  year = 1590 where title = 'A Midsummer Night\'s Dream';
update classics set  author = 'Mary Shelley' where author = 'Mary Schelley';



delete from classics where (year > 1900);

alter table classics modify year char(10);
update classics set year ='1605-1615' where title like 'Don %';
update classics set type = 'Novel' where type = 'Fiction';

alter table classics add quantity char(3); 