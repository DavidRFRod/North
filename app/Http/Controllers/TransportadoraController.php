<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transportadora;

class TransportadoraController extends Controller
{
    public function lista() {
        $transportadora = DB::table('transportadoras') -> get();
        return view('transportadora.index', ['data' => $transportadora]);
    }
    public function cadastrar() {
        return view('transportadora.cadastrar');
    }
    public function Registrar(Request $request) {



        $data = array();
        $data['IDTransportadora'] = $request -> id;
        $data['NomeConpanhia'] = $request -> nome;
        $data['Telefone'] = $request -> telefone;

        $data = DB::table('transportadoras') -> insert($data);

        return redirect()->route('transportadora.index')->
        with('success','Transportadora cadastrada com sucesso!');
    }

    public function Alterar($IDTransportadora){

        $transportadora = DB::table('transportadoras')-> where ('IDTransportadora', $IDTransportadora) ->first();
        return view('transportadora.alterar', ['transportadoras' => $transportadora]);
    }

    public function Update(Request $request, $IDTransportadora){

        $data = array();
        $data['IDTransportadora'] = $request -> id;
        $data['NomeConpanhia'] = $request -> nome;
        $data['Telefone'] = $request -> telefone;

        $data = DB::table('transportadoras')->where('IDTransportadora', $IDTransportadora) -> update($data);

        return redirect()->route('transportadora.index')->
        with('success','Transportadora alterada com sucesso!');

    }

    public function Delete($IDTransportadora){

        $transportadora = DB::table('transportadoras')->where('IDTransportadora', $IDTransportadora)->delete();
        return redirect()->route('transportadora.index',['data' => $transportadora])->
        with('success','Transportadora excluída com sucesso!');
    }

}


