<?php
require_once( $_SERVER["DOCUMENT_ROOT"]."/config.php"); // 설정 파일 호출 , 상대경로도 해도됨
require_once(FILE_LIB_DB); // DB관련 라이브러리

// GET
// if(REQUEST_METHOD === "GET") {
//     // GET 처리는 화면에 보이는거하기 때문에 굳이 안적어도됨 지금은 아무처리안함
// }
// else

// POST 처리
if (REQUEST_METHOD === "POST") {
    try {
        // 파라미터 획득
        $title = isset($_POST["title"]) ? trim($_POST["title"]) : ""; // title 획득
        $content = isset($_POST["content"]) ? trim($_POST["content"]) : ""; // content 획득
        
        // 파라미터 에러 체크
        $arr_err_param = [];
        if($title === ""){
            $arr_err_param[] = "title";
        }
        if($content === ""){
            $arr_err_param[] = "content";
        }
        if(count($arr_err_param) > 0) {
            // 예외 처리
            throw new Exception("parameter Error : ".implode(", ", $arr_err_param));
        }

        // DB Connect
        $conn = my_db_conn(); // PDO 인스턴스

        // Transaction 시작
        $conn->beginTransaction();

        // 게시글 작성 처리
        $arr_param = [
            "title" => $title
            ,"content" => $content
        ];
        $result = db_insert_boards($conn, $arr_param);
        
        // 글 작성 예외처리
        if($result !== 1) {
            throw new Exception("Insert Boards count");
        }
        // 커밋
        $conn->commit();

        // 리스트 페이지로 이동
        header("Location: list.php");
        exit;
    } catch (\Throwable $e) {
        if(!empty($conn)) {
            $conn->rollBack();
        }
        echo $e->getMessage();
        exit;
    } finally {
        if(!empty($conn)) {
            $conn = null;
        }
    }

}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>작성 페이지</title>
<link rel="stylesheet" href="./css/common.css">
</head>

<body>
    <?php require_once(FILE_HEADER);  ?>
<main>
    <form action="./insert.php" method="post">
    <div class="main-middle">
    <div class="line-item">
        <label for="title" class="line-title">
        <div>제목</div>
        </label>
        <div class="line-content">
        <input type="text" name="title" id="title">
        </div>
    </div>
    <div class="line-item">
        <label for="content" class="line-title">
        <div class="line-title-textarea">내용</div>
        </label>
        <div class="line-content">
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
    </div>
    </div>
    <div class="main-bottom">
    <button type="submit" class="a-button small-button">작성</button>
    <button type="button"><a href="./list.php" class="a-button small-button">취소</a></button>
    </div>
    </form>
</main>
</body>

</html>

