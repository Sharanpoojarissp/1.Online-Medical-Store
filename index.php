<?php

session_start();

require_once ('CreateDb.php');
require_once ('component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");
        

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
            echo "<script>alert('Added to Cart')</script>";
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-shoppe</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    header{
        background: linear-gradient(90deg, #a1ffac, #c0ffaa, #e3ffb4, #ffffbd, #ffeac7, #ffdcd0, #ffdade, #ffe3f1);
      
}
body{
    background: linear-gradient(90deg, #d6ffe9, #d1ffde, #cbffd1, #caffc6, #d0ffc0, #d8ffbb, #e2ffb5, #eeffb0);
}
</style>
    <header>
    <nav1 class="a">
    <a href=""><h1>e-shoppe</h1><p>Shop with ease</p></a>
        <div class="a-1">
            <form action="">
                <label for="user"></label>
                <input type="text" placeholder="Search your product here" id="user" required>
                <button>Go</button>
            </form>
        </div>
        <div class="a-2">
            <ul><li><a href="cart.php"><i><img src="https://img.icons8.com/external-icongeek26-outline-icongeek26/45/000000/external-cart-ecommerce-icongeek26-outline-icongeek26.png"/></i></a>
            <?php require_once ("header.php"); ?>
            </li>

            <li><a href="login.php"><i><img src="https://img.icons8.com/external-bearicons-gradient-bearicons/45/000000/external-login-call-to-action-bearicons-gradient-bearicons-1.png"/></i></a></li>
            
            <li><a href="register.php"><button type="submit">Sign up</button></a></li>
        </ul>
        
        </div>
    </nav1 ><br>

        

<nav>
    <ul class="b"><li><a href="">HOME</a></li>
        <li><a href="#">ELECTRONIC</a>
        <ul>
            <li><a href="#">SMARTPHONE</a></li>
            <li><a href="#">LAPTOPS</a></li>
            <li><a href="#">TV & OTHERS</a></li>
        </ul> 
        </li>  
        <li><a href="#">CLOTHES</a>
        <ul>
            <li><a href="#">KIDS</a></li>
            <li><a href="#">MEN</a></li>
            <li><a href="#">WOMEN</a></li>
        </ul>
        </li>
        <li><a href="#">FOOTWEAR</a>
        <ul>
            <li><a href="#">SHOES</a></li>
            <li><a href="#">SANDALS</a></li>
        </ul></li>
        <li><a href="#">SPORTS</a>
        <ul>
            <li><a href="#">CRICKET</a></li>
            <li><a href="#">FOOTBALL</a></li>
            <li><a href="#">OTHERS</a></li>
        </ul></li>
        <li><a href="">KITCHEN</a></li>
        <li><a href="">STATIONARY</a>
        <ul>
            <li><a href="#">BOOKS</a></li>
            <li><a href="#">OTHERS</a></li>
        </ul></li>
        <li><a href="">GROCERY</a></li>
        <li><a href="">PHARMACY</a></li>

   
    </ul>
    </nav>
</header>
<body>

<div class="container">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
</div>

</body>
   
</html>