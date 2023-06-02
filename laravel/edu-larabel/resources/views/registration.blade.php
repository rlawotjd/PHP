<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    @include('layout.errmsg')
    <form action="{{route('users.registrationPost')}}" method="post">
    @csrf
    <label for="name">이름</label>
    <input type="text" name="name" id="name">
    <label for="email">이메일</label>
    <input type="text" name="email" id="email">
    <label for="password">비밀번호</label>
    <input type="text" name="password" id="password">
    <label for="passwordChk">비밀번호 확인</label>
    <input type="text" name="passwordChk" id="passwordChk">
    <button type="submit">확인</button>
    </form>
</body>
</html>
