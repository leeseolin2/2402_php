<?php
namespace controller;

class BoardController extends controller{
    // 게시글 리스트
    protected function listGet() {
        return "boardList.php";
    }
}