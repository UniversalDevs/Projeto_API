@extends('layouts.site')
@section('content')
@foreach($projetos as $projeto)
    <section class="Projeto1">
        <div class="control_800">
            @if($projeto->media)
                <img src="{{ $projeto->media->fullpatch() }}" class="float-r" id="FotoProjeto" />
            @endif
            <h2 class="Titulo">{{ $projeto->nome }}</h2>
            <br>
            <p>
                <strong>Descrição: </strong>{{ $projeto->descricao }}
            </p>
            <p class="Informacoes">
                <a href="{{route('projetos.projeto',$projeto->slug)}}" class="btn btn-primary">Ver Mais</a>
            </p>
        </div>
    </section>
@endforeach
@endsection