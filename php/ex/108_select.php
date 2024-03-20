<?php
require_once("./lib_db.php");

try {
    $conn = db_conn(); // PDO객체 리턴 함수 호출
   // 쿼리 작성

   // placehoder 셋팅이 없는 경우
   // $sql = // 한줄에 적어도 되지만 현업에서는 대부분 밑으로 따로 적어줌
   // " SELECT "
   // ." * "
   // ." FROM "
   // ." employees "
   // ." LIMIT "
   // ." 10 " // del 240320 수정할땐 코멘트 남겨두고 밑에 추가를 함 
   // ." 5 " // add 240320
   // ;

  // $stmt = $conn->query($sql); // 쿼리 준비 + 실행
  // $result = $stmt->fetchAll(); // 질의 결과 패치
   $limit = 5;
  // placehoder 셋팅이 필요한 경우
   $sql = " SELECT * FROM employees LIMIT :limit OFFSET :offset"; // : 뒤에 limit 이건 나중에 limit 값을 주겟다는것
   $arr_prepare = [
      "limit" => $limit
      ,"offset" => 10
   ];
   $stmt = $conn->prepare($sql); // 쿼리 준비
   $stmt->execute($arr_prepare);  // 쿼리 실행
   $result = $stmt->fetchAll();  // 질의 결과 패치

   print_r($result);   
} catch (\Throwable $e) {
    echo "예외 발생 :".$e->getMessage()."\n";
} finally {
    $conn = null; // PDO 파기
}
echo "-----------------------\n";
// 시반 10003,10004의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해서 출력

try {
   // POD 인스턴스 생성
    $conn = db_conn();
    // SQL 작성
    $sql = " SELECT 
     emp.emp_no
    , emp.birth_date
   , sal.salary
   FROM employees emp
    JOIN salaries sal
    ON emp.emp_no = sal.emp_no
   AND sal.to_date >= DATE(NOW())
    WHERE emp.emp_no BETWEEN :between AND :and ";
    $arr_prepare = [
       "between" => 10003
      , "and" => 10004
    ];
    $stmt = $conn->prepare($sql); // 쿼리 준비
    $stmt->execute($arr_prepare);  // 쿼리 실행
    $result = $stmt->fetchAll();  // 질의 결과 패치
     
    print_r($result);   
} catch (\Throwable $e) {
    echo "예외 발생 :".$e->getMessage()."\n";
} finally {
    $conn = null; // PDO 파기
}

try {
    $arr_emp_no = [10003, 10004];
    // POD 인스턴스 생성
     $conn = db_conn();
     // SQL 작성
     $sql = 
     " SELECT " 
     ." emp.emp_no " 
     ." ,emp.birth_date " 
     ." ,sal.salary" 
     ." FROM employees emp" 
     ." JOIN salaries sal" 
     ." ON emp.emp_no = sal.emp_no" 
     ." AND sal.to_date >= NOW()" 
     ." WHERE "
      //  ." emp.emp_no IN(:emp_no1, :emp_no2) " 
    ."emp.emp_no IN( :emp_no)"
    ;

     $arr_prepare = [
       //  "emp_no1" => $arr_emp_no[0]
      //  , "emp_no2" => $arr_emp_no[1]
      "emp_no" => implode(",", $arr_emp_no) // imploade 가 문자열을 합해줌
     ];
     $stmt = $conn->prepare($sql); // 쿼리 준비
     $stmt->execute($arr_prepare);  // 쿼리 실행
     $result = $stmt->fetchAll();  // 질의 결과 패치
      
     print_r($result);   
 } catch (\Throwable $e) {
     echo "예외 발생 :".$e->getMessage()."\n";
 } finally {
     $conn = null; // PDO 파기
 }

$arr = [10003, 10004 ,10005];
var_dump(implode(",",$arr)); 
 