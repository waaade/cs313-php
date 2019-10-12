--myDb.sql

--types will be a small table that will store different types of places.
CREATE TABLE types (
    types_id SERIAL PRIMARY KEY,
    name VARCHAR(32) NOT NULL
);

CREATE TABLE places (
    places_id SERIAL PRIMARY KEY,
    places_type INT REFERENCES types(types_id),
    phone VARCHAR(11),
    address VARCHAR(200)
);

CREATE TABLE users (
    users_id SERIAL PRIMARY KEY,
    email VARCHAR(70) NOT NULL,
    password VARCHAR(70) NOT NULL
);

CREATE TABLE reviews (
    reviews_id SERIAL PRIMARY KEY,
    reviews_date DATE NOT NULL,
    reviews_user INT REFERENCES users(users_id) NOT NULL,
    comment text NOT NULL,
    score INT NOT NULL
);