<?php

namespace App\Http\Controllers;

use App\Exceptions\MyAutheException;
use App\Exceptions\MyValidateException;
use App\Models\User;
use App\Utils\MyToken as UtilsMyToken;
use MyUserValidate;
use MyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{  

    public function register(Request $request) {
    Log::debug('회원가입 시작');
    
    // 회원가입 정보 받아오기
    $requestData = $request->only([
        'account', 
        'password', 
        'password_chk', 
        'name', 
        'gender', 
        'profile',
    ]);
    
    // 유효성 체크
    $validator = MyUserValidate::myValidate($requestData);

    // 유효성 검사 실패시 처리
    if($validator->fails()) {
        Log::debug('register Validation Error', $validator->errors()->all());
        throw new MyValidateException('E01');
    }

    // 비밀번호 확인 로직 추가
    if ($requestData['password'] !== $requestData['password_chk']) {
        throw new MyValidateException('E21');
    }

    // 이미지 파일 처리
    if ($request->hasFile('profile')) {
        $file = $request->file('profile');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('profile'), $fileName);
        $profilePath = '/profile/' . $fileName;
    } else {
        $profilePath = null; // 이미지가 없을 경우 처리
    }

    // 유저 정보 준비
    $insertData = [
        'id' => MyToken::getValueInPayload($request->bearerToken(), 'idt'),
        'account' => $requestData['account'],
        'password' => bcrypt($requestData['password']),
        'name' => $requestData['name'],
        'profile' => $profilePath, // 이미지 파일 경로 설정
        'gender' => $requestData['gender'],
    ];

    
        // 유저 정보 insert
        $userInfo = User::create($insertData);

        $responseData = [
            'code' => '0',
            'msg' => '',
            'data' => $userInfo
        ];

        // // 토큰 발행
        // list($refreshToken) = MyToken::createTokens($UserInfo);

        //  // 리프래시 토큰 저장
        // MyToken::updateRefreshToken($tUserInfo, $refreshToken);

        return response()->json($responseData, 200);
    
}




    // 로그인
    public function login(Request $request)
    {
        Log::debug('start Login', $request->all());

        $requestData = [
            'account' => $request->account, 'password' => $request->password
        ];
        // 유효성 검사
        $resultValidate = MyUserValidate::myValidate($requestData);

        // 유효성 검사 실패 처리
        if ($resultValidate->fails()) {
            Log::debug('login Validation Error', $resultValidate->errors()->all());
            throw new MyValidateException('E01');
        }

        // 유저 정보 조회
        $resultUserInfo = User::where('account', $request->account)->withCount('boards')->first();

        // 미등록 유저 체크
        if (!isset($resultUserInfo)) {
            // 유저 없음
            throw new MyAutheException('E20');
        }

        // 패스워드 체크
        if (!(Hash::check($request->password, $resultUserInfo->password))) {
            throw new MyAutheException('E21');
        }

        // 토큰 발행
        list($accessToken, $refreshToken) = MyToken::createTokens($resultUserInfo);

        // 리프래시 토큰 저장
        MyToken::updateRefreshToken($resultUserInfo, $refreshToken);

        // reponse Data
        $reponseData = [
            'code' => '0', 'msg' => '인증 완료', 'accessToken' => $accessToken, 'refreshToken' => $refreshToken, 'data' => $resultUserInfo
        ];
        return response()->json($reponseData, 200);
    }

    /**
     * 로그아웃
     *
     * @param Illuminate\Http\Request $request
     *
     * @return response() json
     */
    public function logout(Request $request) {
        $id = MyToken::getValueInpayload($request->bearerToken(), 'idt');

        $userInfo = User::find($id);

        MyToken::removeRefreshToken($userInfo);

        $responseData = [
            'code' => '0'
            ,'msg' => ''
            ,'data' => $userInfo
        ];

        return response()->json($responseData, 200);
    }
    
    /**
     * 토큰 재발급
     * @param Illuminate\Http\Request $request
     * 
     * @return response() json
     */
    public function reissue(Request $request) {
        Log::debug('********** 토큰 재발급 시작 **********');
        $id = MyToken::getValueInPayload($request->bearerToken(),'idt');
        Log::debug('베어럴 토큰 : '.$request->bearerToken());
        Log::debug('유저 PK : '.$id);

        // 유저 정보 획득
        $resultUserInfo = User::find($id);
        Log::debug('유저 정보 : ', $resultUserInfo->toArray());

        // 유효한 유저 확인
        if(!isset($resultUserInfo)) {
            throw new MyAutheException('E20');
        }
        Log::debug('유효한 유저 확인 완료');

        // 리프래시 토큰 체크
        if($request->bearerToken() !== $resultUserInfo->refresh_token) {
            throw new MyAutheException('E23');
        }
        Log::debug('리프래시 토큰 체크 완료');

        // 토큰 발행
        list($accessToken, $refreshToken) = MyToken::createTokens($resultUserInfo);
        Log::debug('토큰 발행 완료');

        // 리프래시 토큰 저장
        MyToken::updateRefreshToken($resultUserInfo, $refreshToken);
        Log::debug('토큰 저장 완료');
        
        // reponse Data
        $reponseData = [
             'code' => '0', 'msg' => '인증 완료', 'accessToken' => $accessToken, 'refreshToken' => $refreshToken, 'data' => $resultUserInfo
        ];
         
        Log::debug('********** 토큰 재발급 완료 **********');
        return response()->json($reponseData, 200);
    }
}
