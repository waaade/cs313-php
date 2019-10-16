--Note: these statements were previously made because I forgot these columnns earlier:
--ALTER TABLE users ADD name VARCHAR(100) NOT NULL;
--ALTER TABLE reviews ADD place INT REFERENCES places(places_id) NOT NULL
--ALTER TABLE places ADD name VARCHAR(50) NOT NULL 

--Insert a user
INSERT INTO users (name, email, password)
VALUES ('johnny', 'johnny@great.com', '23243');

--Insert a place
INSERT INTO places (places_type, name, phone, address)
VALUES (
    (SELECT types_id FROM types WHERE name = 'Restaurants'),
    'McDonalds',
    '1111111111',
    '175 Valley River Dr'
);

--Insert a review
INSERT INTO reviews (reviews_date, reviews_user, place, comment, score)
VALUES (
    '2019-10-16',
    (SELECT users_id FROM users WHERE name = 'johnny'),
    (SELECT places_id FROM places WHERE name = 'McDonalds'),
    'I like hamburgers. I buy them here.',
    3
    );