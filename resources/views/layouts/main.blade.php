<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>
        {{--Fonte do Google--}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{--CSS Bootstrap--}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        {{--CSS da Aplicação--}}
        <link rel="stylesheet" href="/css/styles.css">

        {{--JS da Aplicação--}}
        <script src="/js/script.js"></script>       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/assets/logo.jpg" alt="EducaMais">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                HomePage
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">
                                Cadastrar Aulas
                            </a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                Minhas Aulas
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" 
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">                                    
                                    Sair
                                </a>
                            </form>
                        </li>        
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">
                                Entrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">
                                Registrar
                            </a>
                        </li>    
                        @endguest                       
                    </ul>                   
                </div>            
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="rom">
                    @if(session('msg'))
                        <p class="msg">
                            {{ session('msg') }}
                        </p>                     
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>Agenda Escolar &copy; 2023 </p>
        </footer>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>        
    </body>
</html>
