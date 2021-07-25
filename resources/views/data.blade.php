@extends('layouts.app')

@section('title')
　登録データ
@endsection

@section('content')

<a href="{{ route('data.journals' , $data->id)}}">仕訳帳</a>
<a href="{{ route('data.general-ledger', $data->id) }}">総勘定帳</a>
<a href="{{ route('data.bs', $data->id) }}">貸借対照表</a>
<a href="{{ route('data.pl', $data->id) }}">損益計算書</a>
<a href="{{ route('data.balance-register', $data->id) }}">データを登録</a>

@endsection