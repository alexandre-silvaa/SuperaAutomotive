<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';

    protected $fillable = [
        'nome',
        'placa',
        'marca',
        'modelo',
        'versao',
        'ano',
        'user_id'
    ];

    /* ************************** Relationships ************************** */

     public function manutencoes()
    {
        return $this->hasMany(Manutencao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* ****************************** Methods **************************** */

}
