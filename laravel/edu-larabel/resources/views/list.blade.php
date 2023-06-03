<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
@include('layout.header')
    <a href="{{route('boards.create')}}">작성</a>
    <table>
        <tr>
            <th>
            글번호
            </th>
            <th>
            글제목
            </th>
            <th>
            조회수
            </th>
            <th>
            작성일
            </th>
            <th>
            수정일
            </th>
        </tr>
    @foreach($data as $item)
        <tr>
            <td>
                {{$item->id}}
            </td>
            <td>
                <a href="{{route('boards.show',['board'=>$item->id])}}">{{$item->title}}</a>
            </td>
            <td>
                {{$item->hits}}
            </td>
            <td>
                {{$item->created_at}}
            </td>
            <td>
                {{$item->updated_at}}
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
