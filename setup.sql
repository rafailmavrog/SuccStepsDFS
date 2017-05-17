CREATE DATABASE ss_db;
CREATE TABLE partners(
id int(10) NOT NULL AUTO_INCREMENT,
eponimia varchar(255) NOT NULL,
name varchar(255) NOT NULL,
surname varchar(255) NOT NULL,
tax_office varchar(255) NOT NULL,
tel int(10) NOT NULL,
mobile int(10) NOT NULL,
email varchar(255) NOT NULL,
vat_number int(9) NOT NULL,
password varchar(255) NOT NULL,

PRIMARY KEY (id)
)