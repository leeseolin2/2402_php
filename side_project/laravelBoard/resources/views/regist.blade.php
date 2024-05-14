
@extends('inc.layout')
{{-- 타이틀 --}}
@section('title','회원가입')


{{-- 회원가입용 js --}}
@section('script')
<script src='/Js/regist.js' defer></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

{{-- 바디에 vh 클래스 부여 --}}
@section('bodyClassVh', 'vh-100')
{{-- <body class="vh-100"> --}}
{{-- @endsection --}}


@section('main')
<main class="d-flex justify-content-center align-items-center h-75">
    <form action="{{route('regist.store')}}" class="loginForm" method="post">
        @csrf
            {{-- 에러 메세지 표시 --}}
            @if ($errors->any())
            <div class="form-text text-danger">
                {{-- 에러 메세지 루프 처리 --}}
                @foreach($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach()
            </div>
        @endif
        <label for="name" class="form-label">이름</label>
        <input type="text" class="form-control mb-3" id="name" name="name">
        <label for="email" class="form-label">이메일</label>
        <span id="print-chk-email" class="float-end"></span>
        <button type="button" id="btn-chk-email" class="btn mb-3 float-end">중복 확인</button>
        <input type="text" class="form-control mb-3" id="email" name="email">
        <label for="password" class="form-label mb-3">비밀번호</label>
        <input type="text" class="form-control mb-3" id="password" name="password">
        {{-- <label for="password_chk" class="form-label mb-3">비밀번호 확인</label>
        <input type="text" class="form-control mb-3" id="password_chk" name="password_chk"> --}}
        <button id="my-btn-complete" type="submit" disabled= "disabled" class="btn mb-3">완료</button>
        <a href="{{route('get.login')}}" class="btn mb-3 my-btn  float-end ">취소</a>
    </form>
</main>
@endsection
   