<?php
// try, catch, finally
try {
    // 예외가 발생할 처리를 작성
    $i = 5 / 0;
    echo "\$i의 값은 :"; // $i 앞에 \는 이스케이프 문자로 $i가 변수로 인식 안되게 할려고 쓴거다
    echo $i;
}
catch(\Throwable $e){ // $e에 에러메세지가 들어가있음
    // 예외가 발생했을 때 처리를 작성
    // catch문은 여러개로 쓸수있음 
    echo "예외 발생 :".$e->getMessage()."\n"; // $e->getMessage() 에러메세지를 나오게함
}
finally {
    // 예외 발생 여부와 상관없이 무조건 마지막 실행
    // finally는 생략 가능
    echo "finally\n";
}

echo "계산완료";
