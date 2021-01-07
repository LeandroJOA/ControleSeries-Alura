{{-- Utiliza o conteudo do arquivo "layout" --}}
@extends('layout')

{{-- Substitui o "@yield" de nome "cabecalho" pelo conteudo desta "section" --}}
@section('cabecalho')
    Séries
@endsection

{{-- Substitui o "@yield" de nome "conteudo" pelo conteudo desta "section" --}}
@section('conteudo')
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        <!-- Cria um item na lista para cada "serie", contida dentro de "series" -->
        @foreach($series as $serie)
            <li class="list-group-item"> <?= $serie; ?> </li>
        @endforeach
    </ul>
@endsection
