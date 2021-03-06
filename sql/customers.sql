create table CUSTOMERS (
    lastname VARCHAR(40) NOT NULL,
    firstname VARCHAR(40) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gender CHAR NOT NULL,
    birth_date DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    removed TINYINT(1) NOT NULL,
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    phone_number VARCHAR(10),
    address VARCHAR(100),
    PRIMARY KEY ( id )
);