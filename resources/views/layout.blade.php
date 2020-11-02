<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('titulo.pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<img src="img3.png">
</head>
<body style="text-align:center;">
       <br> 
        <button> <a href="{{asset('welcome')}}">Menu</a></button>
        <button> <a href="{{asset('empresa')}}">Empresa</a></button>
        <button> <a href="{{asset('bicicletas')}}">Bicicletas</a></button>
        <button> <a href="{{asset('ondeestamos')}}">Onde Estamos</a></button>
        <button> <a href="{{asset('noticias')}}">Notícias</a></button>
        <button> <a href="{{asset('contactos')}}">Contacte-nos</a></button>
<br>
<h2><b>@yield('header')</b></h2>
        @yield('conteudo')


       <br><h2><b> @ Bike House 2020-2021</b></h2>
               <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')"></script>
</body>
</html>