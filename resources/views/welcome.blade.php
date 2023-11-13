@extends('layouts.main')

@section('title', 'Agenda Escolar')

@section('content')   
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
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/assets/imgEvents/{{$event->image}}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date"> 
                            {{ date('d/m/Y'), strtotime($event->date) }}
                        </p>
                        <h5 class="card-title">
                            {{ $event->title }}
                        </h5>
                        <p class="card-participants">
                            X Participantes
                        </p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            Saber Mais
                        </a>
                    </div>                   
                </div>                            
            @endforeach
            @if(count($events) == 0)
                <p>
                    Não há eventos disponiveis.
                </p>
            @endif
        </div>
    </div>

@endsection