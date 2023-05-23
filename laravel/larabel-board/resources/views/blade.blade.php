{{-- 상속받음 --}}
@extends('layout.layout')
{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
@section('title','자식타이틀')

{{-- 처리해야하는 코드가 많을 경우에는, @section~@endsection 에 소스코드를 기재 --}}
@section('content')
<hr>
    <h2>콘텐츠 세션입니다</h2>
    <p>가나다라</p>
    <p>콘텐츠 끝</p>
@endsection

@section('test')
<hr>
<h2>자식의 세션입니다</h2>
@endsection

{{-- 조건문 --}}
@section('if')
<hr>
    @if($data['gender']==='W')
        <span>WWW</span>
    @elseif($data['addr']==='대구')
        <span>대구대구</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection
{{-- 반복문 --}}
@section('for')
<hr>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span><br>
    @endfor
@endsection

@section('foreach')
<hr>
    @foreach($data as $key => $value)
            {{-- 루프의 총계수가 나옴 몇번째 루프인지 나옴 --}}
        <span>{{$loop->count.'>>'.$loop->iteration}}</span><br>
        <span>{{$key}} : {{$value}}</span><br>
    @endforeach
@endsection

{{-- foreach와 forelse의 경우, $loop변수가 생성되고 사용 할 수 있다. --}}
@section('forelse')
<hr>
    @forelse($data2 as $key => $value)
        <span>{{$key}} : {{$value}}</span><br>
    @empty
        <span>잘못된 정보입니다</span>
    @endforelse
@endsection

