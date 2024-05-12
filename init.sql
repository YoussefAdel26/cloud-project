create database  IF NOT EXISTS Students;
use Students;

create table  IF NOT EXISTS students_info(
id int primary key,
fname varchar(15),
lname varchar(15),
age int,
cgpa float);


GRANT ALL PRIVILEGES ON Students.* TO 'root'@'localhost';
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';

insert into students_info values (22010451, "Mina", "Nader", 20, 3);

select* from students_info;
