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
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>       
    </head>
    <body>
        <Header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/assets/logo.jpg" alt="EducaMais">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">HomePage</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Cadastrar Aulas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Calendario</a>
                        </li>                    
                    </ul>                   
                </div>            
            </nav>

        </Header>
        @yield('content')
        <footer>
            <p>Agenda Escolar &copy; 2023 </p>
        </footer>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>        
    </body>
</html>
