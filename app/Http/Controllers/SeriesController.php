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
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        // OLD CODE
        /*
        // Retorna todos os dados da tabela "series"
        $series = Serie::all();
        */

        // Captura o item "mensagem" da sessão atual, criada pelo "store"
        $mensagem = $request->session()->get('mensagem');

        //Retorna ao usuario o conteudo da view "index" dentro de "series", passando como parametro o array "$series" e "$mensagem"
        return view('series.index', compact('series', 'mensagem'));
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
        $serie = Serie::create($request->all());

        // Adiciona o item "mensagem" a sessão atual
        $request->session()
            // flash - Flash Message, determina que este item será excluido após sua primeira utilização
            ->flash(
                'mensagem',
                "Serie {$serie->id} adicionada com sucesso ({$serie->nome})!"
            );

        return redirect()->route('listar_series');

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

    public function destroy(Request $request)
    {
        // Delete do banco a serie com mesmo id que o recebido pela requisição
        Serie::destroy($request->id);

        // Adiciona uma mensagem de sucesso a sessão atual
        $request->session()
            // flash - Flash Message, determina que este item será excluido após sua primeira utilização
            ->flash(
                'mensagem',
                "Serie excluida com sucesso!"
            );

        // Redireciona o usuario a pagina principal
        return redirect()->route('listar_series');
    }
}
