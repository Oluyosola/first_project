<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Project</title>
    <link rel="stylesheet" href="./css/sales.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class = 'container'>
    <div class="carry" style="border:1px; height: 70px; margin-top:20px; margin-bottom: 20px;">
         <div class = "logo" style = "border:1px; height: 50px; width: 300px; float: left;">
             <img src="img/group 5.png" srcset="img/Group 5@2x.png 2x,img/Group 5@3x.png 3x">
         </div>
         <div class="row">
             <div class="col-md-5 ml-auto">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img class ="image mt-1 mr-1" src="img/polygon 1.png" srcset="img/polygon 1@2x.png 2x, img/polygon 1@3x.png 3x">
                        <p class ="sales_growth">Sales Growth</p> <br>
                    </div>
                    <div class="col-md-6 pl-2 col-12">
                    <img class= "image mt-1 mr-1" src="img/ellipse 1.png" srcset="img/ellipse 1@2x.png 2x, img/ellipse 1@3x.png 3x">
                <p class ="sales_growth" style = "color: #19d19b;">Live Products</p> <br>
                    </div>
                    <div class="col-md-6 col-12">
                    <img  class ="image mt-1 mr-1" src="img/polygon 2.png" srcset="img/polygon 2@2x.png 2x, img/polygon 2@3x.png 3x">
                <p class ="sales_growth" style ="color:#ff0000">Sales Decline</p>
                    </div>
                    <div class="col-md-6 pl-2 col-12">
                        <img class= "image mt-1 mr-1" src="img/circle.png" srcset="img/circle @2x.png 2x, img/circle @3x.png 3x">
                        <p class ="sales_growth" style ="color: #f2cc05;">Products in Development</p>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div> 
    <div class = 'container'>
    <div class="row">
                    <!-- <div class="col-md-6 pl-2 col-12">
                    <img class= "image mt-1 mr-1" src="img/buybot.png">
                <p class ="sales_growth" style = "color: #19d19b;">Buybot</p> <br>
                    </div> -->
</div>
</div>
    <div class = 'container'>
    <div class='row'>
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
        $sql = "SELECT id, products_name, image_name, status_id, last_week, this_week FROM TA_live_products";
        // $sql = "SELECT id, products_name, image_name FROM developing_products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lastweek =$row['last_week'];
                $thisweek =$row['this_week'];
                $calculation =(($lastweek - $thisweek)/$lastweek)*100;
                 $mycalculation = round(abs($calculation));
                // outputs the result of the data
                $pictures = 'img/';
                $image =$pictures.$row['image_name'];
                if ($lastweek > $thisweek){
                    $percentage ='<img class ="image ml-5 mb-4" style = "height:10px; width:11px;" src="img/polygon 1.png" srcset="img/polygon 1@2x.png 2x, img/polygon 1@3x.png 3x">';
            }else{
                    $percentage ='<img class ="image ml-5 mb-4" style= "height:10px; width:11px;" src="img/polygon 2.png" srcset="img/polygon 2@2x.png 2x, img/polygon 2@3x.png 3x">';
                }
         echo    "<div class='col-md-4'>
                        <div class='card card_name'>
                            <div class='card-body'>
                            <img class= 'image mt-1 mr-1 float-right' src='img/ellipse 1.png' srcset='img/ellipse 1@2x.png 2x, img/ellipse 1@3x.png 3x'>
                            <img class ='pics'src ='$image'>
                            <h3>$mycalculation%$percentage</h3>
                            </div>
                        </div>
                    </div>";
    }
}
$conn->close();
?>
        </div>  <!-- closing row -->
    </div>  <!-- closing second container -->
</div>
</body>
</html>
<div class = 'container'>
<div class='row'>
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
        // $sql = "SELECT id, products_name, image_name, status_id, last_week, this_week FROM TA_live_products";
        $sql = "SELECT id, products_name, image_name FROM developing_products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // $lastweek =$row['last_week'];
                // $thisweek =$row['this_week'];
                // $calculation =(($lastweek - $thisweek)/$lastweek)*100;
                //  $mycalculation = round(abs($calculation));
                // outputs the result of the data
                $pictures = 'img/';
                $image =$pictures.$row['image_name'];
            //     if ($lastweek > $thisweek){
            //         $percentage ='<img class ="image ml-5 mb-4" style = "height:10px; width:11px;" src="img/polygon 1.png" srcset="img/polygon 1@2x.png 2x, img/polygon 1@3x.png 3x">';
            // }else{
            //         $percentage ='<img class ="image ml-5 mb-4" style= "height:10px; width:11px;" src="img/polygon 2.png" srcset="img/polygon 2@2x.png 2x, img/polygon 2@3x.png 3x">';
            //     }
         echo    "<div class='col-md-6'>
                        <div class='card card_name'>
                            <div class='card-body'>
                            <img class= 'image mt-1 mr-1 float-right' src='img/circle.png' srcset='img/circle@2x.png 2x, img/circle@3x.png 3x'>
                            <img class ='pics'src ='$image'>
                            </div>
                        </div>
                    </div>";
    }
}
    $conn->close();
?>
        </div>  <!-- closing row -->
    </div>  <!-- closing second container -->
</div>
</body>
</html>
  