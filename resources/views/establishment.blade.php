<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--POPPER
        <script src="https://unpkg.com/@popperjs/core@2"></script>
    POPPER-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>
        <link rel="icon" href="img/logo-composer-transparent3.png" type="image/png" sizes="16x16">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Arsenal' rel='stylesheet'>

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-light bg-light">
            <img width="10%" class="d-inline-block align-top" alt="" loading="lazy" src="img/logo.png">
            <a>Shops</a>
            <a>Restaurants</a>
            <a>Contact</a>
            <a>Languaje</a>
        </nav>

        <!--Shops and restaurants-->
        <div class="row-establishments">
            <div class="card">
                <img class="card-img" src="img/restaurant.jpg">
                <div class="overlay">
                    <div class="shop-name">SHOP NAME</div>
                </div>
                <h3>Restaurants</h3>
                <p>Aliquid similique, sed reprehenderit illo consequatur harum fuga nihil</p>
            </div>

            <div class="card">
                <img class="card-img" src="img/shops.jpg">
                <div class="overlay">
                    <div class="shop-name">SHOP NAME</div>
                </div>
                <h3>Shops</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="card">
                <img class="card-img" src="img/logo.png">
                <div class="overlay">
                    <div class="shop-name">SHOP NAME</div>
                </div>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

    <footer class="footer">
      <p>ITAROA &copy 2020</p>
    </footer>
    
    <!-- JQUERY, POPPER, BOOTSTRAP-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
