<?php

namespace App\Http\Controllers;


use App\Models\Campeonato;
use App\Models\Equipe;
use App\Services\ObtemDadosBrasileirao;
use App\Services\SalvaDadosBrasileirao;

class CampeonatosController extends Controller
{

    public function serieA()
    {
        $campeonato = Campeonato::find(1);
        $classificacao = $campeonato->equipes()
            ->orderBy('pontos', 'desc')
            ->orderBy('vitorias', 'desc')
            ->orderBy('saldo_gols', 'desc')
            ->get();

        return response()->json($classificacao, 200, [], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function serieB()
    {
        $campeonato = Campeonato::find(2);
        $classificacao = $campeonato->equipes()
            ->orderBy('pontos', 'desc')
            ->orderBy('vitorias', 'desc')
            ->orderBy('saldo_gols', 'desc')
            ->get();
        return response()->json($classificacao, 200, [], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function salvar()
    {
        SalvaDadosBrasileirao::all();
    }

}
