<?php


namespace App\Services;

use Illuminate\Support\Facades\DB;

abstract class SalvaDadosBrasileirao
{
    static public function all()
    {
        try {
            self::serieA();
            self::serieB();
        } catch (\Exception $error) {
            return "Falhou em salvar dados";
        }
    }

    static private function serieA()
    {
        $times = json_decode(ObtemDadosBrasileirao::serieA());

        foreach ($times as $key => $valor) {
            DB::table('equipes')
                ->where('nome', '=', $valor->nome)
                ->update([
                    'posicao' => $valor->posicao,
                    'pontos' => $valor->pontos,
                    'jogos' => $valor->jogos,
                    'vitorias' => $valor->vitorias,
                    'empates' => $valor->empates,
                    'derrotas' => $valor->derrotas,
                    'gols_pro' => $valor->gols_pro,
                    'gols_contra' => $valor->gols_contra,
                    'saldo_gols' => $valor->saldo_gols,
                    'aproveitamento' => $valor->aproveitamento
                ]);
        }
    }

    static private function serieB()
    {
        $times = json_decode(ObtemDadosBrasileirao::serieB());

        foreach ($times as $key => $valor) {
            DB::table('equipes')
                ->where('nome', '=', $valor->nome)
                ->update([
                    'posicao' => $valor->posicao,
                    'pontos' => $valor->pontos,
                    'jogos' => $valor->jogos,
                    'vitorias' => $valor->vitorias,
                    'empates' => $valor->empates,
                    'derrotas' => $valor->derrotas,
                    'gols_pro' => $valor->gols_pro,
                    'gols_contra' => $valor->gols_contra,
                    'saldo_gols' => $valor->saldo_gols,
                    'aproveitamento' => $valor->aproveitamento
                ]);
        }
    }
}
