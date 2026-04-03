@extends('layouts.app')

@section('css')
<title>商品購入</title>
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')

<body>
    @include('part.header')

    <div class="all-contents">
        <div class="left-contents">
            <div class="left-contents_img">
                <img class="img-content" src="{{ asset('storage/'. $item->image) }}" alt="商品画像" width="400" height="400">
            </div>

            <div class="left-contents_info">
                <p class="name">{{$item->name}}</p>
                <p class="price">￥{{$item->price}}</p>
            </div>

            <div class="left-contents_pay">
                <h3>支払い方法</h3>
                <select name="select-pay">
                    <option value="" selected disabled>選択してください</option>
                    <option value="コンビニ払い">コンビニ払い</option>
                    <option value="カード払い">カード払い</option>
                </select>
            </div>

            <div class="left-contents_add">
                <h3>配送先</h3>
                <a href="/purchase/address/{item_id}">変更する</a>
                
            </div>
        </div>

        <div class="right-contents">
            <div class="right-contents_pay">
                <table>
                    <tr>
                        <td>商品代金</td>
                        <td>￥{{$item->price}}</td>
                    </tr>
                    <tr>
                        <td>支払い方法</td>
                        <td>echo $select-pay;</td>
                    </tr>
                </table>
            </div>

            <div class="purchase__button">
                <button class="purchase__button-submit" type="submit">購入する</button>
            </div>
        </div>

</body>