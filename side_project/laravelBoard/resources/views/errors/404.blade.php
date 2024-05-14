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
    <h2>404 에러</h2>
    <h3>존재하지 않는 페이지 입니다.</h3>
    <a href="{{route('get.login')}}">로그인 페이지로 돌아가기</a>
    </div>
@endsection
