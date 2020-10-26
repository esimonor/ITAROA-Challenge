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
        <div class="banner" style="filter: invert(100%);">
        </div>

        <!--Form-->
        <div class="add_forms">
            <form id="form" action="{{Route('products.store')}}" method="post">
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
            <script src="js/validator.js"></script>
        </div>
    <footer class="footer">
      <p>ITAROA &copy 2020</p>
    </footer>
    
    </body>
</html>
