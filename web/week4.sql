

CREATE TABLE foundation 
(
	found_id SERIAL PRIMARY KEY,
	brand VARCHAR(100),
	product_name VARCHAR(100),
	price INT
	image VARCHAR(200)
);

CREATE TABLE skin_type 
(
	skin_id SERIAL PRIMARY KEY,
	type VARCHAR(60)
);

CREATE TABLE foundation_skin
(
	id SERIAL PRIMARY KEY,
	found_id INT REFERENCES foundation(found_id),
	skin_id INT REFERENCES skin_type(skin_id)
);

INSERT INTO skin_type (type) VALUES ('dry');
INSERT INTO skin_type (type) VALUES ('oily');
INSERT INTO skin_type (type) VALUES ('combo');
INSERT INTO skin_type (type) VALUES ('acne');

INSERT INTO foundation (brand, product_name, price, image) VALUES ('Tarte', 'Shape Tape Hydrating', 39, 'https://afternoon-depths-66307.herokuapp.com/images/shapehydrating.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Tarte', 'Shape Tape Matte', 39, 'https://afternoon-depths-66307.herokuapp.com/images/shapematte.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Tarte', 'Clay Stick', 39, 'https://afternoon-depths-66307.herokuapp.com/images/claystick.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Tarte', 'Clay 12', 39, 'https://afternoon-depths-66307.herokuapp.com/images/amazon12.PNG');

INSERT INTO foundation (brand, product_name, price, image) VALUES ('Estee Lauder', 'Double Wear', 42, 'https://afternoon-depths-66307.herokuapp.com/images/esteedouble.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Estee Lauder', 'Double Wear Light', 42, 'https://afternoon-depths-66307.herokuapp.com/images/esteelight.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Estee Lauder', 'Double Wear Nude', 42, 'https://afternoon-depths-66307.herokuapp.com/images/esteenude.PNG');

INSERT INTO foundation (brand, product_name, price, image) VALUES ('Flower Beauty', 'Light Illusion', 11, 'https://afternoon-depths-66307.herokuapp.com/images/flowerlightliquid.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Flower Beauty', 'Pore Perfect Instant Blur', 11, 'https://afternoon-depths-66307.herokuapp.com/images/flowerblur.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Flower Beauty', 'Light Illusions Powder', 11, 'https://afternoon-depths-66307.herokuapp.com/images/flowerpowder.PNG');

INSERT INTO foundation (brand, product_name, price, image) VALUES ('Neutrogena', 'SkinClearing Liquid', 14, 'https://afternoon-depths-66307.herokuapp.com/images/netroskin.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Neutrogena', 'Hydro Boost', 16, 'https://afternoon-depths-66307.herokuapp.com/images/neutrohydro.PNG');
INSERT INTO foundation (brand, product_name, price, image) VALUES ('Neutrogena', 'Healthy Skin Liquid', 14, 'https://afternoon-depths-66307.herokuapp.com/images/neutrohealthy.PNG');



INSERT INTO foundation_skin(found_id, skin_id) VALUES (1, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (2, 2);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (3, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (3, 3);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (4, 4);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (4, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (5, 2);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (5, 4);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (6, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (7, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (8, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (9, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (10, 2);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (10, 3;
INSERT INTO foundation_skin(found_id, skin_id) VALUES (11, 4);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (11, 2);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (12, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (13, 1);
INSERT INTO foundation_skin(found_id, skin_id) VALUES (13, 4);
