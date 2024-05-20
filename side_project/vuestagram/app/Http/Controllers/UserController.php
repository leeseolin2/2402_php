<?php

namespace App\Http\Controllers;

use MyUserValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
   public function login(Request $request) {
        Log::debug('start Login', $request->all());

        $requestData = [
            'account' => $request->account
            ,'password' => $request->password
        ];
        // 유효성 검사
        $resultValidate = MyUserValidate::myValidate($requestData);

        // 유효성 검사 실패 처리
        if($resultValidate->fails()) {
            
        }
        // reponse Data
        $reponseData = [
            'code' => '0'
            ,'msg' => '인증 완료'
            ,'accessToken' => 'acessToken'
            ,'refreshToken' => 'refreshToken'
        ];
        return response()->json($reponseData, 200);
   }
}
