<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function eduUser() {
        // -------------
        // 쿼리 빌더
        // -------------
        // $result = DB::select('select * from users');
        // $result = DB::select("select * from users where name =:name", ['name' => '갑돌이']);
        // $result = DB::select("select * from users where name = ? or name= ?", ['갑돌이', '갑순이이']);
        // $result = DB::select("select * from users where deleted_at is not null ");

        // insert
        // $sql = 'insert into users(name, email, password) values(?, ?, ?)';
        // $data = ['김철수', 'admin4@admin.com', Hash::make('qwer1234!')];
        // DB::beginTransaction(); // 트랜잭션 시작
        // $result = DB::insert($sql, $data);
        // if(!$result){
        //     DB::rollBack(); // 롤백
        // } else {
        //     DB::commit(); // 커밋
        // }

        // update
        // $sql = 'update users set deleted_at = null where id = ?';
        // $data = [5];
        // $result = DB::update($sql, $data);

        // delete
        // $sql = 'delete from users where id = ? ';
        // $data = [7];
        // $result = DB::delete($sql, $data);

        // ----------------
        // 쿼리 빌더 체이닝
        // ----------------
        // users 테이블 모든 데이터 조회
        // select * from users;
        $result = DB::table('users')->get();
        
        // select * from users where name = ?; ['홍길동']
        // $result = DB::table('users')->where('name', '=', '홍길동')->get();

        // select * from users where id = ? or id= ?; [3,4]
        $result = DB::table('users')->where('id',3)->orwhere('id', 4)->get();
        
        
        // select * from users where name = '홍길동' and id = 3; ['홍길동', 3]
        $result = DB::table('users')->where('name', '홍길동')->where('id',3)->get();

        // select name from users order by name ASC;
        $result = DB::table('users')->select('name')->orderBy('name')->get();
        
        return var_dump($result);
    }
}
