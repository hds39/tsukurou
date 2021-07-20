@extends('layouts.app')

@section('title')
　トップページ
@endsection

@section('content')
<div class="container">
    <div class="create-data">
        <form method="POST" action="{{ route('create-data') }}" >
            @csrf
            <div class="form-group">
                <label for="name">新規データ作成</label>
                <input id="name" type="text" name="name">
            </div>
            <div>
                <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                    作成
                </button>



            </div>
        </form>
    </div>
    <div class="card">
    @if (!empty($data))
        @foreach ($data as $datum)
        <label for="data">作成済みのデータ</label>
        <a href="{{ route('registed-data') }}">{{ $datum->name }}</a>
        @endforeach
    @else
        <p>データを作成しましょう。</p>
    @endif
    </div>
    


</div>
    


@endsection