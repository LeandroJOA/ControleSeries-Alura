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

        // Abre a tag "ul"
        $html = "<ul>";
        // Percorre todo o array de series, e concatena cada um como um "li"
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        //Concatena o fechamento da tag "ul"
        $html .= "</ul>";

        //Retorna ao usuario o conteudo da variavel "$html"
        return $html;
    }
}
