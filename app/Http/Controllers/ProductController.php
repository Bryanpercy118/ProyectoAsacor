<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

    //
    public function index()
    {
        //index de clientes registrados
        
        $products = Product::orderBy('created_at','DESC')->get();
        return view ('products.index')->with('products',$products);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // es donde se actualiza un registro en especifico que proviene del método create
        $input=$request->all();
        Product::create($input);
        return redirect('product')->with('flash_message','Customer Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $customer= Product::find($id);
        return view('products.show')->with('products',$customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::find($id);
        return view('products.edit')->with('products',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}