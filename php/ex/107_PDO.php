<?php
/**
 * filename : PDO.php
 * info : klqawdlkasjlddd
 * history
 *  v001 240320 cC25807 뭐변경
 *  v002 240321 cC45824 다른거 변경
 * 이런식으로 수정이나 변경이 될때 남겨둔다 회사마다 다름 
 */
// DB접속 정보
$dbHost      = "localhost"; // ip주소가 들어가는 곳 // DB Host
$dbUser      = "root";  // DB 계정명
$dbPw        = "php505"; // DB 패스워드
$dbName      = "employees"; // DB명
$dbCharset   = "utf8mb4"; // DB Charset
$dbDsn       = "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$dbCharset;   // dsn

//PDO 옵션
$opt = [
    // Prepared Statement로 쿼리를 준비할 때, PHP와 DB 어디에서 에뮬레이션 할지 여부를 결정
    PDO::ATTR_EMULATE_PREPARES    => false // DB에서 에뮬레이션 하게 설정
    // PDO에서 예외를 처리하는 방식을 지정
    ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
    // DB의 결과를 저장하는 방식
    ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로써 가져온다 PDO::FETCH_OBJ는 객체로 가져옴
];

$conn = new PDO($dbDsn, $dbUser, $dbPw, $opt);

$sql = // 한줄에 적어도 되지만 현업에서는 대부분 밑으로 따로 적어줌
    " SELECT "
    ." * "
    ." FROM "
    ." employees "
    ." LIMIT "
    // ." 10 " // del 240320 수정할땐 코멘트 남겨두고 밑에 추가를 함 
    ." 5 " // add 240320
    ;

$stmt = $conn->query($sql); // 쿼리 준비 + 실행
$result = $stmt->fetchAll(); // 질의 결과 패치
print_r($result);

$conn = null; // PDO 파기