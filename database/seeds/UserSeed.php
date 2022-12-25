<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::firstOrCreate([
            'name'      => 'Alexandre Silva',
            'email'     => 'alexandre@email.com',
            'password'  => Hash::make('j5aK8'),
            'celular'   => '61998060576',
            'active'    => 1        
        ]);
        $user2 = User::firstOrCreate([
            'name'      => 'Amanda Gomes',
            'email'     => 'amanda@email.com',
            'password'  => Hash::make('wRZCC'),
            'celular'   => '92981335089',
            'active'    => 1        
        ]);
        $user4 = User::firstOrCreate([
            'name'      => 'Marcelo Borges',
            'email'     => 'marcelo@email.com',
            'password'  => Hash::make('ZrOLS'),
            'celular'   => '9225209635',
            'active'    => 1        
        ]);
        $user4 = User::firstOrCreate([
            'name'      => 'João Luiz',
            'email'     => 'joao@email.com',
            'password'  => Hash::make('OcSrG'),
            'celular'   => '86989325289',
            'active'    => 1        
        ]);

        echo "Registros de usuários criados no sistema\n";
    }
}
