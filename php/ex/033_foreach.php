<?php
// foreach : 배열을 루프하는데 특화된 반복문, 배열의 길이만큼 루프
$arr = [9,8,7,6,5];

// 배열의 값만 이용할 경우
foreach($arr as $val){
    echo $val."\n";
}

// 배열의 키와 값 모두 이용할 경우
foreach($arr as $key => $val) {
    echo "key : $key, value: $val\n";
}

$arr =[
    ["name" => "홍길동", "age" => 20, "gender" => "남자"]
    ,["name" => "갑순이", "age" => 20, "gender" => "여자"]
    ,["name" => "갑돌이", "age" => 30, "gender" => "남자"]
];

// name의 나이는 age이고, 성별은 gender입니다.
foreach($arr as $item) {
    echo $item["name"]."의 나이는 ".$item["age"]."이고, 성별은 ".$item["gender"]."입니다.\n";
}


$arr2 = [
    "name" => "홍길동"
    , "age" => "20"
    , "gender" => "남자"
];

// 아래의 배열에서 foreach를 이용해 아래처럼 출력해 주세요.
// ID List
// meerkat1
// meerkat2
// meerkat3
$arr = [
	["id" => "meerkat1", "pw" => "php504"]
	,["id" => "meerkat2", "pw" => "php504"]
	,["id" => "meerkat3", "pw" => "php504"]
];

echo "ID List\n";
foreach($arr as $item){
    echo $item["id"]."\n";
}

// 배열의 값중 가장 큰 수를 구해주세요.
// 예시)
$arr2 = [4,5,7,3,2,9];
$min = $max = $arr2[0];
// 위의 배열 중 가장 큰 수인 9가 출력 되어야 합니다.
$srt = "";  // 값 초기화
$obj = null; // 값 초기화
$arr = 0; // 값 초기화
$arr = [4,5,7,3,2,9];
$max_num = 0;
$min_num = $arr[0];
foreach($arr as $val) {
    // MAX 값
    if($max_num < $val) {
        $max_num = $val;
    }
    // 최소값
    if($min_num > $val){
        $min_num = $val;
    }
}
echo $max_num."\n";
echo $min_num;
echo "\n";

