<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function lista() {
        if (view()->exists("ListaFornecedores")) {

            $fornecedores = DB::table('fornecedores') -> get();

            return view('ListaFornecedores.lista', compact('fornecedores'));
        }
    }
}
