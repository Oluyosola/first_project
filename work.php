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
//     status_id INT(6)
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
//  $sql = "INSERT INTO TA_live_products(products_name, image_name, status_id)
//  VALUES ('pay electricity bills', 'peb.jpg', '1');";
//  $sql.= "INSERT INTO TA_live_products(products_name, image_name, status_id)
//  VALUES ('EKO electricty distribution company', 'eko.jpg', '1');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id)
//  VALUES ('KANO electricity distribution company', 'kano.jpg', '1');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id)
//  VALUES ('JOS electricity distribution company', 'jos.jpg', '1');";
//  $sql.= "INSERT INTO TA_live_products (products_name, image_name, status_id)
//  VALUES ('WONDAFU', 'wondaful' ,'1')";
// if ($conn->multi_query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $sql = "INSERT INTO developing_products(products_name, image_name, status_id)
//  VALUES ('SHIRIN', 'shirin.jpg', '1')";
//  if ($conn->multi_query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
$conn->close();
 ?>
