create database projectlab2;

use projectlab2;

create table student (
firstname varchar(30),
lastname varchar(30),
phone varchar(12),
username varchar(30),
email varchar(40),
password varchar(30),
primary key(username,email,password)
);

create table userprofile (
username varchar(30),
email varchar(40),
quest int,
answ int,
primary key(username,email),
constraint fk_up foreign key(username,email) references student(username,email)
);

create table teacher (
username_t varchar(30),
email_t varchar(40),
password_t varchar(30),
primary key(username_t,email_t)
);

create table contactus (
username varchar(30),
email varchar(30),
suggest varchar(255),
primary key(username,email),
constraint fk_contactus foreign key(username,email) references student(username,email)
);

