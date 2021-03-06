create table ORDERS (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    customer_id INT UNSIGNED NOT NULL,
    address VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    time DATETIME NOT NULL,
    handled TINYINT(1) NOT NULL,
    PRIMARY KEY ( id ),
    FOREIGN KEY (customer_id) REFERENCES CUSTOMERS (id)
);