<?php
function my_sum($num1, $num2){ // $num1,2 :매개변수
    return $num1 + $num2; 
}

// echo my_sum(32, 54); 함수호출

// 파라미터 default 설정

/**
 * 두 숫자를 더하는 함수
 * 
 * @param int $num1 더할 첫번째 숫자
 * @param int $num2 더할 두번째 숫자, default 10
 * @return int 합계
 */
function my_sum2(int $num1, int $num2 = 10){
    return $num1+ $num2;
}

echo my_sum2(5);

// -, *, /, % 를 해주는 각각의 함수를 만들어 주세요.

function num(int $num3, int $num4){
    return $num3 - $num4;
}

function num2(int $num3, int $num4){
    return $num3 * $num4;
}

function num3(int $num3, int $num4){
    return $num3 / $num4;
}

function num4(int $num3, int $num4){
    return $num3 % $num4;
}

function test(string $str){
    $str = "test()에서 변경"; // 이 $str은 이안에서 쓸수잇음
}

$str = "처음 정의"; // 이 $str은 전역 함수 위에꺼랑 아애 다른거
test($str); // 처음정의
echo $str;  // 처음 정의

// 함수 안에있는 $str을 쓰고싶을때 할수있는 방법 
function test2(string $str){
    $str = "test2()에서 변경"; 
    return $str;
}

$str = test2($str);
echo $str;

// 가변 길이 파라미터 : 데이터 타입은 배열
// ...이랑 $numbers = func_get_args(); 같은거고, php 5.5이하에서 가변파라미터 받아올수있음
function my_sum_all(...$numbers){
    print_r($numbers);
}
my_sum_all(3,5,2);
echo "\n";
echo "\n";
// 파라미터로 받은 모든 수를 더하는 함수를 만들어 주세요 
function my_sum_all2(...$numbers){
    $sum = 0; // 합계 저장용 변수, 합계를 저장하기 때문에 숫자 0으로 초기화

    // 파라미터 루프해서 값을 획득 후 더하기
   foreach($numbers as $val){
     $sum += $val ;
   }
   //합계리턴
   return $sum;
}

echo my_sum_all2(3,4,5,6,7);
echo "\n";
echo "\n";
// 참조전달
function test_v($num) {
    $num = 3;
}

function test_r(&$num) { // & 참조전달로써 쓰겟다라는 의미 
    $num = 5;
}

$num = 0;
test_r($num);
echo $num;
echo "\n";
// 참조 변수 
$a = 1;
$b = &$a;
$a = 3;

echo $b;