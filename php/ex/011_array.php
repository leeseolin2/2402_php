<?php
// 배열(array) 
// 하나의 변수에 여러개의 값을 담울 수 있는 데이터 타입
$arr1 = array(1,2,3); // 5.4 이전에 배열을 선언하던 방식
print_r($arr1);

$arr2 = [4, 5, 6]; // 5.4 버전에 추가된 배열 선언 방식
print_r($arr2);

// 배열에서 특정 요소의 값 획득
echo $arr2[0];

// 배열에 요소(item) 추가
$arr2[] = 100;
print_r($arr2);

// 배열의 특정 요소의 값 변경
$arr2[1] = 300;
print_r($arr2);

// 음식종류 5개 이상을 인덱스 배열로 만들어주세요.
$arr_food = [
    "햄버거"
    ,"짬뽕"
    ,"우동"
    ,"라면"
    ,"돈까스"
    ,"매밀소바"
];
print_r($arr3);
echo $arr_food[2];
echo "\n";

// 연관 배열
$arr_asso = [
    "name" => "홍길동"
    ,"age" => 20

];
print_r($arr_asso);

echo $arr_asso["name"];

// $arr_asso 키 (gender), 값(여자)인 아이템을 추가
$arr_asso["gender"] = "여자";
print_r($arr_asso);

$arr_asso["gender"] = "남자";

// 다차원 배열(다중 배열) : 배열 안에 배열
$arr_multi = [
    [1 , 2, 3]
    ,[
        4 
        ,[10,11,12]
        ,6
    ]
    ,7
];

echo $arr_multi[1][2];
echo $arr_multi[2];
echo $arr_multi[1][1][1];

$arr_result =[
    ["name" => "홍길동", "age" => 20]
    ,["name" => "갑돌이", "age" => 99]
    ,["name" => "갑순이", "age" => 15]
];
echo $arr_result[1]["name"];
echo $arr_result[2]["age"];

echo "\n";
// 배열의 길이
$arr = [1,2,3,4,5];

// count : 배열의 길이를 반환하는 함수
echo count($arr);
echo count($arr_result); // 다차원 배열은 [] 이거 숫자로 3개라고 나옴
echo count($arr_result[0]); // [0] 배열 안에 2개가 잇어서 두개라고 나옴

// unset() : 배열의 특정 아이템 삭제
unset($arr[2]); // 키 정렬은 따로 X 2번 키가 없어짐
print_r($arr);

// 배열의 정렬
// asort() : 배열의 값을 기준으로 오름차순 정렬
$arr = [5,4,3,8,1]; // 변수에 새로운 값을 주는걸 재정의라함
asort($arr);
print_r($arr);
// arsort() : 배열의 값을 기준으로 내림차순 정렬
arsort($arr);
print_r($arr);
// ksort() : 배열의 키를 기준으로 오름차순 정렬
ksort($arr);
print_r($arr);

// krsort() : 배열의 키를 기준으로 내림차순 정렬
krsort($arr);
print_r($arr);

// 키는 요리명, 값은 주재료 하나 로 인루어진 배열을 만들어주세요.(배열 길이는 4)
$arr_food = [
    ["name" => "콩나물무침", "주재료" => "콩나물"]
    ,["name" => "마라탕", "주재료" => "마라"]
    ,["name" => "팟타이", "주재료" => "숙주"]
    ,["name" => "잡채", "주재료" => "당면"]
];
echo count($arr_food);
print_r($arr_food);

$arr_foodn = [
    "팟타이" => "쌀면"
    ,"돈까스" => "돼지"
    ,"치킨" => "닭"
    ,"피자" => "치즈"
];
echo count($arr_foodn);
print_r($arr_foodn);

// 피자의 주재료를 밀가루,토마토,치즈,바질
$arr_foodn["피자"] = ["밀가루","토마토","치즈","바질"];
print_r($arr_foodn);
