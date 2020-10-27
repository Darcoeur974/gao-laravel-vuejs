<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'lastname' => 'OLYMPE',
                'firstname' => 'Zeus',
            ],
            [
                'lastname' => 'OLYMPE',
                'firstname' => 'Athena',
            ],
            [
                'lastname' => 'OLYMPE',
                'firstname' => 'Aphrodite',
            ],
            [
                'lastname' => 'CHTHONIEN',
                'firstname' => 'Hades',
            ],
            [
                'lastname' => 'CHTHONIEN',
                'firstname' => 'Nyx',
            ],
        ]);
    }
}
