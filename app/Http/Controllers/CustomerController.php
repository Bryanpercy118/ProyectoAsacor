<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //

    public function index()
    {
        //index de clientes registrados
        $customers = Customer::orderBy('created_at','DESC')->get();
        return view ('customers.index')->with('customers',$customers);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
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
        Customer::create($input);
        return redirect()->back()->with('flash_message','Event Added!');

    }

    /**
     * @param  \App\Models\Customer  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $customers= Customer::find($id);
        return view('customers.show')->with('customers',$customers);
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
        $customers=Customer::find($id);
        return view('customers.edit')->with('customers',$customers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $input= $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message','Customer Update');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Customer::destroy($id);
        return redirect('customer')->with('flash_message','Student Delete');

    }
}
