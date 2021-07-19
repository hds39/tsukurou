<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Data_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'data_id' => 1,
            'date' => '2021/07/19',
            'categories' => '消耗品費',
            'balance' => '100',
        ];
        DB::table('data_details')->insert($param);
    }
}
