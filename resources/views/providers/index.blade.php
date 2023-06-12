@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin:10px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Proveedor de Producto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($providers as $item )


                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->nameProducto}}</td>
                                    

                                    <td>
                                        <a href="{{ url('/provider/' . $item->id) }}" title="View Provider"><button
                                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="{{ url('/provider/'.$item->id.'/edit') }}"
                                            title="Edit Customer"><button class="btn btn-danger btn-sm"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i>
                                                Edit</button></a>
                                              <form method="POST" action="{{ url('/provider' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE')}}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Provider" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
