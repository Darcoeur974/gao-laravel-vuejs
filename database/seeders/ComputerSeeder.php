<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            [
                'name' => 'Ordinateur-1',
            ],
            [
                'name' => 'Ordinateur-2',
            ],
            [
                'name' => 'Ordinateur-3',
            ],
        ]);
    }
}
