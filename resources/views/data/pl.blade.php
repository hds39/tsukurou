@extends('layouts.app')

@section('title')
　損益計算書
@endsection

@section('content')
<div class="container">
    <div class="card">
    <div class="row">
        <div class="col-lg-12">
            <div class="bs-component">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">科目</th>
                            <th scope="col">詳細</th>
                            <th scope="col">金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="col-3">売上金額</th>
                            <td class="col-5">売上金額(雑収入を含む)</td>
                            <td class="col-4"></td>
                        </tr>
                        <tr>
                            <th scope="row">売上原価</th>
                            <td>期首商品棚卸高</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>仕入金額</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>期末商品棚卸高</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">差引金額</th>
                            <td>売上利益</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">経費</th>
                            <td>租税公課</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>荷造運賃</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>水道光熱費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>旅費交通費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>通信費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>広告宣伝費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>接待交際費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>損害保険料</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>修繕費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>消耗品費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>減価償却費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>福利厚生費</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>給料賃金</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>外注工賃</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>利子割引料</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>地代家賃</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>貸倒金</td>
                            <td></td>
                        </tr>
                    

                        @foreach ($unique_categories as $unique_category)
                            @foreach ($sum_balances as $sum_balance)
                                @if ($sum_balance->categories === $unique_category->account_items)
                                <?php $unique_sum_balance = $sum_balance->sum_balance; ?>
                                <tr>
                                    <td></td>
                                    <td>{{$unique_category->account_items}}</td>
                                    <td>{{ $unique_sum_balance }}</td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach

                        <tr>
                            <th scope="row">総利益</th>
                            <td>営業利益</td>
                            <td></td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
    </div>


</div>

@endsection