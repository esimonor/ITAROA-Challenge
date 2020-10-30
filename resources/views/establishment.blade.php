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
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css">

        <!--Scripts -->
        <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/Traduccion/jquery.translate.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/Traduccion/Diccionario.js')}}"></script>
    </head>
    <body>
         <!-- Navbar -->
         <nav class="navbar sticky-top navbar-light bg-light">
            <a style="width:10%"href="{{URL::route('welcome')}}">
            <img width="100%" class="d-inline-block align-top" alt="" loading="lazy" src="{{URL::asset('img/logo.png')}}">
            </a>
            <a href ="establishment" class="trn nav_link" data-trn-key="link1">Establishment</a>
            <a href="establishment#restaurants" class="trn nav_link" data-trn-key="link2">Restaurants</a>
            <a href="{{URL::route('welcome')}}#location" class="trn nav_link" data-trn-key="link3">Location</a>
            <!-- LANGUAGE SELECTOR -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler77" aria-controls="" aria-expanded="false" aria-label="Toggle navigation"> 
                <div class="dropdown" style="display: inline-block;">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink78" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink78"> 
                        <a class="dropdown-item idioma" data-name="en"><span class="flag-icon flag-icon-gb"></span> English</a> 
                        <a class="dropdown-item idioma" data-name="es"><span class="flag-icon flag-icon-es"></span> Español</a> 
                        <a class="dropdown-item idioma" data-name="eu"><span class="flag-icon flag-icon-ru"></span> Euskera</a> 
                    </div>
                </div>
            </button> 
        </nav>

        <!-- Banner -->
        <div class="banner">
        </div>
        <!--Shops-->
        <h2 id="shops"class="trn" data-trn-key="Shops">Shops</h2>
        <div class="row-establishments">
        @foreach($establishments as $establishment)
        
            <div class="card">
                <img class="card-img" src="/{{$establishment->photo}}">
                <div class="overlay">
                    <div class="shop-name">
                        <a href="{{route('establishment.show', $establishment->id)}}">{{$establishment->name}}</a>
                        <br>
                        <i>{{$establishment->openAt}} - {{$establishment->closeAt}}</i>
                    </div>
                </div>
                <h3>{{$establishment->name}}</h3>
                <p>Phone: {{$establishment->phone}}</p>
            </div>
        @endforeach
        </div>
        <!--Restaurants-->
        <h2 id="restaurants"class="trn" data-trn-key="Restaurants">Restaurants</h2>
        <div class="row-establishments">
        @foreach($restaurants as $restaurant)
        
            <div class="card">
                <img class="card-img" src="/{{$restaurant->photo}}">
                <div class="overlay">
                    <div class="shop-name">
                        <a href="{{route('establishment.show', $restaurant->id)}}">{{$restaurant->name}}</a>
                        <br>
                        <i>{{$restaurant->openAt}} - {{$restaurant->closeAt}}</i>
                    </div>
                </div>
                <h3>{{$restaurant->name}}</h3>
                <p>Phone: {{$restaurant->phone}}</p>
            </div>
        @endforeach
        </div>
    <footer class="footer">
      <p>ITAROA &copy 2020</p>
    </footer>
    
    <!-- JQUERY, POPPER, BOOTSTRAP-->
    <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
