<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountDetailsTableSeeder extends Seeder
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
            'account_items' => '消耗品費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 2,
            'account_items' => '交通費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 3,
            'account_items' => '雑費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 4,
            'account_items' => '交際費',
        ];
        DB::table('account_details')->insert($param);
    }
}
