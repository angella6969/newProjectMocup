<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    @include('layout.link')
    
    <link rel="stylesheet" href="{{ asset('css/myCss.css') }}">
</head>
<script src="https://unpkg.com/feather-icons"></script>

<body>

    <div class="container">
        @yield('container')
    </div>

    @include('layout.script')
</body>

</html>
