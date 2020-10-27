<?php

namespace Database\Seeders;

use App\Models\ClientModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigns')->insert([
            [
                'id_client' => 1,
                'id_computer' => 1,
                'schedule' => '8h',
            ],
        ]);
    }
}
