<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoManutencao extends Model
{
    protected $table = 'tipos_manutencao';

    protected $fillable = [
        'descricao',
        'ativa'
    ];

    /* ************************** Relationships ************************** */

    public function manutencoes()
    {
        return $this->hasMany(Manutencao::class);
    }

    /* ****************************** Methods **************************** */
}
