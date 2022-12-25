<?php

use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carro1 = Carro::firstOrCreate([
            'nome'      => 'Gol',
            'placa'     => 'KLT-4623',
            'marca'     => 'Volkswagen',
            'modelo'    => 'G3',
            'versao'    => 'Plus',
            'ano'       => '2005',
            'user_id'   => 1
        ]);
        $carro2 = Carro::firstOrCreate([
            'nome'      => 'Spin',
            'placa'     => 'LYP-0121',
            'marca'     => 'Chevrolet',
            'modelo'    => 'Active',
            'versao'    => 'LTZ',
            'ano'       => '2018',
            'user_id'   => 1
        ]);
        $carro3 = Carro::firstOrCreate([
            'nome'      => 'Blazer',
            'placa'     => 'GDS-2791',
            'marca'     => 'Chevrolet',
            'modelo'    => 'Advantage',
            'versao'    => 'SS-10',
            'ano'       => '1997',
            'user_id'   => 1
        ]);
        $carro4 = Carro::firstOrCreate([
            'nome'      => 'Polo',
            'placa'     => 'MNB-5218',
            'marca'     => 'Volkswagen',
            'modelo'    => 'Hatch',
            'versao'    => 'Flex',
            'ano'       => '2009',
            'user_id'   => 2
        ]);
        $carro5 = Carro::firstOrCreate([
            'nome'      => 'Sandero',
            'placa'     => 'TVS-5198',
            'marca'     => 'Renault',
            'modelo'    => 'Zen',
            'versao'    => 'Flex',
            'ano'       => '2020',
            'user_id'   => 2
        ]);
        $carro6 = Carro::firstOrCreate([
            'nome'      => '2008 GRIFE',
            'placa'     => 'HVD-1253',
            'marca'     => 'Peugeot',
            'modelo'    => 'SUV',
            'versao'    => 'TURBO',
            'ano'       => '2023',
            'user_id'   => 2
        ]);
        $carro7 = Carro::firstOrCreate([
            'nome'      => 'GLA 200',
            'placa'     => 'KJA-7186',
            'marca'     => 'Mercedes-Benz',
            'modelo'    => 'Night',
            'versao'    => 'Flex',
            'ano'       => '2019',
            'user_id'   => 3
        ]);
        $carro8 = Carro::firstOrCreate([
            'nome'      => 'Fox',
            'placa'     => 'KJA-7187',
            'marca'     => 'Volkswagen',
            'modelo'    => 'Mi Total',
            'versao'    => 'Flex',
            'ano'       => '2014',
            'user_id'   => 3
        ]);
        $carro9 = Carro::firstOrCreate([
            'nome'      => 'Mobi',
            'placa'     => 'IDM-5640',
            'marca'     => 'Fiat',
            'modelo'    => 'Like',
            'versao'    => 'Fire',
            'ano'       => '2021',
            'user_id'   => 3
        ]);
        $carro10 = Carro::firstOrCreate([
            'nome'      => 'Prisma',
            'placa'     => 'HWS-4354',
            'marca'     => 'Chevrolet',
            'modelo'    => 'Sedan',
            'versao'    => 'LT',
            'ano'       => '2015',
            'user_id'   => 4
        ]);
        $carro11 = Carro::firstOrCreate([
            'nome'      => 'Compass',
            'placa'     => 'NEW-5274',
            'marca'     => 'Jeep',
            'modelo'    => 'Limited',
            'versao'    => 'Flex',
            'ano'       => '2017',
            'user_id'   => 4
        ]);
        $carro12 = Carro::firstOrCreate([
            'nome'      => 'Onix',
            'placa'     => 'NEQ-4777',
            'marca'     => 'Chevrolet',
            'modelo'    => 'Hatch',
            'versao'    => 'LT',
            'ano'       => '2019',
            'user_id'   => 4
        ]);

        echo "Registros de carros criados no sistema\n";
    }
}
