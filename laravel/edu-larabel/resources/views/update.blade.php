<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <div>
        <ul>
            <li>번호 : {{$data->id}}</li>
            <form action="{{route('boards.update',['board'=>$data->id])}}" method="post">
            @method('put')
            @csrf
                <li>
                    <label for="title">제목</label>
                    <input type="text" name="title" id="title" value='{{$data->title}}'>
                </li>
                <li>
                    <label for="content">내용</label>
                    <textarea name="content" id="content" cols="30" rows="10">{{$data->content}}</textarea>
                </li>
                <button type="button" onclick="location.href='{{route('boards.show',['board'=>$data->id])}}'">취소</button>
                <button type="submit">수정</button>
        </form>
        </ul>
    </div>
</body>
</html>
