# Study MVC OOP PHP
- Simple MVC(Not Fully mvc)
- PHP OOP
- PDO Mysql

Simple CRUD mvc oop study,
this project build with this [project - Study OOP PHP](https://gitlab.com/AzrilSyamin/study-oop-php)

## Database

- Database Name : study_oop;
- Database Table : users,products;

Create database
```
CREATE DATABASE study_oop;
```

Create table user
```
CREATE TABLE users (
    user_id int AUTO_INCREMENT,
    user_name varchar(200),
    user_number varchar(12),
    user_age varchar(2),
    PRIMARY KEY (user_id)
);
```

Create table product
```
CREATE TABLE products (
    product_id int AUTO_INCREMENT,
    product_name varchar(200),
    product_price varchar(200),
    PRIMARY KEY (product_id)
);
```