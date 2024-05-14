@extends('inc.layout')

{{-- 타이틀 --}}
@section('title','게시판')

{{-- 자바스크립트 파일 --}}
@section('script')
    <script src="/Js/board.js" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

{{-- 메인 --}}
@section('main')
    <div class="text-center">
    <h2>500 에러</h2>
    <h3>정상적으로 처리되지 않았습니다.</h3>
    <h3>잠시 후 다시 시도해 주십시오.</h3>
    <a href="{{route('get.login')}}">로그인 페이지로 돌아가기</a>
    </div>
@endsection
