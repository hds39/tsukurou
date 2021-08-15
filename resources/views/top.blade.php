@extends('layouts.app')

@section('title')
　トップページ
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h3>新規データを作成</h3>
    </div> 
        <form method="POST" action="{{ route('create-data') }}" >
            @csrf
            <div class="form-group row justify-content-center">
                
                <input id="name" type="text" name="name">
                    <div>
                        <button type="submit" class="btn btn-block btn-secondary" style="width: 100px">
                            作成
                        </button>



                    </div>
            </div>
            
        </form>
    
        <div class="card">
        @if (!empty($data))
        <div class="text-center">
            <label for="data">
                <h4>作成済みのデータ</h4>
            </label>
        </div>
        @foreach ($data as $datum)
       <div class="list-group" style="max-width: 1200px;">
                <a class="list-group-item list-group-item-action" href="{{ route('data', $datum->id) }}">{{ $datum->name }}</a>
        </div>
        
       
        @endforeach
        @else
            <p>データを作成しましょう。</p>
        @endif
        </div>
   


</div>
    


@endsection