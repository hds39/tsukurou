@extends('layouts.app')

@section('title')
    データ登録画面
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h6>該当する勘定項目がない場合はこちらから登録してください</h6>
    </div> 
    <div class="d-flex justify-content-center mt-3">
        
        <form method="POST" action="{{ route('data.balance-register-category', $data->id) }}">
                @csrf
                <div class="form-group row justify-content-center">
                    <div>
                        <label for="account_items"></label>
                        <input id="account_items" type="text" class="form-control" name="account_items">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                            登録
                        </button>
                    </div>    
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
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div class="card" style="width: 500px">
            <div class="card-body">
                    <div class="d-flex justify-content-center mt-3">

                        <form method="POST" action="{{ route('data.balance-register',  $data->id) }}"  class="p-5">
                            @csrf

                            
                            <div class="form-group">
                                <label for="date">日付</label>
                                <div class="form-group">
                                    <input id="date" type="date" class="form-control" name="date">
                                </div>
                                

                            
                            </div>

                            <div class="form-group">
                                <label for="categories">勘定項目</label>
                                <div class="form-group">
                                    <select multiple class="form-control" id="categories" name="categories">
                                        @foreach ($accounts_all as $account_all)
                                        <option value="{{$account_all->account_items}}">{{$account_all->account_items}}</option>
                                        @endforeach
                                        @foreach($accounts as $account)
                                        <option value="{{$account->account_items}}">{{$account->account_items}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label for="balance">収支</label>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input id="balance" type="number" class="form-control" name="balance">
                                        <div class="input-group-append">
                                            <span class="input-group-text">円</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                                    登録
                                </button>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     


@endsection