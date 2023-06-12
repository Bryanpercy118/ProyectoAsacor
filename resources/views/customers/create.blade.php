@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="card" >
  <div class="card-body">
    <form action="{{ url('customer') }}" method="post">
      {!! csrf_field() !!}
      <label>Nombre</label></br>
      <input type="text" name="name" id="name" class="form-control" required autocomplete="name" autofocus></br>
      <label>Telefono</label></br>
      <input type="text" name="phone" id="phone" class="form-control" required autocomplete="phone" autofocus></br>
      <label>Direccion</label></br>
      <input type="text" name="address" id="address" class="form-control" required autocomplete="address" autofocus></br>
      <div>
      <label>Email</label></br>
      <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" required autocomplete="email" autofocus></br>

      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
      </div>
      <input type="submit" value="Registrar" class="btn btn-success"></br>
    </form>
  </div>
</div>
</div>
</div>
@endsection




