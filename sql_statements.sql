/* Creating the table: account  (Notitie: Week 2 Les 1) */

CREATE TABLE account (
    id INT NOT NULL PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255)
);

/* Creating the table: persoon  (Notitie: Week 2 Les 1)*/

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

/* Create admin account and add him to the tables  (Notitie: Week 4 Les 1)*/

INSERT INTO `account` (`id`, `email`, `password`) VALUES ('', 'admin@admin.nl', '6NtWPVHgMhHap4Da');
INSERT INTO `persoon` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`, `gebruikersnaam`, `wachtwoord`) VALUES ('', 'admin', NULL, 'admin', 'admin@admin.nl', 'admin', '6NtWPVHgMhHap4Da');
