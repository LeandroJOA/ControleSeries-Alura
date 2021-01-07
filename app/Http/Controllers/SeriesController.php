<?php


namespace App\Http\Controllers;


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

        // Array com series
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        //Retorna ao usuario o conteudo da view "index" dentro de "series", passando como parametro o array "$series"
        return view('series.index', compact('series'));
    }
}
