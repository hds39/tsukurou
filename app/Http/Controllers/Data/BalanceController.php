<?php

namespace App\Http\Controllers\Data;

use App\Models\DataDetail;
use App\Models\Datum;
use App\Models\AccountDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function showRegistrationForm(Datum $data)
    {
        $accounts = AccountDetail::all();
        return view('data.balance_register',['data' => $data, 'accounts' => $accounts]);
    }
    //

    public function register(Request $request , Datum $data)
    {
        //インスタンス作成
        $data_details = new DataDetail();
        //inputで入力したデータを渡して、保存
        $data_details->date = $request->date;
        $data_details->categories = $request->categories;
        $data_details->balance = $request->balance;
        $data_details->data_id = $data->id;

        $data_details->save();

        return redirect()->route('data.balance-register', ['data' => $data]);
    }

    public function registerCategory(CategoryRequest $request, Datum $data)
    {
        $account_details = new AccountDetail;
        $account_details->account_items = $request->account_items;

        $account_details->save();

        return redirect()->route('data.balance-register', ['data' => $data, 'msg' => 'OK']);
    }
}
