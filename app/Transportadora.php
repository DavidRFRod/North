<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{

    protected $fillable = [
        'NomeConpanhia', 'Telefone',
    ];

    protected $primaryKey = 'IDTransportadora';
}
