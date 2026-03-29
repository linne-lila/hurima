<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    @yield('css')
</head>

<body>
    <div class="header">
        <div class="header-img">
            <img class="img-logo" src="/css/images/COACHTECHヘッダーロゴ.png" alt="ヘッダーロゴ">
        </div>

        <div class="search">
            <input class="keyword" type="text" name="keyword" placeholder="何をお探しですか">
        </div>

        <div class="button-content">
            @if (Auth::check())
                <form action="/logout" method="post">
                @csrf
                    <button class="logout">ログアウト</button>
                </form>
            @else
                <a class="login" href="/login">ログイン</a>
            @endif

            <a class="mypage" href="/mypage">マイページ</a>
            <button class="button-put-up" type="submit">出品</button>
        </div>
    </div>

  <main>
    @yield('content')
  </main>
</body>

</html>