<?php


namespace app\Services;


use App\Models\Equipe;
use Illuminate\Support\Facades\DB;

class SalvaDadosBrasileirao
{

    public function all()
    {
        $this->serieA();
        $this->serieB();
    }

    public function serieA()
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

    public function serieB()
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
