<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Establishments;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creo un nuevo objeto 'producto'
        $product = new Products;

        // Guardar imagen en servidor:

        /* Se guarda el nombre de la imagen con su extension
        $photoName = uniqid().$request->file('photo');
        $photoName = $photoName.'.'.$request->file('photo')->getClientOriginalExtension();
        // Guarda el path hasta la imagen
        $path = $request->file('photo')->storeAs($photoName, 'local');
        //$path->move(base_path('storage\app\img'.$photoName), 'img'.$photoName);
        $product->photo = $photoName;*/
        $file=$request->file('photo');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/img',$name);
        $product->photo = "/img"."/".$name;

        // Guardo cada parametro del formulario en el respectivo campo del objeto
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->link = $request->link;
        $product->establishment_id = $request->establishment_id;
        // Guardo el objeto
        $product->save();
        // Vuelvo a la vista establishment con un mensaje de confirmación de que se ha creado correctamente el producto
        return redirect()->route('establishment.show',$product->establishment_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Busco el producto con el id en cuestión
        $product = Products::find($id);
        return view('tienda')->with(['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Busca el producto
        $product = Products::find($id);
        // Actualiza el stock
        $product->stock = $request->input('stock');
        // Lo guarda
        $product->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Destruye el producto buscandolo por id
        Products::destroy($id);
        return back();
    }
}
