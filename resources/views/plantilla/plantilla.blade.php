<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title> @yield('tituloPagina') </title>
</head>

<body>
    @yield('contenido')
</body>
<script src="{{ asset('/js/menu.js') }}"></script>
<script src="{{ asset('/js/dropdown-menu.js') }}"></script>

</html>
