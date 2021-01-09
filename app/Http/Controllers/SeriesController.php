<?php


namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        // Retorna a URL responsavel por chamar essa função
        //echo $request->url();

        // Retorna o valor contido em "parametro" passado pela URL
        //echo $request->query('parametro');

        // Retorna, em forma de array, todo os parametros passados pela URL
        //var_dump($request->query());
        //exit();

        // Realiza uma query das linhas contidas em "series", as ordernando pela coluna "nome", e captura esses dados
        $series = Serie::query()->orderBy('nome')->get();

        // OLD CODE
        /*
        // Retorna todos os dados da tabela "series"
        $series = Serie::all();
        */

        //Retorna ao usuario o conteudo da view "index" dentro de "series", passando como parametro o array "$series"
        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // Recebe o nome enviado pela requisição
        $nome = $request->nome;

        // Preenche todas as colunas de "series" com todos os dados enviados pela requisição
        // OBS: O campo com o dado enviado deve possuir o mesmo nome que a coluna na tabela
        Serie::create($request->all());

        return redirect('/series');

        // OLD CODE
        /*
        // Preenche a coluna "nome" com o nome enviado pela requisição
        Serie::create([
            'nome' => $nome
        ]);
        */

        // OLD CODE
        /*
        // Instancia uma nova Serie
        $serie = new Serie();
        // Preenche a coluna "nome" com o nome enviado pela requisição
        $serie->nome = $nome;
        */

    }
}
