<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taproducts";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// $sql = "CREATE DATABASE taproducts";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// sql to create table
// $sql = "CREATE TABLE TA_live_products (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     products_name VARCHAR(50) NOT NULL,
//     image_name VARCHAR(30) NOT NULL,
//     rate decimal(5,4) NOT NULL,
//     status_id INT(6), 
//     last_week INT(20),
//     this_week INT(20)
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table TA live products created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
//    $sql = "CREATE TABLE developing_products (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         products_name VARCHAR(50) NOT NULL,
//         image_name VARCHAR(30) NOT NULL,
//     rate decimal(5,4) NOT NULL,
//     status_id INT(5)
//        )";
//         if ($conn->query($sql) === TRUE) {
//             echo "Table TA developing products created successfully";
//         } else {
//             echo "Error creating table: " . $conn->error;
//         }
//  $sql = "INSERT INTO TA_live_products(products_name, image_name, status_id, last_week, this_week)
//  VALUES ('pay electricity bills', 'peb.jpg', '1', '4000', '2000');";
//  $sql.= "INSERT INTO TA_live_products(products_name, image_name, status_id, last_week, this_week)
//  VALUES ('EKO electricty distribution company', 'eko.jpg', '1', '2000', '6000');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id, last_week, this_week)
//  VALUES ('KANO electricity distribution company', 'kano.jpg', '1', '6000', '3000');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id, last_week, this_week)
//  VALUES ('JOS electricity distribution company', 'jos.jpg', '1', '3000', '5000');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id, last_week, this_week)
//  VALUES ('WONDAFU', 'wondaful.jpg' ,'1', '5000', '7000')";
// if ($conn->multi_query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $sql = "INSERT INTO developing_products(products_name, image_name, status_id)
//  VALUES ('SHIRIN', 'shirin.png', '1');";
//  $sql.= "INSERT INTO developing_products(products_name, image_name, status_id)
//  VALUES ('Buybot', 'buybot.png', '1')";
//  if ($conn->multi_query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
$conn->close();
 ?>
