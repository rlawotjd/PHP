<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    로그인페이지입니다
    @include('layout.errmsg')
    <form action="{{route('users.loginPost')}}" method="post">
		@csrf
		<label for="email">Email : </label>
		<input type="text" name="email" id="email">
		<label for="password">password : </label>
		<input type="password" name="password" id="password">
		<br><br>
		<button type="submit">Login</button>
		<button type="button" onclick="location.href = '{{route('users.registration')}}'">Registration</button>
	</form>
</body>
</html>
