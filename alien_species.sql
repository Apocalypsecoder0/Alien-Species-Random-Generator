CREATE DATABASE alien_species;

USE alien_species;

CREATE TABLE species (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    moral_ethics TEXT,
    policies TEXT,
    colonized_planets TEXT,
    age_of_civilization INT,
    traits TEXT,
    leaders TEXT,
    government VARCHAR(255),
    homeworld VARCHAR(255),
    origin TEXT,
    civics TEXT,
    edicts TEXT,
    ideals TEXT,
    armies TEXT
);
