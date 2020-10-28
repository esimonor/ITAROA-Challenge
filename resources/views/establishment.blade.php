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
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-light bg-light">
            <a style="width:10%"href="{{URL::route('welcome')}}">
                <img width="100%" class="d-inline-block align-top" alt="" loading="lazy" src="{{URL::asset('img/logo.png')}}">
            </a>
            <a href ="establishment" class="trn nav_link" data-trn-key="link1">Establishment</a>
            <a href="#restaurant" class="trn nav_link" data-trn-key="link2">Restaurants</a>
            <a href="#location" class="trn nav_link" data-trn-key="link3">Location</a>
            <!-- LANGUAGE SELECTOR -->

            <select class="selectpicker" data-width="fit">
            <option class="idioma" data-name="en"><img src="{{URL::asset('img/logo.png')}}"></img>English</option>
            <option class="idioma" data-name="es"><img src="/img/es.png"></img>Español</option>
            <option class="idioma" data-name="eu"data-content='<span class="flag-icon flag-icon-mx"></span> Euskera'>Euskera</option>
            </select>

        <!-- Banner -->
        <div class="banner">
        </div>
        <!--Shops-->
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
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
