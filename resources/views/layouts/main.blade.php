<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <link rel="icon" href=" {{ asset('images/favicon.ico')}}" type="images/ico">
    <title>Dc Comics | @yield('title')</title>
</head>
<body>
    {{-- Header--}}
    @include('includes.header');

    {{-- Main content--}}
    <main>
        @yield('main-content')
    </main>

    {{-- Footer--}}
    @include('includes.footer');

    {{-- Scripts--}}
    @yield('scripts')
</body>
</html>
