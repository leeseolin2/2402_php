<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // 게시글 타입 획득
        $type = 0;
        if($request->has('type')) {
            $type = $request->type;
        }

        // 게시글 조회
        $resultBoardList = Board::where('type', $type)->orderBy('created_at', 'DESC')->get();

        return view('boardIndex')->with('data',$resultBoardList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $insertData = $request->only('title', 'content', 'type');
        $insertData['user_id'] = Auth::id();
        $insertData['img'] = '/img/romi1.jpg'; // TODO수정

        $resultInsert = Board::create($insertData);
        return redirect()->route('board.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // 게시글 정보 획득
         $resultBoardInfo = Board::find($id);
         // $resultBoardInfo->auth_id = Auth::id();
 
         $responseData = $resultBoardInfo->getOriginal();
         $responseData['auth_id'] = Auth::id();
         Log::debug('json', $responseData);
         return response()->json($responseData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
