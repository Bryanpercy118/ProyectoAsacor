@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align:center;padding:1em 0;">
                <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3666304"><span style="color:gray;">Hora actual en</span><br />Valledupar, Colombia</a></h3>
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=America%2FBogota" width="100%" height="115" frameborder="0" seamless></iframe>
            </div>
            <div class="alert alert-success" role="alert" style="text-align:center;">
                Inicio de sesión exitoso
            </div>
        </div>
    </div>
</div>

@endsection
