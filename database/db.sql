create database website;

use website ;


create table members(
    firstname varchar(50) not null,
    middlename varchar(50) not null,
    lastname varchar(50) not null,
    username varchar(50) not null,
    password varchar(50) not null,
    email varchar(50) not null,
    mobile varchar(50) not null,
    social varchar(50) not null,
    file varchar(50) not null,
    id int(11) not null primary key auto_increment

);

create table semister(
    courseId varchar(30) not null,
    coursename varchar(30) not null,
    courseDe varchar(30) not null,
    department varchar(30) not null,
    year varchar(5) not null,
    instructor varchar(30) not null,
    semister varchar(3) not null,
    grade varchar(3) not null,
    username varchar(30) not null,
    id int(11) not null primary key auto_increment
);