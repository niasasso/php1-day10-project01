# php1-day10-project01
Learn MyQL Database


## SQL Commands


### Create Connection #1 ✅
     $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php1_day10';

    // CREATE CONNECTION
    $connect = new mysqli($servername, $username, $password, $database);

    // CHECK CONNENTION
    if($connect->connect_error){
        // echo "ERROR!";
        die("connection filed:" . $connect->connect_error);
    } else {
        echo "TRA ERROR!";
    }

### Create Connection #2 ✅
     $connect = new mysqli('localhost', 'root', '', 'php1_day10');

    if(!$connect->connect_error){
        echo "TRA ERROR!";
    } else {
        echo "ADA ERROR!";
    }


### Create New Database ✅
    CREATE DATABASE dbname


### Delete Database ✅
    DROP DATABASE dbname


### Create Table ✅
    CREATE TABLE product(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(50) NOT NULL
)

### Create Users ✅
    CREATE TABLE users( 
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL, 
    last_name VARCHAR(50) NULL, 
    email VARCHAR(50) NULL, 
    create_at TIMESTAMP )

### Delete Table ✅
    DROP TABLE tablname


### Insert Data ✅
    INSERT INTO `product`(`id`, `product_name`) VALUES ('','Coffee Late')

### Update Data ✅
    UPDATE `product` SET `product_name`='Black Coffee' WHERE `id`=1

### Delete Data✅
    DELETE FROM `product` WHERE `id`=2