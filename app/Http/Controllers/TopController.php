<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;
use App\Models\User;
use App\Models\Datum;

class TopController extends Controller
{
    public function index()
    {
        //ログインユーザーが登録しているデータを表示
        $id = auth()->id();
        $data = User::find($id)->data;
        
        return view('top',['data' => $data]);
    }

    public function createData(Request $request)
    {
        //インスタンス作成
        $datum = new Datum();
        //inputで入力したデータを渡して、保存
        $datum->name = $request->name;
        $datum->user_id = auth()->id();

        $datum->save();
        return redirect('/');
    }
}
