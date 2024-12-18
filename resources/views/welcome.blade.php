<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{config('app.name')}}-@yield('title')</title>
<link rel="stylesheet" href="{{ asset('assets/app.css') }}">

</head>
<body>
    @include('navbar/navbar')
    @yield('content') 
    @include('script')
</body>
</html>