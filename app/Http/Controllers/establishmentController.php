<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishments;
use App\Models\Products;


class establishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishments::where('type', 'shop')->get();
        $restaurants = Establishments::where('type', 'restaurant')->get();

        return view('welcome')->with(['establishments' => $establishments, 'restaurants' => $restaurants]);

    }

/* Funcion que nos redirige a establishments */
    public function prueba($prueba)
    {
        $establishments = Establishments::where('type', 'shop')->get();
        $restaurants = Establishments::where('type', 'restaurant')->get();

        return view('establishment')->with(['establishments' => $establishments, 'restaurants' => $restaurants]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        // Busco en la bd la tienda que disponga de dicho id
        $establishments = Establishments::find($id);
        // Relaciono el id de la tienda con el de los productos para guardar los productos de esta tienda
        $products = Products::where('establishment_id', $id)->get();

        return view('tienda')->with(['establishments' => $establishments, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function form($id)
    {
        $establishment_id = $request->establishment_id;
        $establishment = Establishments::find($establishment_id);
        return view('create_product')->with(['establishment' => $establishment]);
    }

    //Funcion para que nos lleve a la pagina de añadir un producto
    public function add_product($id)
    {
        $establishment = Establishments::find($id);
        return view('create_product')->with(['establishment' => $establishment]);
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
