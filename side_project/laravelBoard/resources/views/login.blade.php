@extends('inc.layout')
{{-- 타이틀 --}}
@section('title','로그인')

{{-- 바디에 vh 클래스 부여 --}}
@section('bodyClassVh', 'vh-100')
{{-- <body class="vh-100"> --}}
{{-- @endsection --}}

{{-- 메인 --}}
@section('main')
<main class="d-flex justify-content-center align-items-center h-75">
    <form action="{{route('post.login')}}" class="loginForm" method="post">
        @csrf
        {{-- 에러 메시지 표시 --}}
        @if($errors->any())
        <div class="form-text text-danger">
            {{-- 에러 메세지 루프 처리 --}}
            @foreach($errors->all() as $error)
            <h5>{{$error}}</h5>
            @endforeach
        </div>
        @endif

        {{-- <input type="hidden" name="u_name" value="u_name"> --}}
        <label for="email" class="form-label">이메일</label>
        <input type="text" class="form-control mb-3" id="u_email" name="email" >
        <label for="password" class="form-label mb-3">비밀번호</label>
        <input type="text" class="form-control mb-3" id="password" name="password" >
        <button type="submit" class="btn mb-3">로그인</button>
        {{-- <a href="/user/regist" class="btn mb-3 float-end my-btn">회원가입</a> --}}
    </form>
</main>
@endsection
