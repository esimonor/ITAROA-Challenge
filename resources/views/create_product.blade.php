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
            <a href ="{{URL::route('welcome')}}\itaroa\establishment" class="trn nav_link" data-trn-key="link1">Establishment</a>
            <a href="#restaurant" class="trn nav_link" data-trn-key="link2">Restaurants</a>
            <a href="#location" class="trn nav_link" data-trn-key="link3">Location</a>
            <!-- LANGUAGE SELECTOR -->
            <select class="selectpicker" data-width="fit">
            <option class="idioma" data-name="en"><img src="{{URL::asset('img/logo.png')}}"></img>English</option>
            <option class="idioma" data-name="es"><img src="/img/es.png"></img>Español</option>
            <option class="idioma" data-name="eu"data-content='<span class="flag-icon flag-icon-mx"></span> Euskera'>Euskera</option>
            </select>

        <!-- Banner -->
        <div class="banner" style="filter: invert(100%);">
        </div>

        <!--Form-->
        <div class="add_forms">
            <form id="form" action="{{Route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="establishment_id" value="{{$establishment->id}}">
                <span>Name:</span><input required type="text" placeholder="Product name" id="name" name="name">
                <span>Description:</span><input required type="text" placeholder="Product description" id="description" name="description">
                <span>Price:</span><input required type="number" step="0.01" placeholder="Product price" id="price" name="price">
                <span>Stock:</span><input required type="number" placeholder="Product stock" id="stock" name="stock">
                <span>Image:</span><input type="file" placeholder="Product image" id="photo" name="photo">
                <span>Link:</span><input required type="text" placeholder="Product link" id="link" name="link">
                <input id="send_data" type="submit">
            </form>
            <script src="{{URL::asset('js/validator.js')}}"></script>
        </div>
    <footer class="footer">
      <p>ITAROA &copy 2020</p>
    </footer>
    
    </body>
</html>
