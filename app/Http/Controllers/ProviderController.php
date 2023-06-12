<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provider;
use App\Http\Requests\StoreproviderRequest;
use App\Http\Requests\UpdateproviderRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          //index de proveedores registrados
          
          $providers = Provider::all();
          return view ('providers.index')->with('providers',$providers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproviderRequest $request)
    {
         // es donde se actualiza un registro en especifico que proviene del método create
         $input=$request->all();
         Provider::create($input);
         return redirect('provider')->with('flash_message','Provider Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $providers= Provider::find($id);
        return view('providers.show')->with('providers',$providers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $providers=Provider::find($id);
        return view('providers.edit')->with('providers',$providers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproviderRequest  $request
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $provider=Provider::find($id);
        $input= $request->all();
        $provider->update($input);
        return redirect('provider')->with('flash_message','Provider Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        
        Provider::destroy($id);
        return redirect('provider')->with('flash_message','Provider Delete');
    

    }
}
