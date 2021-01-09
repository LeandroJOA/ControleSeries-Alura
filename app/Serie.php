<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

// extends Model - Necessario para realizar a comunicação entre POO e Banco Relacional
class Serie extends Model
{
    // Linkando esta classe com a tabela em questão. OBS: Pode ser omitido quando a tabela é igual ao nome da classe em minusculo e no plural
    //protected $table = 'series';

    // Determina que não será necessario salvar dados de "updated_at" e "created_at"
    public $timestamps = false;

    // Define que a coluna "nome" da tabela pode ser preenchido atraves do "::create"
    protected $fillable = ['nome'];
}
