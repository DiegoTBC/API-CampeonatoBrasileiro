<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $fillable = ['nome'];
    public $timestamps = false;
    protected $hidden = ['id'];


    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }
}
