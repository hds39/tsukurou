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

    //全データ共通の勘定項目を登録
    public function run()
    {
        $param = [
            'id' => 1,
            'account_items' => '売上金額',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 2,
            'account_items' => '期首商品棚卸高',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 3,
            'account_items' => '仕入金額',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 4,
            'account_items' => '期末商品棚卸高',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 5,
            'account_items' => '租税公課',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 6,
            'account_items' => '荷造運賃',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 7,
            'account_items' => '水道光熱費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 8,
            'account_items' => '旅費交通費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 9,
            'account_items' => '通信費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 10,
            'account_items' => '広告宣伝費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 11,
            'account_items' => '接待交際費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 12,
            'account_items' => '損害保険料',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 13,
            'account_items' => '修繕費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 14,
            'account_items' => '消耗品費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 15,
            'account_items' => '減価償却費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 16,
            'account_items' => '福利厚生費',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 17,
            'account_items' => '給料賃金',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 18,
            'account_items' => '外注工賃',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 19,
            'account_items' => '利子割引料',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 20,
            'account_items' => '地代家賃',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 21,
            'account_items' => '貸倒金',
        ];
        DB::table('account_details')->insert($param);

        $param = [
            'id' => 22,
            'account_items' => '雑費',
        ];
        DB::table('account_details')->insert($param);
    }
}
