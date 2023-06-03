<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boards</title>
</head>
<body>
    <a href="{{route('boards.create')}}">작성</a>
    @forelse($list as $val)
        <div>{{$val->title}} : {{$val->content}}</div>
    @empty
<div>자료없음</div>
    @endforelse
</body>
</html>
