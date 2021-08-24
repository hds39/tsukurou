<?php

namespace App\Http\Controllers\Data;

use App\Models\DataDetail;
use App\Models\Datum;
use App\Models\AccountDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BalanceController extends Controller
{
    public function showRegistrationForm(Datum $data)
    {
        $accounts_all = AccountDetail::all()->where('datum_id', null);
        $accounts = Datum::find($data->id)->accountdetails;
        return view('data.balance_register',['data' => $data, 'accounts' => $accounts, 'accounts_all' => $accounts_all]);
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
        $data_details->datum_id = $data->id;

        $data_details->save();

        return redirect()->route('data.balance-register', ['data' => $data]);
    }

    public function registerCategory(Request $request, Datum $data)
    {
        $request->validate([
            'account_items' => ['required', Rule::unique('account_details','account_items')->where('datum_id' ,$data->id)]
        ],
        [
            'account_items.required' => '勘定項目を入力してください',
            'account_items.unique' => '既に登録されています',
        ]);

        $account_details = new AccountDetail;
        $account_details->account_items = $request->account_items;
        $account_details->datum_id = $data->id;

        $account_details->save();

       

        return redirect()->route('data.balance-register', ['data' => $data, 'msg' => 'OK']);
        
    }
}
