<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('boards.store')}}" method="post">
    @csrf
    <label for="title">제목</label>
    <input type="text" name="title" id="title">
    <label for="content">내용</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <button type="submit">완료</button>
    </form>
</body>
</html>
