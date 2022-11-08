<?php
function component($productname, $productprice, $productimg, $productid){
    $element =
    "<link rel=\"stylesheet\" href=\"component.css\">
    <div class=\"card\"><form action=\"index.php\" method=\"post\">
    <div class=\"card-shadow\">
        <div class=\"card-img\">
        <img src=\"$productimg\"></div>

        <div class=\"card-body\">
        <h5>$productname</h5>
        </div>

        <h5  class=\"price\">₹$productprice</h5>

        <div class=\"card-b\">
        <div >
        <button class=\"card-but1\" type=\"submit\" name=\"add\">Add to Cart</button></div>
        <div >
        <button class=\"card-but\" type=\"submit\" name=\"add1\"><a href=\"buy.html\" style=\"text-decoration: none; color:black;\"> Buy</a></button></div>
        </div>
        <input type='hidden' name='product_id' value='$productid'>
        </div>
    </form></div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg  class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                            
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\"></small>
                                <h5 class=\"pt-2\">₹$productprice</h5>
                            
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>

                            </div>
                            
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>