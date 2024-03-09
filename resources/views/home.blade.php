<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <link rel="icon" href=" {{ asset('public/images/favicon.ico')}}" type="images/ico">
    <title>Home</title>
</head>
<body>
    @include('includes.header');
    @include('includes.footer');
</body>
</html> 