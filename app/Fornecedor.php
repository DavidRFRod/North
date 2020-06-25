<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = [
        'NomeCompanhia', 'NomeContato', 'TItuloContato','Endereco','Cidade','Regiao','cep','Pais','Telefone','Fax','Website'
    ];
}
