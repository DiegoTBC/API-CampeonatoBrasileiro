<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = ['posicao', 'nome', 'pontos', 'jogos', 'vitorias', 'empates', 'derrotas', 'gols_pro', 'gols_contra', 'saldo_gols', 'aproveitamento' ];
    public $timestamps = false;
    protected $hidden = ['id', 'campeonato_id', 'created_at', 'updated_at'];
    protected $casts = [
        'pontos' => 'integer',
        'jogos' => 'integer',
        'vitorias' => 'integer',
        'empates' => 'integer',
        'derrotas' => 'integer',
        'gols_pro' => 'integer',
        'gols_contra' => 'integer',
        'saldo_gols' => 'integer',
    ];

    public function getAproveitamentoAttribute($value)
    {
        $value = (int) $value;
        return "{$value}%";
    }

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
    }
}
