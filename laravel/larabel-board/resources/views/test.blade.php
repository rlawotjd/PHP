<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        test.index!!
    </h1>
    <h5>{{$name}}</h5>
    <a href="{{route("tasks.index")}}">Tasks.index</a>
    <a href="{{route("tasks.show",['task'=>13])}}/">Tasks.show</a>
    <a href="{{route("tasks.show",['task'=>999],"edit")}}/">Tasks.edit</a>
    <form action="{{route("tasks.destroy",['task'=>13])}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">tasks.destroy</button>
    </form>
    <form action="{{route("tasks.update",['task'=>13])}}" method="post">
    @csrf
    @method('put')
    <br>
    <button type="submit">tasks.update</button>
    <input type="hidden" name="id" value="php506">
    <input type="hidden" name="pw" value="pw">
    <input type="hidden" name="name" value="admin">
    </form>
    <form action="{{route("tasks.store")}}" method="post">
    @csrf
    <br>
    <label for="id">ID</label>
    <input type="text" name="id" value="">
    <label for="pw">PW</label>
    <input type="text" name="pw" value="">
    <label for="name">NAME</label>
    <input type="text" name="name" value="">
    <button type="submit">tasks.store</button>
    </form>


    </form>
</body>
</html>
