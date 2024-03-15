<?php
// while 문
$cnt = 0;
while($cnt < 3) {
     echo "count: $cnt \n";
    $cnt++;
}

$cnt = 0;
while(true) {
   echo "$cnt \n";
   if($cnt === 3){
        break;
   }
   $cnt++;
}

// while를 이용해서 2단을 출력해 주세요.
// 2 X 1 =2 ...2 X 9 = 18
$num = 2;
$num2 = 1;

while(true){
    $num_print = $num."X".$num2."=".($num * $num2)."\n";
    echo $num_print;
    if($num2 === 9){
        break;
    }
    $num2++;
}

$num = 1;
while($num < 10) {
    echo "2 X ".$num."=".(2 * $num)."\n";
    $num++;
}

// 9단
$dan = 2;
while($dan < 10) {
    $multi_num= 1;
    echo $dan."단\n";
    while($multi_num < 10){
        echo $dan."X".$multi_num."=".($dan * $multi_num)."\n";
       $multi_num++;
    }
   $dan++;
}
