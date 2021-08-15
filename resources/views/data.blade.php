@extends('layouts.app')

@section('title')
　登録データ
@endsection

@section('content')
<div class="container">
    <div class="form-group row justify-content-center">
        <a class="btn btn-outline-dark "href="{{ route('data.balance-register', $data->id) }}" role="button">収支を登録</a>
    </div> 

    <div class="card">
        <div class="list-group" style="max-width: 1200px;">
            <a class="list-group-item list-group-item-action" href="{{ route('data.journals' , $data->id)}}">仕訳帳</a>
            <a class="list-group-item list-group-item-action" href="{{ route('data.general-ledger', $data->id) }}">総勘定帳</a>
            <a class="list-group-item list-group-item-action" href="{{ route('data.bs', $data->id) }}">貸借対照表</a>
            <a class="list-group-item list-group-item-action" href="{{ route('data.pl', $data->id) }}">損益計算書</a>
            
        </div>
    </div>
</div>

@endsection