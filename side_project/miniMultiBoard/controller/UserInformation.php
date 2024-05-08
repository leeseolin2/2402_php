<?php

namespace controller;

use model\UsersModel;
use lib\UserValidator;

class UserInformation extends Controller
{
    
    protected $arruserList = [];
    // 정보수정 페이지로 이동
    protected function user_information() {
        $requestData = [
            "u_id" => $_SESSION["u_id"]
        ];
    
        $userInfo = new UsersModel();
        $this->arruserList = $userInfo->userList($requestData);
        
        // 뷰로 전달할 변수를 연관 배열로 반환합니다.
        return "information.php";

    }
    
    

    // 정보 변경 메소드 추가
    protected function ChangingInformation() {
    $requestData = [
        "u_id" => isset($_SESSION["u_id"]) ? $_SESSION["u_id"] : "",
        "u_pw" => isset($_POST["u_pw"]) ? $_POST["u_pw"] : "",
        "u_name" => isset($_POST["u_name"]) ? $_POST["u_name"] : ""
    ];
    
    // 유효성 체크
    $resultValidator = UserValidator::chkValidator($requestData);
    if (count($resultValidator) > 0) {
        $this->arrErrorMsg = $resultValidator;
        return "information.php";
    }
    
    // 사용자 정보 가져오기
    $userInfo = new UsersModel();
    $paramArr = ["u_id" => $_SESSION["u_id"]];
    $userData = $userInfo->userList($paramArr);

    if (!empty($userData)) {
        // 비밀번호 암호화
        $requestData["u_pw"] = $this->encryptionPassword($requestData["u_pw"], $userData[0]["u_email"]);

        // 사용자 정보 업데이트
        $modelUsers = new UsersModel();
        $success = $modelUsers->updateUserInfo($requestData);

        if ($success) {
            // 정보 수정이 성공하면 목록 페이지로 리다이렉션
            header("Location: /board/list");
            exit;
        } else {
            $this->arrErrorMsg = ["회원 정보 수정에 실패했습니다."];
            return "information.php";
        }
    } else {
        // 사용자 정보가 없는 경우에 대한 처리
        $this->arrErrorMsg = ["사용자 정보를 찾을 수 없습니다."];
        return "information.php";
    }
}

    // 비밀번호 암호화
    private function encryptionPassword($pw, $email)
    {
        return base64_encode($pw.$email);
    }

    
}
