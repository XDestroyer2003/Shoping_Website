<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruitmarket</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <?php
        include 'connection.php';
        $query = "select * from tbl_items";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            $productID = 0;
            echo "<div class= 'products-container'>";
            while($row = $result->fetch_assoc()){
                    echo "<div class= 'product'>";
                        echo "<img id='fruitImg' name= '".$row['Fruits']."' src='images/".$row['image_name'].".jpg'>";
                        echo "<h3>".$row['Fruits']."</h3>";
                        echo "<p>".$row['Price']."/".$row['Unit']."</p>";
                        echo "<button class = 'get' data-name= '$productID'  > Get Now </button>";
                    echo "</div>";

                    $productID++;
            }
            echo "</div>";
            
            $productPreID = 0;
            $result = $conn->query($query);
            echo "<div class= 'products-preview'>";
            while($row = $result->fetch_assoc()){
                    
                    echo "<div class = 'preview' data-target = '$productPreID' >";
                        echo "<div class= 'close'>";
                            echo "<button class = 'closed' >X</button>";
                            echo "<img id='fruitImg' name= '".$row['Fruits']."' src='images/".$row['image_name'].".jpg'>";
                        echo "</div>";
                        echo "<div>";
                            echo "<h3>".$row['Fruits']."</h3>";
                            echo "<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem. </p>";
                            echo "<p>".$row['Price']."/".$row['Unit']."</p>";
                        echo "</div>";

                        echo "<div class='buttons'>";
                            echo "<a href='#' class='buy'>Buy Now</a>";
                            echo "<a href='#' class='cart'>Add to Cart</a>";
                        echo "</div>";

                    echo "</div>";

                    $productPreID++;
            }
            echo "</div>";
        }

        ?>

    </div>
</body>
</html>   