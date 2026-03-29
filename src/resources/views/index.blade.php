@extends('layouts.app')

@section('css')
<title>商品一覧</title>
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

    <!-- @include('part.header') -->

    <div class="top-contents">
        <a class="top-page" href="/">おすすめ</a>
        <a class="my-list" href="/?tab=mylist">マイリスト</a>
    </div>

    <div class="item-contents">
        @foreach ($items as $item)
            <div class="item-content">
                <a class="item-link" href="/items/{{$item->id}}">
                    <img class="img-content" src="{{ asset('storage/'. $item->image) }}" alt="商品画像" width="300" height="300">
                </a>
                <div class="detail-content">
                    <p>{{$item->name}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection