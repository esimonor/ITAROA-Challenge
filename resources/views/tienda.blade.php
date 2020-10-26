<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--POPPER
        <script src="https://unpkg.com/@popperjs/core@2"></script>
    POPPER-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>
        <link rel="icon" href="{{url('img/logo-composer-transparent3.png')}}"type="image/png" sizes="16x16">
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

        <!-- Banner 
        <div class="banner">
        </div>-->

        <!--Logo and products-->
        <div id="shop_logo">
            <img src="/img/logo-composer-transparent3.png">
            <h3>SHOP NAME</h3>
            <i>08:00 - 20:00</i>
            <i>Phone: 123456789</i>
            
        </div>

      
        <div class="row-products">
            <div class="card">
                <img class="card-img" src="img/como_llegar_footer1.jpg">
                <h4>PRODUCTO</h4>
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p style="border:1px solid black">39,99€</p>
            </div>

            <div class="card">
                <img class="card-img" src="https://res.cloudinary.com/css-tricks/image/fetch/w_600,q_auto,f_auto/https://cdn4.buysellads.net/uu/7/72681/1600375513-MC_CSSTricks_Logo_600x600.png">
                <h4>PRODUCTO</h4>
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p style="border:1px solid black">39,99€</p>
            </div>
            <div class="card">
                <img class="card-img" src="img/logo.png">
                <h4>PRODUCTO</h4>
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p style="border:1px solid black">39,99€</p>
            </div>
        </div>
    </form>
    <footer class="footer">
      <p>ITAROA &copy 2020</p>
    </footer>
    
    <!-- JQUERY, POPPER, BOOTSTRAP-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
