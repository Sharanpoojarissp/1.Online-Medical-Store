<?php

session_start();

require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="car.css">
    <title>Cart</title> 


</head>
<style>
    body{
        background: linear-gradient(90deg, #a1ffac, #c0ffaa, #e3ffb4, #ffffbd, #ffeac7, #ffdcd0, #ffdade, #ffe3f1);
      background-size: 100%;
}
</style>
    <body>

 <!-- MENU  -->
 <header>
<nav1 class="a">
    <a href="index.php"><h1>e-shoppe</h1><p>Shop with ease</p></a>
        <div class="a-1">
            <form action="">
                <label for="user"></label>
                <input type="text" placeholder="Search your product here" id="user" required>
                <button>Go</button>
            </form>
        </div>
        <div class="a-2">
            <ul><li><a href="cart.php"><i><img src="https://img.icons8.com/external-icongeek26-outline-icongeek26/45/000000/external-cart-ecommerce-icongeek26-outline-icongeek26.png"/></i></a><?php
    require_once ("header.php");
?></li>

            <li><a href="login.php"><i><img src="https://img.icons8.com/external-bearicons-gradient-bearicons/45/000000/external-login-call-to-action-bearicons-gradient-bearicons-1.png"/></i></a></li>
            
            <li><a href="register.php"><button type="submit">Sign up</button></a></li>
        </ul>
        
        </div>
    </nav1><br>
    </header>
        
        <div class="c">
                <hr><h6  class="my">My Cart</h6><br><br>
                <div class="c-1">
        
                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'] 
                                    ,$row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }
                    else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
                </div>
    
            
        
        <div class="c-3">
                <h6>PRICE DETAILS</h6>
                <hr>
                   
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                    
                        <br><h6>Delivery Charges</h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h6 class="free">FREE</h6>
                        
                        <hr>
                       
                        <h6>Amount Payable</h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <h6>₹<?php echo $total; ?></h6>
                       
                        <hr>
                        <h6>Total:&nbsp;&nbsp;&nbsp;&nbsp;₹<?php
                            echo $total;
                            ?></h6>
            </div>

            </div>


</body>
</html>
