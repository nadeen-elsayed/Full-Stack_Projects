<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
         integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        <!------------FIRST SECTION-------------->
        <div class='main'>
          <h1>Transform your space with our stunning furniture collection</h1>
          <button class='shop'>Shop now</button>
        </div>

        <!-------------CAROUSEL---------------------->
        <div class='carousel-cont'>
          <div class='carousel'>
            
            <img src='../imgs/carousel_imgs/1.webp' />
            <img src='../imgs/carousel_imgs/5.png' />
            <img src='../imgs/carousel_imgs/6.webp' />
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            <img src='../imgs/carousel_imgs/1.webp' />
            <img src='../imgs/carousel_imgs/5.png' />
            <img src='../imgs/carousel_imgs/6.webp' />
          
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            <img src='../imgs/carousel_imgs/1.webp' />
            <img src='../imgs/carousel_imgs/5.png' />
            <img src='../imgs/carousel_imgs/6.webp' />
          
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            <img src='../imgs/carousel_imgs/1.webp' />
            <img src='../imgs/carousel_imgs/5.png' />
            <img src='../imgs/carousel_imgs/6.webp' />
          
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            <img src='../imgs/carousel_imgs/8.webp' />
            <img src='../imgs/carousel_imgs/9.webp' />
            <img src='../imgs/carousel_imgs/10.webp' />
            <img src='../imgs/carousel_imgs/11.webp' />
            
          </div>

        </div>

        <!-----------------Our Services--------------------->
        <div class='services-cont'>
          <h2>Our Services</h2>

          <div class='services'>
              <div id='one'>
                01.
                <h3 class='service-title'>Design <br>Consultation</h3>
                <img id='o' src='../imgs/product_imgs/11.webp'  onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
              <div id='two'>
                02.
                <h3 class='service-title'>Delivery And <br>Assembly</h3>
                <img id='t' src='../imgs/product_imgs/12.webp' onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
              <div id='three'>
                03.
                <h3 class='service-title'>Maintenance And <br>Repairs</h3>
                <img id="tr" src='../imgs/product_imgs/13.webp' onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
              <div id='four'>
                04.
                <h3 class='service-title'>Removal And <br>Disposal</h3>
                <img id='fo' src='../imgs/product_imgs/14.webp' onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
              <div id='five'>
                05.
                <h3 class='service-title'>Online Design <br>Tools</h3>
                <img id='f' src='../imgs/product_imgs/15.webp' onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
              <div id='six'>
                06.
                <h3 class='service-title'>Product <br>Customization</h3>
                <img id='s' src='../imgs/product_imgs/16.webp' onmouseover='show(this.id)' onmouseout='hide(this.id)'/>
              </div>
          </div>
        <div>
        <script>

            function show(id){
              console.log(id);
              var el= document.getElementById(id);
              el.style.opacity='1'
            }
            function hide(id){
              console.log(id);
              var el= document.getElementById(id);
              el.style.opacity='0'
            }
        
          </script>

          <!-----------------Footer--------------------->
          <div class="social-container">
            <h2 style="margin-bottom:0 ;">
              Connect
            </h2>
            <div class="social"> 
                <a href="#" class="col"><i class="fa-brands fa-facebook-square "></i></a> 
                <a href="#" class="col"><i class="fa-brands fa-twitter " ></i></a>
                <a href="#" class="col"><i class="fa-brands fa-google-plus-g "></i></a>
                <a href="#" class="col"><i class="fa-brands fa-instagram "></i></a>
                <a href="#" class="col"><i class="fa-brands fa-youtube "></i></a>
            </div>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
          crossorigin="anonymous"></script>

    </body>
</html>