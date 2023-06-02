@extends('layout.layout')

@section('title','Login')

@section('contents')
@include('layout.errors')
    <form action="{{route('user.loginpost')}}" method="post">
        @csrf
        <label for="email">이메일 : </label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">PW : </label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit">Login</button>
    </form>
@endsection
