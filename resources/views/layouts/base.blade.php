<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
    @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

    @include('layouts.header')

    <div class="container-fluid">
        @yield('main')
    </div>

    

    @include('layouts.footer')
    <script src="{{asset('js/boottrap.bundle.js')}}"></script>
</body>
</html>