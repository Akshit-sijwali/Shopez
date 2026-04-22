<?php
    if(isset($_GET['product'])){
        require 'config.php';
        mysqli_select_db($conn, 'shopez.net');
        $sql = "SELECT * FROM `product` WHERE `Product_id` = ".$_GET['product']." AND `Product_name` IS NOT NULL AND `Category_id` IS NOT NULL AND `Image` IS NOT NULL AND `Price` IS NOT NULL AND `Warranty` IS NOT NULL AND `Specifications` IS NOT NULL AND `createdate` IS NOT NULL ";

        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);
    }
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='css/product.css'>
        <link rel='stylesheet' href='css/nav.css'>
        <title>Shopez | Product</title>
    </head>
    <body>";
        require 'Templates/nav.php';

        echo "<div class='product-image' id='prod_images'>
            <button id='prev'><</button>
            <center><img src='product_img/".$data['Image']."'  id='product_img'></center>
            <button id='next'>></button>
        </div>
        <div class='product'>
            
            <h1 id='product_name'>".$data['Product_name']."</h1>
            <h3 id='product_price'>&#8377 ".$data['Price']."</h3>
            <a href='#' id='link_btn' ><button>Amazon</button></a>
            <p id='product_warrentry'>Warranty: ".$data['Warranty']."</p>
            <p id='prod_speci'>Specification: ".$data['Specifications']."</p>
              
        </div>
    </body>
    <script src='js/product.js'></script>
    <script src='js/menu.js'></script>
    </html>";
?>