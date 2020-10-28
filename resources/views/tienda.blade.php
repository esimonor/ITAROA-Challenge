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

        <!--Logo and products-->
        <div id="shop_logo">
            <img src="{{URL::asset($establishments->photo)}}">
            <h3>{{$establishments->name}}</h3>
            <i>{{$establishments->openAt}} - {{$establishments->closeAt}}</i>
            <i>Phone: {{$establishments->phone}}</i>
        </div>

        <i style="width:100%" class="add_prod"><a  href="{{route('add_product', $establishments->id)}}">Añadir producto</a></i>
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
                </form>
                <form style="margin-left:25.5%;width:90%" action="{{ route('products.destroy',$product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width:50%" class="button">Eliminar</button>
                </form>
            </div>
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
