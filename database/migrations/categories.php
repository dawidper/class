create table `categories` (
id serial,
title varchar(255));


alter table `categories` add created_at datetime;
alter table `categories` add updated_at datetime;