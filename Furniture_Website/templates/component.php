<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    <div>
        <form action=\"shop.php\" method=\"post\">
            <img src=\"../imgs/product_imgs/$productimg\">
            <div class='prod-title'>
                <h3>$productname</h3>
                <span>$$productprice</span><br>
                <button name=\"add\"><i class=\"fa-solid fa-cart-shopping\"></i></button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    <div>
        <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
            <div class=\"item\">
                <img src=\"../imgs/product_imgs/$productimg\" style=\"display:inline;overflow:visible\">
                
                    <h6>
                        $$productprice
                    </h6>
                    <button class=\"remove\" name=\"remove\">
                    <i class=\"fa-solid fa-trash\"></i>
                    </button>
                <div class='q'>
                    <div class=\"round\" id=\"add\" onclick=\"addd()\">
                    +
                    </div>
                <div id=\"qtn\"> 1 </div>
                    <div class=\"round\" id=\"subtract\" onclick=\"subtractt()\">
                    -
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
    echo  $element;
}