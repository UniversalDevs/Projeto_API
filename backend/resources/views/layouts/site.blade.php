<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoMariaFelix</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/cssGeral.css') }}"
        media="screen" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div id="tudo">
        <header>
            <img src="{{ asset('dist/img/logo.PNG') }}" id="logo">

            <h1 class="float-l">

            </h1>

            <input type="checkbox" id="control-nav" />
            <label for="control-nav" class="control-nav"></label>
            <label for="control-nav" class="control-nav-close"></label>

            <nav class="float-r">
                <ul class="list-auto">
                    <li>
                        <a href="home.html" title="PaginaInicial">Página Inicial</a>
                    </li>
                    <li>
                        <a href="Projetos.html" title="Projetos">Projetos</a>
                    </li>
                    <li>
                        <a href="home.html" title="Voluntarios">Voluntários</a>
                    </li>
                    <li>
                        <a href="Contato.html" title="Contato">Contato</a>
                    </li>
                    <li>
                        <a href="Sobre.html" title="Sobre">Sobre</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="container">
          @yield('content')
        </div>
        <footer class="footer">
            <div class="cont">
                <div class="row">


                    <div class="footer-col">
                        <h4>O que procura?</h4>
                        <ul>
                            <li><a href="home.html">Voluntários</a></li>
                            <li><a href="Projetos.html">Projetos</a></li>
                            <li><a href="Contato.html">Contato</a></li>
                            <li><a href="#">Inscrever-se</a></li>
                            <li><a href="Sobre.html">Sobre Nós</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Siga-nos</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('dist/js/Carrosel.js') }}"></script>

</body>

</html>