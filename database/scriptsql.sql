create table setting_color(
	id int not null AUTO_INCREMENT,
	color_name varchar(255),
	color_code varchar(255),
	primary key (id)
);

create table setting_size(
	id int not null AUTO_INCREMENT,
	size_name varchar(255),
	size_cde varchar(255),
	primary key (id)
);

create table vendor(
	id int not null AUTO_INCREMENT,
	vendor_name varchar(255),
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table product_type(
	id int not null AUTO_INCREMENT,
	product_type_name varchar(255),
	parent_id int default null,
	is_delete int default 0,
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table product_color(
	product_id int not null,
	color_id int not null,
	sku varchar(255) default null,
	create_at datetime,
	update_at datetime,
	primary key (product_id, color_id )
)

create table product(
	int int not null AUTO_INCREMENT,
	product_name varchar(255),
	vendor_id int,
	product_type_id int,
	product_price long default null,
	product_compare_price long default null,
	product_sale_price long default null,
	product_sale_percent int default null,
	product_description varchar(1000) default null,
	product_content text default null,
	product_image varchar(255),
	product_qty long default 0,
	slug varchar(255),
	is_public int default 0,
	is_delete int default 0,
	create_at datetime,
	update_at datetime,
	primary key (id)
)

create table product_image(
	id int not null AUTO_INCREMENT,
	product_id int,
	image_src varchar(255),
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table blog(
	id int not null AUTO_INCREMENT,
	blog_title varchar(255),
	slug varchar(255),
	post_date datetime,
	blog_content text,
	blog_image varchar(255),
	is_public int default 0,
	is_delete default 0,
	create_at datetime,
	update_at datetime,
	primary key (id)
)

create table users(
	id int not null AUTO_INCREMENT,
	name varchar(255),
	email varchar(255),
	email_verified_at datetime default null,
	password varchar(255),
	phone_number varchar(20),
	sex varchar(10),
	address varchar(255),
	city varchar(100),
	ward varchar(100),
	district varchar(100),
	token varchar(150),
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table order_status(
	id int not null AUTO_INCREMENT,
	status_name varchar(50),
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table orders(
	id int not null AUTO_INCREMENT,
	order_code varchar(50),
	user_id int,
	order_date datetime,
	total_product_money long,
	note varchar(1000),
	discount_code varchar(20),
	sale_of_money long,
	ship_money long,
	tax_percent int,
	tax_money long,
	total_amount long,
	payment_amount long,
	status_order int,
	create_at datetime,
	update_at datetime,
	primary key (id)
);

create table order_address(
	id int not null AUTO_INCREMENT,
	order_id int,
	email varchar(255),
	phone_number varchar(20),
	address varchar(255),
	city varchar(100),
	ward varchar(100),
	district varchar(100),
	primary key (id)
)

create table order_payment(
	id int not null AUTO_INCREMENT,
	order_id int,
	payment_type_id int,
	payment_amount long,
	payment_received long,
	payment_date,
	create_at datetime,
	update_at datetime,
	primary key (id)
)

create table order_detail(
	id int not null AUTO_INCREMENT,
	order_id int,
	product_id int,
	product_price long,
	product_compare_price long,
	product_qty int,
	product_note varchar(1000),
	total_money long,
	create_at datetime,
	update_at datetime,
	primary key (id)
)