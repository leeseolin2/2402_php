<?php
// 변수(Variable)
$str = "안녕 php"; // 오른쪽을 왼쪽에 담음
echo $str;

// 한글로도 설정이 가능하나, 사용하지 말자
$숫자1 = 1;
echo $숫자1;

// 변수명에 대소문자 구분
$Num = 1;
$num = 2;
echo $Num, $num;

// 네이밍 기법
// 스네이크 기법
$user_name;

// 카멜 기법
$userName;

echo "\n"; // 개행

// 상수 : 절대 변하지 않는 값
define("USER_AGE", 20);  // 앞이 상수명 뒤는 값

// define("USER_AGE", 20); // 상수는 재정의 x

echo USER_AGE;  // 상수는 앞에 $ 없음


echo "\n"; // 개행

// 점심메뉴
// 탕수육 9000원
// 햄버거 10000원
// 빵 2000원

$menu = "점심메뉴\n";
$tang = "탕수육 9000원\n";
$hamberger = "햄버거 10000원\n";
$bbang = "빵 2000원\n";

echo $menu, $tang, $hamberger, $bbang;

// 스왑
$swap1 = "곤드레밥";
$swap2 = "짜장면";
$tmp = "";

$tmp = $swap1;
$swap1 = $swap2;
$swap2 = $tmp;

echo $swap1, $swap2;