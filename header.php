<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
  
<header id="header">
         <a href="cart.php">
        <h5>
                 <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<h4>$count</h4>";
                        }else{
                            echo "0";
                        }

                 ?>
                    </h5>
                </a>
</header> 
<body>
</body>
</html>







