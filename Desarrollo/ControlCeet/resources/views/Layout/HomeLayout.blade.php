<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.css ') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('IMG/logoSena.ico')}}">
    <title>Document</title>
</head>
<body>

@yield('Inicio')


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script text="text/javascript" src="{{ asset('libs/materialize/js/materialize.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>