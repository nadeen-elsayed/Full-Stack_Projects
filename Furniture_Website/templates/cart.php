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
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/cart.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg  " style="background-color: #fff;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" id='logo'>FURNI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto order-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <ul class='nav-bar-end'>
                        <a href='cart.php'>
                        <i class="fa-solid fa-cart-shopping">
                        </i>
                        </a>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </ul>
                    </div>
                </div>
        </nav>
        <div class="cart">
            <div class="table">
                <div class="cart-header">
                    <span>
                        Item
                    </span>
                    <span>
                        Price
                    </span>
                    <span>
                        Remove
                    </span>
                    <span>
                        Quantity
                    </span>
                
                </div>
                
                <?php

                    $total = 0;
                        if (isset($_SESSION['cart'])){
                            $product_id = array_column($_SESSION['cart'], 'product_id');

                            $result = $db->getData();
                            while ($row = mysqli_fetch_assoc($result)){
                                foreach ($product_id as $id){
                                    if ($row['id'] == $id){
                                        cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                        $total = $total + (int)$row['product_price'];
                                    }
                                }
                            }
                        }else{
                            echo "<h5>Cart is Empty</h5>";
                        }

                ?>
            
        </div>
            <div class="checkout">
                <h5>PRICE DETAILS</h5>
                    <hr>
                    <div class="price-details">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h5>Price ($count items)</h5>";
                            }else{
                                echo "<h5>Price (0 items)</h5>";
                            }
                        ?>
                        <h6>$<?php echo $total; ?></h6><br>
                        <h5>Delivery Charges</h5>
                        <h6 class="text-success">FREE</h6><br>
                        <hr>
                        <h5>Amount Payable</h5>
                        <div class="price-details">
                            <h6>$<?php
                                echo $total;
                            ?></h6>
                            <button class="check-btn">
                                Checkout
                            </button>
                        </div>
                    </div>
            </div>


        <script>
            let add = document.getElementById("add")
            let sub = document.getElementById("subtract")
            let qtn = document.getElementById("qtn")
            let count=1
            qtn.innerText=count
            function addd(){
                count+=1
                qtn.innerText=count
                console.log(count)
            }
            function subtractt(){
                count-=1
                qtn.innerText=count
                console.log(count)
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
    </body>
</html>