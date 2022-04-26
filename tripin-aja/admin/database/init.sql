create table user_tbl(
id_user integer unique,
username varchar(255),
email varchar(255),
password varchar(100),
gender varchar(50),
phone_number varchar(30),
address text,
join_date timestamp,
primary key (id_user)
);

create table gettrip_tbl(
id_gettrip integer unique,
id_admin integer unique,
package_name varchar(255),
images varchar(255),
facility varchar(255),
description text,
price varchar(255),
join_date timestamp,
primary key (id_gettrip)
);

create table order_tbl(
id_order integer unique,
your_loc varchar(255),
destination varchar(255),
package integer,
trip_select varchar(255),
startdate date,
trip_day integer,
primary key (id_order)
);

create table admin_tbl(
id_admin integer unique,
admin_email varchar(255),
admin_password varchar(255),
primary key (id_admin)
);

create table gettripdetail_tbl(
id_gettripdetail integer unique,
title varchar(10),
name_passenger varchar(255),
email_user varchar(255),
phone_number varchar(30),
primary key (id_gettripdetail)
);

create table transaction_tbl(
id_transaction integer unique,
payment varchar(255),
payment_date date,
user_id integer unique,
order_id integer,
primary key (id_transaction)
);

alter table transaction_tbl
add constraint FK foreign key (user_id) references user_tbl (id_user);

alter table transaction_tbl
add constraint foreignkey foreign key (order_id) references order_tbl (id_order);

INSERT INTO public.gettrip_tbl(
	id_gettrip, id_admin, package_name, images, facility, description, price, join_date)
	VALUES ('1', '1', 'bromo', 'image-1.png', '', 'jalan nsjansnajsnanljsas', '10000000', now());

