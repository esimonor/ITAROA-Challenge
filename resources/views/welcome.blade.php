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
            <a href ="stablishment" class="trn" data-trn-key="Establishments">Establishment</a>
            <a href="#restaurant">Restaurants</a>
            <a href="#location">Location</a>

            <!-- LANGUAGE SELECTOR -->

            <li class="dropdown language-selector">
              Language:  
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                <img src="img/en.png" />
              </a>
              <ul class="dropdown-menu pull-right">
                <li>
                  <a href="#">
                    <img src="img/esp.png" />
                    <span class="idioma" data-name="es">Español</span>
                  </a>
                </li>
                <li class="active">
                  <a href="#">
                    <img src="img/en.png" />
                    <span>English</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/eu.png" />
                    <span>Euskera</span>
                  </a>
                </li>
              </ul>
            </li>
        </nav>
        <!-- Carousel -->
        <div style="border:1px solid grey;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/espacio-itaroa.png" class="d-block w-100" alt="Cartel">
                    </div>
                    <div class="carousel-item">
                    <img src="img/itaroa_header.png" class="d-block w-100" alt="Itaroa logo">
                    </div>
                    <div class="carousel-item">
                    <img src="img/mall.png" class="d-block w-100" alt="Centro">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Image with text section-->
        <div class="container">
            <div class="texto">
                <h3>Restaurants</h3>
                <p>Wide varaiety of quality restaurants are waiting to serve you a delicious meal.</p>
            </div>
                <img class="imagen" src="img/restaurant.jpg">
        </div>
        <div class="container2">
                <img class="imagen" src="img/shops.jpg">
            <div class="texto">
                <h3>Shops</h3>
                <p>Lots of shops for all your needs, from groceries to clothing, and all of that at an afordable product.</p>
            </div>
        </div>
        <!--Location-->
        <div class="location" id="location">
            <div class="texto">
                <div>
                    <h4>Horario Comercial</h4>
                    <div>Lunes a sábados, de 10:00 a 22:00h
                    </div>
                </div>
                <div>
                    <h4>Horario Hipercor</h4>
                    <div>Lunes a sábados, de 10:00 a 22:00h
                    </div>
                </div>
                <div>
                    <h4>Horario Restauración</h4>
                    <div>
                    <ul>
                        <li>Domingos a jueves, de 12:00 a 23:00 h</li><li>Viernes, sábados y vísperas de festivos, de 12:00 a 00:00 h</li>
                    </ul>
                    </div>
                </div>
                <div >
                    <h4>Horario Ocio</h4>
                    <div>
                    <ul>
                        <li>Cines: Según programación</li>
                        <li>Citypark, desde 16:00h. Karting desde 17:00h. (sábados y domingos desde 12:00h)</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div id="mapa" style="width: 100%">
            <iframe scrolling="no" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=42.8276398,%20-1.5847707+(Itaroa)&amp;t=h&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="95%" height="300" frameborder="1"></iframe>
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
