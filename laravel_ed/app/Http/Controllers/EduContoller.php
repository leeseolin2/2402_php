<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduContoller extends Controller
{
    public function index() {
        $arr = [
            'id' => 1
            ,'name' => '홍길동'
            ,'tel' => '01012345678'
        ];
        return view('edu')->with('gender','F')->with('data', $arr)->with('data2', []);
    }
}
