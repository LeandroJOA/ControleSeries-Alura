<?php


namespace App\Http\Controllers;


class SeriesController extends Controller
{
    public function listarSeries () {
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
