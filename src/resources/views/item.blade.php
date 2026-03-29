@extends('layouts.app')

@section('css')
<title>商品詳細</title>
<link rel="stylesheet" href="{{ asset('css/item.css') }}" />
@endsection

@section('content')

<body>
    @include('part.header')
    
    <div class="all-contents">
        <div class="left-contents">
            <img class="img-content" src="{{ asset('storage/'. $item->image) }}" alt="商品画像" width="400" height="400">
        </div>

        <div class="right-content">
            <h1 class="name">{{$item->name}}</h1>
            <h6 class="brand">{{$item->brand}}</h6>
            <h3 class="price">￥{{$item->price}}（税込）</h3>

            <div class="logo-content">
                <div class="heart">
                    <img class="heart-logo" src="/css/images/ハートロゴ_デフォルト.png" alt="ハートロゴ" width="20" height="20">
                    <p class="heart-count">3</p>
                </div>
                <div class="hukidasi">
                    <img class="hukidasi-logo" src="/css/images/ふきだしロゴ.png" alt="ふきだしロゴ" width="20" height="20">
                    <p>1</p>
                </div>
            </div>

            <div class="purchase-button">
                <a class="purchase" href="/purchase/{{$item->id}}">購入手続きへ</a>
            </div>

            <h2 class="explanation">商品説明</h2>
            <p>{{$item->description}}</p>

            <h2 class="explanation">商品の情報</h2>
            <div>
                <label class="category">カテゴリー</label>
            </div>
            
            <div class="content-condition">
                <label class="condition">商品の状態</label>
                <p class="condition-comment">{{$item->condition}}</p>
            </div>

            <h2 class="content-comment">コメント(1)</h2>
            
            <div>
                <h4 class="comment">商品へのコメント</h4>
                <textarea class="item-comment" cols="45" rows="10" name="item-comment"></textarea>
            </div>

            <button class="button-comment" type="submit">コメントを送信する</button>
        </div>
    </div>
</body>