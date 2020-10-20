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
                    <img src="img/itaroa_header.png" class="d-block w-100" alt="Ubicacion">
                    </div>
                    <div class="carousel-item">
                    <img src="img/mall.png" class="d-block w-100" alt="Itaroa logo">
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
                <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, ut exercitationem id, natus hic esse eum, atque pariatur blanditiis consectetur quia.</p>
            </div>
                <img class="imagen" src="img/restaurant.jpg">
        </div>
        <div class="container2">
            <div class="imagen">
                <img src="img/shops.jpg">
            </div>
            <div class="texto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, similique. Consequatur natus facere expedita repellat ipsum quae impedit! Mollitia officia labore non voluptatem alias rem sit placeat cum id earum.</p>
            </div>
        </div>
        <!--Location-->
        <div class="location">
            <div id="horarios">
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

    
    <!-- JQUERY, POPPER, BOOTSTRAP-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
