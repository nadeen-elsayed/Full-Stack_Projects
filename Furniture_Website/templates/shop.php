<?php
session_start();

require_once ('CreateDb.php');
require_once ('./component.php');

$database = new CreateDb("Productdb", "Producttb");
if (isset($_POST['add'])){
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop.php'</script>";

        }else{

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
         <link rel="stylesheet" href="../css/shop.css">
    </head>
    <body>
        <!-------------NAVBAR----------------->
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
        <div class='shop-main'>
            <h1 id='shop-head'>Our Products</h1> 
            <div class="catgs-cont"> 
                <ul class="catgs">
                    <h3>Category</h3>
                    <li id="mp"><a href="#" >All items</a></li>
                    <li><a href="#">Traditional</a></li>
                    <li><a href="#">Rustic</a></li>
                    <li><a href="#">Art Deco </a></li>
                    <li><a href="#">Modern </a></li>
                    <li><a href="#">Minimalist </a></li>
                    <li><a href="#">Industri Matrial </a></li>
                </ul>
                <div class="phone-cont">
                    <?php
                        $result = $database->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                        }
                        ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>