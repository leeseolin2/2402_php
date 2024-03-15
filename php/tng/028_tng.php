<?php
// 아래처럼 별을 찍어주세요.
// 예시)
// *****
// *****
// *****
// *****
// *****

for($i = 0; $i < 5; $i++){
    echo "****\n";
}

echo "\n";
echo "\n";
// 아래처럼 별을 찍어주세요.
// 예시)
// *
// **
// ***
// ****
// *****

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "\n";
}


// 아래처럼 별을 찍어주세요.
// 예시)
//     *
//    **
//   ***
//  ****
// *****

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "\n";
}

 //  for문 1개 + if 문 이용
$num = 5;
for($i = 1; $i <= $num; $i++) {
    $cnt_space = $num - $i;
    for($z = 1; $z <= $num; $z++){
        if($z <= $cnt_space) {
           echo " ";
        }
        else {
            echo "*";
        }    
    }
    echo "\n";
}

for($i =0; $i < $num; $i++){
    for( $z=$num-1; $z>=0; $z--){
        if( $z<=$i){
            echo "*";
        }
        else{
            echo " ";
        }
    }
    echo "\n";
}

// for문 2개 이용
for($i = 0; $i < $num; $i++) {
    // 공백찍는 for문
    for($z = 1; $z < $num - $i; $z++){
        echo " ";
    }
    //별 찍는 for문
    for($y = 0; $y <= $i; $y++){
        echo "*";
    }
    echo "\n";
} 
