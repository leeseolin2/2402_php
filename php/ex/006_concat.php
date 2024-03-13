<?php
//  연결 연산자
$str1 = "안녕,";
$str2 = "PHP!!";
$num = 1111; 
echo $str1.$str2.(string)$num; // 데이터타입 생각해서 num은 앞에 넣어줌
echo "\n";

// 출력 : "안녕, 하세요!~"
$str1 = "안녕";
$str2 = "하세요!";

echo $str1.",".$str2."~";
