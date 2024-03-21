<?php
// method 부분에 get을 post라고 바꿔주면 된다 
print_r($_POST);
// print_r($_POST["chk"]);
// print_r($_POST["radio"]);


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
<form action="/146_http_method_post.php" method="post">
    <fieldset>
        <legend> 로그인</legend>
        <ul>
            <input type="hidden"  name="hidden" value="숨겨졌다">
            <input type="hidden"  name="method" value="DELETE">
        </li>
         <li>
             <label for="id">아이디</label>
            <input type="text"  name="id" id="id">
        </li>
        <li>
            <label for="ps">비밀번호</label>
            <input type="password" name="ps" id = "ps">
            <button type="submit">로그인</button> 
        </li>
        <li>
            <!-- name을 똑같은 값을 지정해줘야하고 값을 배열로 받을꺼라 [] 넣어줌 -->
        <label for="subway">SubWay</label> 
        <input type="checkbox" name="chk[]" id="subway" value="subway">
        <label for="pan">빵</label>
        <input type="checkbox" name="chk[]" id="pan" value="빵"> 
        <label for="do">도삭면</label>
        <input type="checkbox" name="chk[]" id="do" value="도삭면">
        </li>
        <li>
        <label for="m">남자</label> 
        <input type="radio" name="radio" id="m" value="남자">
        <label for="f">여자</label>
        <input type="radio" name="radio" id="f" value="여자"> 
         </li>    
         </fieldset>
        <br>
        <br>
        
</form>   

    
    
</body>
</html>