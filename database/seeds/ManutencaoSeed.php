<?php

use Illuminate\Database\Seeder;
use App\Models\Manutencao;

class ManutencaoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manutencao1 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 1,
            'user_id'            => 1,
            'carro_id'           => 1,
            'valor'              => '199.90',
            'data'               => '2023/01/01',
            'observacao'         => 'Mal funcionamento do motor',
            'realizada'          => 0      
        ]);

        $manutencao2 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 2,
            'user_id'            => 1,
            'carro_id'           => 2,
            'valor'              => '89.90',
            'data'               => '2022/12/27',
            'observacao'         => 'Freios falhando',
            'realizada'          => 0      
        ]);

        $manutencao3 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 3,
            'user_id'            => 1,
            'carro_id'           => 3,
            'valor'              => '189.90',
            'data'               => '2022/12/21',
            'observacao'         => 'Cliente fará viagem',
            'realizada'          => 1     
        ]);

        $manutencao4 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 4,
            'user_id'            => 2,
            'carro_id'           => 4,
            'valor'              => '59.90',
            'data'               => '2022/12/29',
            'observacao'         => 'Verificar estado dos pneus',
            'realizada'          => 0      
        ]);

        $manutencao5 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 1,
            'user_id'            => 2,
            'carro_id'           => 5,
            'valor'              => '79.90',
            'data'               => '2022/12/20',
            'observacao'         => 'Problema ao acender faróis',
            'realizada'          => 1    
        ]);

        $manutencao6 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 2,
            'user_id'            => 2,
            'carro_id'           => 6,
            'valor'              => '889.90',
            'data'               => '2022/12/21',
            'observacao'         => 'Batida de frente - necessário trocar toda frente',
            'realizada'          => 1  
        ]);

        $manutencao7 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 3,
            'user_id'            => 3,
            'carro_id'           => 7,
            'valor'              => '49.90',
            'data'               => '2022/12/30',
            'observacao'         => 'Barulhos estranhos ao dar partida no carro',
            'realizada'          => 0      
        ]);

        $manutencao8 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 4,
            'user_id'            => 3,
            'carro_id'           => 8,
            'valor'              => '197.90',
            'data'               => '2022/12/29',
            'observacao'         => 'Analisar Ruídos',
            'realizada'          => 0      
        ]);

        $manutencao9 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 1,
            'user_id'            => 3,
            'carro_id'           => 9,
            'valor'              => '568.90',
            'data'               => '2022/12/17',
            'observacao'         => 'Falha no sistema elétrico',
            'realizada'          => 1
        ]);

        $manutencao10 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 2,
            'user_id'            => 4,
            'carro_id'           => 10,
            'valor'              => '789.90',
            'data'               => '2023/01/08',
            'observacao'         => 'Trocar embreagem',
            'realizada'          => 0      
        ]);

        $manutencao11 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 3,
            'user_id'            => 4,
            'carro_id'           => 11,
            'valor'              => '48.90',
            'data'               => '2023/01/03',
            'observacao'         => 'Trocar de óleo',
            'realizada'          => 0      
        ]);

        $manutencao12 = Manutencao::firstOrCreate([
            'tipo_manutencao_id' => 4,
            'user_id'            => 4,
            'carro_id'           => 12,
            'valor'              => '108.90',
            'data'               => '2022/12/28',
            'observacao'         => 'Analisar e monitorar temperatura do carro',
            'realizada'          => 0      
        ]);

        echo "Registros de manutenções criados no sistema\n";
    }
}
