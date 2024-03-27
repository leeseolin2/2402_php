<?php
// require_once( $_SERVER["DOCUMENT_ROOT"]."/config.php"); list파일에서 이미 설정파일을 불러오고 db 라이브러리를 그다음에 불러왓기때문에 안해도댐
function my_db_conn() {
    // 설정 정보
    $option = [
        PDO::ATTR_EMULATE_PREPARES    => FALSE
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // PDO 객체 생성 리턴
    return new PDO(MARIADB_DSN, MARIADB_USER, MARIADB_PASSWORD, $option);
}


function db_select_boards_cnt(&$conn) {
    $sql =  // sql 작성
        " SELECT "
        ."	COUNT(no) as cnt "
        ." FROM "
        ."  boards "
        ." WHERE "
        ." deleted_at IS NULL "
    ;						 

    // Query 실행
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll();

    // 리턴
    return (int)$result[0]["cnt"];
}

function db_select_boards_paging(&$conn, &$array_param) {
    $sql =  // sql 작성
    " SELECT "
    ." no "
    ." ,title "
    ." ,created_at "
    ." FROM "
    ." boards "
    ." WHERE "
    ." deleted_at IS NULL "
    ." ORDER BY "
    ." no DESC "
    ." LIMIT :list_cnt OFFSET :offset "
    ;									 

    // Query 실행
    $stmt = $conn->prepare($sql);
    $stmt->execute($array_param); 
    $result = $stmt->fetchAll();

    // 리턴
    return $result;
}

// insert row to boards 게시판 테이블 레코드 작성처리
function db_insert_boards(&$conn, &$array_param){
    // SQL
    $sql =
        " INSERT INTO boards( "					
        ." title "				
        . " ,content	"			
        . " ) "					
        ." VALUES (	"				
        ." :title "				
        ." ,:content "			
        . " ) "	
    ;	

    // Query 실행
    $stmt = $conn->prepare($sql);
    $stmt->execute($array_param); 

    // 리턴
    return $stmt->rowCount();
}

// pk로 게시글 정보 조회
function db_select_boards_no(&$conn, &$arr_param) {
    $sql =
        " SELECT "
        . " no "
        . " ,title "
        . " ,content "
        . " ,created_at	 "
        . " FROM "
        . " boards "
        . " WHERE "
        . " no = :no "
    ;
    
    // Query 실행
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr_param);
    $result = $stmt->fetchAll();

    // 리턴
    return $result;
}

// pk로 특정 게시글 삭제 처리
function db_delete_boards_no(&$conn, &$array_param){
    // SQL
    $sql =
    " UPDATE boards "
    ." SET "
    ." deleted_at = NOW() "
    ." WHERE "
    ." no = :no "
; 
//Query 실행
$stmt = $conn->prepare($sql);
$stmt->execute($array_param);

// return
return $stmt->rowCount();
}