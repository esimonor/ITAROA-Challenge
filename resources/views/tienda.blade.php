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
            <img width="10%" class="d-inline-block align-top" alt="" loading="lazy" src="{{URL::asset('img/logo.png')}}">
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
            <img src="{{URL::asset($establishments->photo)}}">
            <h3>{{$establishments->name}}</h3>
            <i>{{$establishments->openAt}} - {{$establishments->closeAt}}</i>
            <i>Phone: {{$establishments->phone}}</i>
        </div>

        <i class="add_prod"><a href="{{route('add_product', $establishments->id)}}">Añadir producto</a></i>
        <div class="row-products">
        @foreach ($products as $product)
            <div class="card">
                <form method="POST" action="{{ route('products.update',$product->id) }}" novalidate>
                @csrf
                @method('PUT')
                <a href="{{$product->link}}">
                <img class="card-img" src="{{$product->photo}}">
                </a>
                <h4>{{$product->name}}</h4>
                <p>{{$product->description}}</p>
                <label>Stock: </label><input type="number" name="stock" value="{{$product->stock}}">
                <p style="border:1px solid black">{{$product->price}}€</p>
                <div>
                    <button type="submit" class="button">Modificar</button>
                    <form action="{{ route('products.destroy',$product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                    <button type="submit" class="button">Eliminar</button>
                        </form>
                </div>
            </div>
        </form>
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
