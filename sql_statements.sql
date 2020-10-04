/* Creating the table: account */

CREATE TABLE account (
    id INT NOT NULL AUTO_INCREMENT,
    gebruikersnaam VARCHAR(250) UNIQUE,
    email VARCHAR(250) UNIQUE NOT NULL,
    password VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

/* Creating the table: persoon */

CREATE TABLE persoon (
    id INT NOT NULL AUTO_INCREMENT,
    account_id INT NOT NULL,
    voornaam VARCHAR(250) NOT NULL,
    tussenvoegsel VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (account_id) REFERENCES account(id)
);

/* Create admin account and add him to the tables */

INSERT INTO `account` VALUES (NULL, 'admin', 'admin@admin.nl', 'admin');