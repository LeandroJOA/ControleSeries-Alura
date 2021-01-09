{{-- Utiliza o conteudo do arquivo "layout" --}}
@extends('layout')

{{-- Substitui o "@yield" de nome "cabecalho" pelo conteudo desta "section" --}}
@section('cabecalho')
    Adicionar Série
@endsection

{{-- Substitui o "@yield" de nome "conteudo" pelo conteudo desta "section" --}}
@section('conteudo')
    <form method="post">
        {{-- Token para permitir o envio de dados atraves de um formulario --}}
        @csrf
        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection

