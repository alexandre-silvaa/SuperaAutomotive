<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Manutencao extends Model
{
    protected $table = 'manutencoes';

    protected $fillable = [
        'tipo_manutencao_id',
        'user_id',
        'carro_id',
        'valor',
        'data',
        'observacao',
        'realizada'
    ];

    /* ************************** Relationships ************************** */

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }

    public function tipoManutencao()
    {
        return $this->belongsTo(TipoManutencao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* ****************************** Methods **************************** */ 
}
