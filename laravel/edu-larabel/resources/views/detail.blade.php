<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <table>
    <ul>
        <li>
            글번호 : {{$data->id}}
        </li>
        <li>
            제목 : {{$data->title}}
        </li>
        <li>
            내용 : {{$data->content}}
        </li>
        <li>
            조회수 : {{$data->hits}}
        </li>
        <li>
            수정일 : {{$data->updated_at}}
        </li>
        <li>
            작성일 : {{$data->created_at}}
        </li>
    </ul>
    </table>
    <button type="button" onclick="location.href='{{route('boards.index')}}'">리스트페이지</button>
    <button type="button" onclick="location.href='{{route('boards.edit',['board'=>$data->id])}}'">수정페이지</button>
    <form action="{{route('boards.destroy',['board'=>$data->id])}}" method="post">
    @csrf
    @method('delete')
        <button type="submit">삭제</button>
    </form>
</body>
</html>
