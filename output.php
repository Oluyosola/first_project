<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Project</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
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
$sql = "SELECT id, products_name, image_name, status_id FROM TA_live_products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // outputs the result of the data
      echo  "<div class = 'container'>
                <div class='row'>
                    <div class='column' style =' float: left; width: 50%; padding: 0 10px;'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class=' text-success'> ".$row["products_name"]."</h5>
                                <h3 class=' text-danger'> ".$row["status_id"]."</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
    }
}
$conn->close();
?>
</body>
</html>
  