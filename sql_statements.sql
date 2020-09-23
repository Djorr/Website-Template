/* Creating the table: account */

CREATE TABLE account (
    id INT NOT NULL PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255)
);

/* Creating the table: persoon */

CREATE TABLE account (
    id INT NOT NULL PRIMARY KEY,
    voornaam VARCHAR(255),
    tussenvoegsel VARCHAR(255),
    achternaam VARCHAR(255),
    email VARCHAR(255),
    gebruikersnaam VARCHAR(255),
    wachtwoord VARCHAR(255),
    FOREIGN KEY (id) REFERENCES account(id)
);