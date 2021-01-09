{{-- Utiliza o conteudo do arquivo "layout" --}}
@extends('layout')

{{-- Substitui o "@yield" de nome "cabecalho" pelo conteudo desta "section" --}}
@section('cabecalho')
    Séries
@endsection

{{-- Substitui o "@yield" de nome "conteudo" pelo conteudo desta "section" --}}
@section('conteudo')
    {{-- route - Determina a rota a ser utilizada atraves de seu nome --}}
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>

    {{-- Exibe esta div de alerta, caso o item "mensagem" recebido pelo controller não esteja vazio --}}
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{-- Imprime a mensagem recebida --}}
        {{ $mensagem }}
    </div>
    @endif

    <ul class="list-group">
        <!-- Cria um item na lista para cada "serie", contida dentro de "series" -->
        @foreach($series as $serie)
            {{-- {{}} - Imprime o valor "nome" do array "series" recebido pelo controller }}--}}
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
                {{--
                onsubmit - Codigo javascrip para criar uma janela de confirmação
                addslashes - Evitar problemas ao imprimir nomes com aspas
                --}}
                <form action="/series/{{ $serie->id }}" method="post"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}')">
                    {{-- Token para permitir o envio de dados atraves de um formulario --}}
                    @csrf
                    {{-- Determina que o metodo desta requisição será do tipo "DELETE" --}}
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
