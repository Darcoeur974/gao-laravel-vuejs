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
                'id_computer' => 5,
                'schedule' => 8,
                'date' => '2020-10-27'
            ],
            [
                'id_client' => 2,
                'id_computer' => 3,
                'schedule' => 10,
                'date' => '2020-10-27'
            ],
            [
                'id_client' => 3,
                'id_computer' => 1,
                'schedule' => 9,
                'date' => '2020-10-27'
            ],
            [
                'id_client' => 4,
                'id_computer' => 2,
                'schedule' => 13,
                'date' => '2020-10-28'
            ],
            [
                'id_client' => 5,
                'id_computer' => 4,
                'schedule' => 16,
                'date' => '2020-10-28'
            ],
        ]);
    }
}
