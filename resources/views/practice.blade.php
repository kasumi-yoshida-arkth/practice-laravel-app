<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Practice Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <h1>Hello World</h1>
    {{-- コントローラーから渡されてきたデータを表示 --}}
    <div>{{ $data['message'] }}, I'm {{ $data['name'] }} !</div>
  </body>
</html>