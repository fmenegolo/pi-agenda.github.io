@extends('layouts.main')

@section('title', 'Agenda Escolar')

@section('content')
    <h1>
        Teste agenda laravel
    </h1>    

    <div id="search-container" class="col-md-12">
        <h1>
            Busque a Aula
        </h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>
            Proximos Eventos
        </h2>
        <p class="subtitle">Veja os eventos dos proximos dias</p>
        <div id="cards" class="container row">
            @foreach ($events as $event)
                <div id="card" class="col-md-3">
                    <img src="" alt="{{ $event->title }}">
                    <div class="card-body"></div>
                        <p class="card-date"> 
                            11/11/2023
                        </p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants"> X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber Mais</a>                   
                </div>                            
            @endforeach
        </div>
    </div>

@endsection