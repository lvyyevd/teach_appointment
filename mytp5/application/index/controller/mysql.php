<?php
功能分为两大部分：
    1、教师功能
    2、学生预约功能

已实现功能：
    教师登录
    教师删除活动

    truncate table pre_active; //清空数据表


5-16：新增时间验证功能

5-25：过期活动





//数据库创建
create database appoint;

//删除表
drop table pre_teacher;
drop table pre_active;
drop table pre_appoint;


//创建Teacher数据库
create table if not exists pre_Teacher(
id int PRIMARY KEY AUTO_INCREMENT,
username varchar(20) not null,
name varchar(20) not null,
sex varchar(10) not null,
age int,
phone varchar(20) not null,
mail varchar(50) not null,
addr varchar(50) not null,
major varchar(100) not null,
password varchar(100) not null,
flag int
); 

insert into pre_teacher values(0,'xz','a','a','a','111','@','a','a','333');//测试数据
//f7f5a8d0e70a8445f40f12311a7d3dc526a55cd3


//活动信息表
create table if not exists pre_active(
tea_id int,
tea_name varchar(20),
act_id int AUTO_INCREMENT,
major varchar(100),
start_time datetime,
end_time datetime,
addr varchar(100),
nums int,
primary key(`act_id`)
);


//学生申请表
create table if not exists pre_appoint(
    act_id int,
professional varchar(20),
stu_class varchar(20),
stu_name varchar(20),
student_num varchar(20),
phone_num varchar(20),
status varchar(3)
);


insert into pre_active values(2,'a',0,'a','2019-03-05 10:00:00','2019-03-05 11:00:00','aaaa',50); //测试数据


//读取数据
$Teacher=new teacher;
		$teachers=$Teacher->select();
		$teacher=$teachers[0];

		return $teacher->getdata('name');//通过getdata访问字段
	C层不负责代码的实现，只负责指挥
	具体实现由M层来做

>


