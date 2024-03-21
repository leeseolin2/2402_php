<?php
// localhost/파일명?name=hong&gender=m  // name은 키 hong 값 여러 파라미터를 연결할땐 &쓰면댐
// 도메인     패스   파라미터      // 중요한 정보는 getmethod로 X

// print_r($_GET);
// print_r($_GET["name"]);
// $question = "";
// if(isset($_GET["q"])){  
//     $question = $_GET["q"];
// }

// 삼항연산자
// 변수 = 조건식 ? 참일 경우 : 거짓일 경우
$question = isset($_GET["q"]) ? $_GET["q"] : ""; // 슈퍼글로벌 변수 $_GET 연상배열로 값을 가져옴


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>검색어를 입력하세요.</h1>
    <form action="/146_http_method_get.php" method="get">
      <input type="text" name="q">
      <button type="submit">검색</button>   
    </form>
    <br>
    <br>
    <?php
    if($question !== ""){
       echo "<h2>당신의 검색어는 <span style=\"color:red;\"> $question </span>입니다.</h2>";
    }
    
    ?>
</body>
</html>