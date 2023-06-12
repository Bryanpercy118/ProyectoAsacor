<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ADIS</title>
   @include('layouts.sidehead')

</head>

<body>
    <div id="app" class="wrapper">

       @guest
       @else
       @include('layouts.sidebar')
       @endguest
       <div id="content">
            @include('layouts.navbar')

            <main class="py-4">
             @yield('content')

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
