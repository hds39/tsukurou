<?php

namespace App\Http\Controllers\Data;

use App\Models\Datum;
use App\Models\DataDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlController extends Controller
{
    public function showPlForm(Datum $data)
    {
        //datum_idに紐づくdata_detailsを取得
        $datum_id = $data->id;
        $data_details = Datum::find($datum_id)->dataDetails;

        //データごとに追加した勘定項目を取得
        $unique_categories = DB::table('account_details')->where('datum_id', $data->id)->get();

        //勘定項目ごとの合計金額を取得
        $sum_balances = DB::table('data_details')->select(DB::raw('categories, sum(balance) as sum_balance'))->where('datum_id', $data->id)->groupBy('categories')->get();
        
        return view('data.pl', ['data_details' => $data_details, 'sum_balances' => $sum_balances, 'unique_categories' => $unique_categories]);
    }
    
}
