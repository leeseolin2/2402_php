<?php
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$pas = isset($_GET["ps"]) ? $_GET["ps"] : "";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      ul {
        list-style: none;
      }
    </style>
</head>
<body>
<form action="/146_tng.php" method="get">
    <fieldset>
        <legend> 로그인</legend>
     <ul>
         <li>
             <label for="id">아이디</label>
            <input type="text"  required name="id">
        </li>
        <li>
            <label for="ps">비밀번호</label>
            <input type="password" name="ps">
            <button type="submit">로그인</button> 
        </li>
         </fieldset>
        <br>
        <br>
        <?php
    if($id !== ""){
       echo "<h2>당신의 ID는 $id 입니다.</h2>";
    }
    if($pas!== ""){
       echo "<h2>당신의 PW는 $pas 입니다.</h2>";
    }
    
    ?> 
</form>   

    
    
</body>
</html>