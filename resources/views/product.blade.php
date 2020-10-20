<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--POPPER
        <script src="https://unpkg.com/@popperjs/core@2"></script>
    POPPER-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>


	<body> 
 		<!-- Navbar -->
        <nav class="navbar sticky-top navbar-light bg-light">
            <img width="10%" class="d-inline-block align-top" alt="" loading="lazy" src="img/logo.png">
            <a href="#stores">Shops</a>
            <a href="$restaurant">Restaurants</a>
            <a>Contact</a>
            <a>Language</a>
        </nav>

         <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
        <!-- END CAROUSSEL -->



        <a href="{{route('stores.show', $product->store_id)}}"><img src="/img/arrow_back_icon.svg"></a>
    	<div id="contenido">
        <!-- información del producto -->
        <section id="info" >
            <h2>{{$product->name}} </h2>
            <article id="description">
                <p>{{$product->description}}</p>
            </article>
            <article id="precio">
                <p>{{$product->price}}€</p>
            </article>
            <article id="enlace">
                <p>Visita la página oficial de la tienda, </p>
                <a href="{{$product->link}}"> aquí</a>
            </article>
            <form method="POST" action="{{ route('products.update',$product->id) }}" novalidate>
                @csrf
                @method('PUT')

                <label>Stock: <label></label><input type="number" name="stock" value="{{$product->stock}}" >
                <button type="submit" class="validar">Modificar</button>
            </form>
        </section>
        <section id="imagen">
            <article>
                <img src="{{$product->photo}}">
            </article>
        </section>   
    </div>
  </div>
</div>

</body>
</html>
