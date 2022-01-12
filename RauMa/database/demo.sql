Drop database if exists 'demo'
create database 'demo' default character set utf8 collate utf8_unicode_ci;
use demo;
-----
--cấu trúc bảng cho bảng category
create table 'category'
(
	'id' int(11) not null,
	'name' varchar(100) collate utf8_unicode_520_nopad_ci not null,
	'status' tinyint(4) not null default 1,
	'create_at' date default null
) ENGINE=InnoDB default charset=utf8 collate=utf8_unicode_520_nopad_ci;

insert into 'category' ('id','name','status','created_at') values
(1,'áo',1,null),
(2,'quần',1,null);
--cấu trúc bảng product
Create table 'product'
(
    'id' int(11) not null,
    'name' varchar(150) collate utf8_unicode_520_nopad_ci not null,
    'image' varchar(200) collate utf8_unicode_520_nopad_ci not null,
    'price' int(11) not null,
    'category_id' int(11) not null,
)ENGINE=InnoDB default charset=utf8 collate=utf8_unicode_520_nopad_ci;

Insert into 'product' ('id','name','image','price','category_id') values
(1,'áo sơ mi','', 0, 1)

Alter table 'category' add primary key ('id');

Alter table 'product' add primary key ('id'),
                      add key FK_category_id ('category_id');