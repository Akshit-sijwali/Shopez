<?php 
    require 'config.php';
    mysqli_select_db($conn, 'epiz_34075613_shopez');

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='css/nav.css'>
        <link rel='stylesheet' href='css/index.css'>
        <title>Shopez | Home</title>
    </head>
    <body>";
        require 'Templates/nav.php';
    echo "<main>
            <div class='banner' id='banner'>
                <button id='prev'><</button>
                <img src='images/electronics.png' alt='Offers' srcset='' id='banner_img'>
                <button id='next'>></button>
            </div><br><br>
            <div class='search'>
                <form action='' method='post'>
                    <input type='text' id='search_bar' name='searchb' placeholder='Search products'>
                    <button type='submit' name='search' id='search_br'><img src='icons/search.svg'></button>
                </form>    
            </div><br><br><br><br>
            <div class='Data'>";
                if (isset($_POST['search'])) {
                    $sql = "SELECT * FROM `Product` WHERE `Product_id` IS NOT NULL AND `Product_name` LIKE '%".$_POST['searchb']."%' AND `Category_id` IS NOT NULL AND `Image` IS NOT NULL AND `Price` IS NOT NULL AND `Warranty` IS NOT NULL AND `Specifications` IS NOT NULL AND `createdate` IS NOT NULL  ";
                    $result = mysqli_query($conn,$sql);
                    $result = mysqli_fetch_all($result);

                    for($i=0;$i<sizeof($result);$i++){
                        echo "<div class='card' id='card_id'>
                            <div class='card-body'>
                                <img class='card-img' id='card-imeg' src='product_img/".$result[$i][3]."' alt='Card image cap'>
                                <h2 class='Laptop'>".$result[$i][1]."</h2><br>
                                <h3 class='prise'>".$result[$i][4]." &#8377;</h3><br><br>
                                <center><a href=product.php?product='".$result[$i][0]."' class='btn btn-primary'><button>View Product ></button></a></center>
                            </div>
                        </div>";
                    }
                } else {
                    $sql = 'SELECT * FROM Product';
                    $result = mysqli_query($conn,$sql);
                    $result = mysqli_fetch_all($result);
                    for($i=0;$i<sizeof($result);$i++){
                        echo "<div class='card' id='card_id'>
                            <div class='card-body'>
                                <img class='card-img' id='card-imeg' src='product_img/".$result[$i][3]."' alt='Card image cap'>
                                <h2 class='Laptop'>".$result[$i][1]."</h2><br>
                                <h3 class='prise'>".$result[$i][4]." &#8377;</h3><br><br>
                                <center><a href=product.php?product='".$result[$i][0]."' class='btn btn-primary'><button>View Product ></button></a></center>
                            </div>
                        </div>";
                    }

                }       
            echo "</div>
        </main>
    </body>
    <script src='js/index.js'></script>
    <script src='js/menu.js'></script>
</html>";
?>    