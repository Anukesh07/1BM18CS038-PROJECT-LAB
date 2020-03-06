use cs038;
create table Student(
snum int,
sname varchar(20),
major varchar(20),
lvl varchar(20),
age int,
primary key(snum)
);
create table Faculty(
fid int,
fname varchar(20),
deptid int,
primary key(fid)
);
create table Class(
cname varchar(20),
meets_at time,
room varchar(20),
fid int ,
primary key(cname),
foreign key(fid) references Faculty(fid)
);
create table Enrolled(
snum int,
cname varchar(20),
primary key(snum,cname),
foreign key(snum) references Student(snum),
foreign key(cname) references Class(cname)
);
insert into Student
values
(1,"Jai","COA","SJ",18),
(2,"Jain","MP","JR",19),
(3,"Arun","DS","SR",21),
(4,"Harsha","JAVA","SS",22);
insert into Enrolled
values
(1,"3-A"),
(2,"4-A"),
(3,"5-A"),
(4,"6-A");
insert into Faculty
values
(2774,"NV",1),
(2874,"NM",10),
(2794,"PM",11),
(2704,"KV",100);
