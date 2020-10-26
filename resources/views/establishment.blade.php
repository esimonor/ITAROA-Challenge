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

        <!-- Banner -->
        <div class="banner">
        </div>
        <!--Shops-->
        <div class="row-establishments">
        @foreach($establishments as $establishment)
        
            <div class="card">
                <img class="card-img" src="{{$establishment->photo}}">
                <div class="overlay">
                    <div class="shop-name">
                        <a href="{{route('establishment.show', $establishment->id)}}">{{$establishment->name}}</a>
                        <br>
                        <i>{{$establishment->openAt}} - {{$establishment->closeAt}}</i>
                    </div>
                </div>
                <h3>{{$establishment->name}}</h3>
                <p>{{$establishment->phone}}</p>
            </div>
        @endforeach
        </div>
        <!--Restaurants-->
        <div class="row-establishments">
        @foreach($restaurants as $restaurant)
        
            <div class="card">
                <img class="card-img" src="{{$restaurant->photo}}">
                <div class="overlay">
                    <div class="shop-name">
                        <a href="{{route('establishment.show', $establishment->id)}}">{{$restaurant->name}}</a>
                        <br>
                        <i>{{$restaurant->openAt}} - {{$restaurant->closeAt}}</i>
                    </div>
                </div>
                <h3>{{$restaurant->name}}</h3>
                <p>{{$restaurant->phone}}</p>
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
