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

INSERT INTO users (name, email, password)
VALUES ('Obama', '44thpres@america.com', 'aos;df');

INSERT INTO places (places_type, name, address)
VALUES (
    (SELECT types_id FROM types WHERE name = 'Parks/Trails'),
    'Porter Park',
    '2nd W 2nd S'
);

INSERT INTO reviews (reviews_date, reviews_user, place, comment, score)
VALUES (
    '2019-10-18',
    (SELECT users_id FROM users WHERE name = 'Obama'),
    (SELECT places_id FROM places WHERE name = 'Porter Park'),
    'Michelle and I agree it is probably the best park in the state of Idaho.',
    5
    );

INSERT INTO reviews (reviews_date, reviews_user, place, comment, score)
VALUES (
    '2019-10-16',
    (SELECT users_id FROM users WHERE name = 'johnny'),
    (SELECT places_id FROM places WHERE name = 'Porter Park'),
    'I like catching Pokémon here.',
    4
    );

INSERT INTO places (places_type, name, phone, address)
VALUES (
    (SELECT types_id FROM types WHERE name = 'Stores'),
    'Broulims',
    '2083564651',
    '124 West Main'
);

INSERT INTO reviews (reviews_date, reviews_user, place, comment, score)
VALUES (
    '2019-10-16',
    (SELECT users_id FROM users WHERE name = 'johnny'),
    (SELECT places_id FROM places WHERE name = 'Broulims'),
    'I am too poor to afford the sushi but it looks good. Anyway this is a good store but not the cheapest.',
    4
);

INSERT INTO places (places_type, name, phone, address)
VALUES (
    (SELECT types_id FROM types WHERE name = 'Stores'),
    'Walmart',
    '2083592809',
    '1450 North 2nd East'
);

INSERT INTO reviews (reviews_date, reviews_user, place, comment, score)
VALUES (
    '2019-10-16',
    (SELECT users_id FROM users WHERE name = 'johnny'),
    (SELECT places_id FROM places WHERE name = 'Walmart'),
    'Way too many people shop here all the time. Also it is a bit far from town',
    2
);