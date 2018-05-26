CREATE TABLE User
(
	id SERIAL,
	first_name VARCHAR(40),
	last_name VARCHAR(40),

);




//////////////////////////////////

CREATE TABLE foundation 
(
	found_id SERIAL PRIMARY KEY,
	brand VARCHAR(100),df
	product_name VARCHAR(100),
	price INT,
);

CREATE TABLE skin_type 
(
	skin_id SERIAL PRIMARY KEY,
	type VARCHAR(60),
);

CREATE TABLE foundation_skin
(
	id SERIAL PRIMARY KEY,
	found_id SERIAL REFERENCES foundation(found_id),
	skin_id SERIAL REFERENCES skin_type(skin_id),
);