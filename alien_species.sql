CREATE DATABASE alien_species;

USE alien_species;

CREATE TABLE species (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    ethics_morals TEXT,
    policy TEXT,
    colonized_planets TEXT,
    civilization_age INT,
    traits TEXT,
    leader VARCHAR(255),
    government VARCHAR(255),
    homeworld VARCHAR(255),
    origin TEXT,
    civics TEXT,
    edicts TEXT,
    ideals TEXT,
    army TEXT,
    image_url VARCHAR(255)
);
