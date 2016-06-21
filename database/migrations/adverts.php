create table `adverts` (
id serial,
category_id int,
title varchar(255),
description text,
email varchar(128),
phone int,
address text
);


alter table `adverts` add expire_date datetime;
alter table `adverts` add created_at datetime;
alter table `adverts` add updated_at datetime;