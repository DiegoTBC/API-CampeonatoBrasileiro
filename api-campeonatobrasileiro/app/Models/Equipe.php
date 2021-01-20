<?php


namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = ['posicao', 'nome', 'pontos', 'jogos', 'vitorias', 'empates', 'derrotas', 'gols_pro', 'gols_contra', 'saldo_gols', 'aproveitamento' ];
    public $timestamps;

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
    }
}
