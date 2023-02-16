<?php

namespace App\Http\Controllers;
use App\Models\Financa;

use Illuminate\Http\Request;

class apiFinanca extends Controller
{
    public function index() {
        $financas = Financa::all();
        return response()->json(['financas'=> $financas]);
    }

    public function saveFinanca(Request $params) {
        $financa = new Financa;

        $financa->descricao = $params->descricao;
        $financa->valor = $params->valor;
        $financa->tipo = $params->tipo;

        if ($financa->save()) {
            return response()->json(['msg'=> 'Financa salva com sucesso']);
        } else {
            return response()->json(['msg'=> $financa->save()]);
        }

    }
}
