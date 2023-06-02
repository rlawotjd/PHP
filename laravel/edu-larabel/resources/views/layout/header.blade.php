<h2>헤더입니다</h2>

@auth
    <div><a href="{{route('users.logout')}}">로그아웃</a></div>
    <div><a href="{{route('users.edit')}}">회원정보 수정</a></div>
@endauth

@guest
    <div><a href="{{route('users.login')}}">로그인</a></div>
@endguest
