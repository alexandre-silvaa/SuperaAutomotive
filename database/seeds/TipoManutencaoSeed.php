<?php

use Illuminate\Database\Seeder;
use App\Models\TipoManutencao;

class TipoManutencaoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoManutencao1 = TipoManutencao::firstOrCreate([
            'descricao' => 'Manutenção Detectiva',
            'ativa'     => 1 
        ]);

        $tipoManutencao1 = TipoManutencao::firstOrCreate([
            'descricao' => 'Manutenção Corretiva',
            'ativa'     => 1 
        ]);

        $tipoManutencao1 = TipoManutencao::firstOrCreate([
            'descricao' => 'Manutenção Preventiva',
            'ativa'     => 1 
        ]);

        $tipoManutencao1 = TipoManutencao::firstOrCreate([
            'descricao' => 'Manutenção Preditiva',
            'ativa'     => 1 
        ]);

        echo "Registros de tipos de manutenções criados no sistema\n";
    }
}
