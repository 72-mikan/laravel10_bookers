<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
  </head>
  <body>
    <ul>
      <li><a href="{{ route('register') }}">新規登録</a></li>
      <li><a href="{{ route('login') }}">ログイン</a></li>
      <form method="post" action="{{ route('logout') }}" name="logout_btn">
        @csrf
      </form>
      <li><a href="javascript:document.logout_btn.submit()">ログアウト</a></li>
    </ul>
    @section('main')
    <p>既定のコンテンツ</p>
    @show
  </body>
</html>