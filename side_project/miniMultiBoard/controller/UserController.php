<?php
namespace controller;

class UserController extends Controller {
    // 로그인 페이지로 이동
    protected function loginGet() {
        return "login.php";
    }

    // 로그인 처리
    protected function loginPost() {
        // 유저 입력 정보 획득
        $requesData = [
            "u_email" => $_POST["u_email"]
            ,"u_pw" => $_POST["u_pw"]
        ];

        // 유효성 체크
        // TODO : 나중에 구현

        // 유저정보 획득

        // 유저 존재유무 체크

        // 세션에 u_id 저장

        // 로케이션 처리
    }
}