<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1>home</h1>
    <form action="/method" method="post">
        @csrf
    <button type="submit">post버튼</button>
</form>
    <form action="/method" method="post">
        @csrf
        @method('put')
    <button type="submit">put버튼</button>
</form>
    <form action="/method" method="post">
        @csrf
        @method('delete')
    <button type="submit">del버튼</button>
</form>
<a href="{{route('test.index')}}">테스트 깐트롤러</a>
</body>
</html>
