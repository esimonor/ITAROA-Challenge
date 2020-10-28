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

        <!--Scripts -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/Traduccion/jquery.translate.js"></script>
        <script type="text/javascript" src="js/Traduccion/Diccionario.js"></script>

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-light bg-light">
            <img width="10%" class="d-inline-block align-top" alt="" loading="lazy" src="img/logo.png">
            <a href ="itaroa/establishment" class="trn" data-trn-key="link1">Establishment</a>
            <a href="#restaurant" class="trn" data-trn-key="link2">Restaurants</a>
            <a href="#location" class="trn" data-trn-key="link3">Location</a>

            <!-- LANGUAGE SELECTOR -->

            <select class="selectpicker" data-width="fit">
            <option class="idioma" data-name="en"><img src="{{URL::asset('img/logo.png')}}"></img>English</option>
            <option class="idioma" data-name="es"><img src="/img/es.png"></img>Español</option>
            <option class="idioma" data-name="eu"data-content='<span class="flag-icon flag-icon-mx"></span> Euskera'>Euskera</option>
            </select>
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
                <h3 class="trn" data-trn-key="Establishments">Restaurants</h3>
                <p class="trn" data-trn-key="Desc1">Wide varaiety of quality restaurants are waiting to serve you a delicious meal.</p>
            </div>
                <img class="imagen" src="img/restaurant.jpg">
        </div>
        <div class="container2">
                <img class="imagen" src="img/shops.jpg">
            <div class="texto">
                <h3 class="trn" data-trn-key="Shops">Shops</h3>
                <p class="trn" data-trn-key="Desc2">Lots of shops for all your needs, from groceries to clothing, and all of that at an afordable product.</p>
            </div>
        </div>
        <!--Location-->
        <div class="location" id="location">
            <div class="texto">
                <div>
                    <h4 class="trn" data-trn-key="Hcomercial">Business hours</h4>
                    <div class="trn" data-trn-key="Horario1">Monday to Saturdays, from 10:00 to 22:00h
                    </div>
                </div>
                <div>
                    <h4 class="trn" data-trn-key="Hhipercor">Hipercor schedule</h4>
                    <div class="trn" data-trn-key="Horario2">Monday to Saturdays, from 10:00 to 22:00h
                    </div>
                </div>
                <div>
                    <h4 class="trn" data-trn-key="Hrestauracion">Restoration Hours</h4>
                    <div>
                    <ul>
                        <li class="trn" data-trn-key="Horario3">Sunday to Thursday, from 12:00 to 23:00</li><li class="trn" data-trn-key="Horario4">Friday, Saturday and the eve of holidays, from 12:00 to 00:00</li>
                    </ul>
                    </div>
                </div>
                <div >
                    <h4 class="trn" data-trn-key="Hocio">Leisure Hours</h4>
                    <div>
                    <ul>
                        <li class="trn" data-trn-key="Cines">Cinemas: According to programming</li>
                        <li class="trn" data-trn-key="Citypark">Citypark, from 4:00 p.m. Karting from 5:00 p.m. (Saturdays and Sundays from 12: 00h)</li>
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
