DROP DATABASE IF EXISTS summitdb;
CREATE DATABASE summitdb;

DROP TABLE IF EXISTS bookings;

CREATE TABLE bookings (
	id SERIAL PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description VARCHAR (255),
        last_update DATE
);

INSERT INTO bookings (name,description)
VALUES('Dinner','Lovely steak resturant');

INSERT INTO bookings (name,description)
VALUES('Breakfast','Hotel or if i get up early enough, at Summit');

INSERT INTO bookings (name,description)
VALUES('Lunch','Its got to be a yummy Loster sandwich');
