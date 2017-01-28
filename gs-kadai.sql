drop database if exists newlist;
create database newlist default character set utf8 collate utf8_general_ci;
grant all on newlist.* to 'staff'@'localhost' identified by 'password';
use newlist;

create table newlist (
	id int auto_increment primary key, 
	name varchar(200) not null,
    gender varchar(200) not null,
    birthday varchar(200) not null,
    emailadress varchar(200) not null
    
);

insert into shipment values(null, '山田太郎', '男', '1990/10/01', 'test01@test.com');
insert into shipment values(null, '鈴木花子', '女', '2000/01/01', 'test2@gmail.com');
