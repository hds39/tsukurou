@extends('layouts.app')

@section('title')
    データ登録画面
@endsection

@section('content')
<div class="container">
    <div class="register-data">
        <form method="POST" action="{{ route('data.balance-register',  $data->id) }}" >
            @csrf
            <div class="form-group">
                <label for="date">日付</label>
                <input id="date" type="date" name="date">
            </div>
            <div class="form-group">
                <label for="categories">勘定項目</label>
                <select id="categories" name="categories">
                    @foreach($accounts as $account)
                    <option value="{{$account->account_items}}">{{$account->account_items}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="balance">収支</label>
                <input id="balance" type="text" name="balance">
            </div>
            <div>
                <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                    登録
                </button>



            </div>
        </form>
        <form method="POST" action="{{ route('data.balance-register-category', $data->id) }}">
            @csrf
            <div class="form-group">
                <label for="account_items">勘定項目を登録</label>
                <input id="account_items" type="text" name="account_items">
            </div>
            <div>
            <div>
                <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                    登録
                </button>
            </div>
        </form>
        @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	    @endif


@endsection