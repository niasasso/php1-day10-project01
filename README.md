# php1-day10-project01
Learn MyQL Database


## SQL Commands
### Create New Database
    CREATE DATABASE dbname


### Delete Database
    DROP DATABASE dbname


### Create Table
    CREATE TABLE product(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(50) NOT NULL
)

### Create Users
    CREATE TABLE users( 
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL, 
    last_name VARCHAR(50) NULL, 
    email VARCHAR(50) NULL, 
    create_at TIMESTAMP )

### Delete Table
    DROP TABLE tablname


### Insert Data
    INSERT INTO `product`(`id`, `product_name`) VALUES ('','Coffee Late')