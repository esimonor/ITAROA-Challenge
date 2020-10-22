
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

        <title>Itaroa</title>

    </head>
    <body>
        <a href="{{route('index')}}"><img src="/img/arrow_back_icon.svg"></a>
        <div>
            <!-- Imagen y nombre de la tienda -->
            <img id="logo" src="/{{$store->photo}}" alt="">
        </div>
        <div id="tabla">
            <!-- Listado de productos de la tienda -->
            <table>
                <tr>
                    <th id="codigo"><p>Codigo de producto</p></th>
                    <th id="nomb"><p>Nombre</p></th>
                    <th id="cant"><p>Stock</p></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td class="cod"><p>{{$product->id}}</p></td>
                    <td class="nombre"><p>{{$product->name}}</p></td>
                    <td class="stock"><p>{{$product->stock}}</p></td>
                    <td class="masinfo">
                        <a href="{{Route('products.show', $product->id)}}">
                            <img src="/img/more_icon.svg">
                        </a>
                    </td>
                    <td class="eliminar">
                       <form action="{{ route('products.destroy',$product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><img src="/img/delete_icon.png"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div>
            <!-- Botones de administración de productos de la tienda -->
            <form id="nuevo" action="{{Route('form')}}" method="get">
                @csrf
                <input type="hidden" name="store_id" value="{{$store->id}}">
                <button type="submit">Añadir producto</button>
            </form>
        </div>
    </body>
</html>