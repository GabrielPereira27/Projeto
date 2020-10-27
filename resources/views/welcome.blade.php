<!DOCTYPE html>
<html>
<head>
    <title>Bike House</title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('jumbotrom.css')}}">
</head>
<body style="background-color:gray;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Bike House</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" arial-controls="navbarsExampleDefault" arial-expanded="false" arial label="Toggle navigation">
        <span class="navabar-toggle-icon"></span>           
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
             <a class="nav-link" href="welcome.blade.php">Menu<span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Empresa</a>       
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="criacaosites.html">Notícias</a>
                <a class="dropdown-item" href="marketing.html">Onde estamos</a>
            </div>  
            <li class="nav-item">
                <a class="nav-link" href="contactos.blade.php">Contacte-nos</a>      
            </li>
          </li>
        </ul>
    </div>
</nav>
    <main role="main">
        <div class=""></div>    
        <div class="jumbotrom">
        <div class="container">
            <h1 class="display-3">BIKE HOUSE - GUIMARÃES</h1>
            <img style="border-color:green; " height="450" src="img2.gif">
            <p>MELHOR LOJA DE BICICLETAS DO PAÍS!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
    </div>
        

        <hr>
    </div>
    </main>

    <footer class="container">
        <p>&copy; BIKE HOUSE 2020-2021</p>       
    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>