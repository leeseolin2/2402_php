<?php
// 내장함수 : php안에 처음부터 들어가있는 함수
// trim(문자열) : 공백 제거
$str = "   홍길동  ";
echo trim($str);

// strtoupper(문자열) : 영어 대문자 출력
echo strtoupper("asdffe");
// strtolower(문자열) : 영어 소문자 출력
echo strtoupper("asdDEE");
echo "\n";
// str_replace(변경 할 문자부분, 변경 할 문자, 원본 문자) : 특정 문자를 치환
echo str_replace("cd","","abcdefg");
echo "\n";
// mb_substr(문자열, 시작위치, 출력할 개수) : 문자열을 시작위치에서 종료위치에서 잘라서 반환
$str = "홍길동갑순이";
echo mb_substr($str,1,4);
echo "\n";
echo mb_substr($str,2)."\n";

// mb_strpos(대상 문자열, 검색할 문자열) : 검색할 문자열이 있는 위치(int)가 반환
$str = "나는 홍길동 입니다.";
echo mb_strpos($str,"홍")."\n"; // 같은 글자가 있는경우 왼쪽에서 젤 첫번째 글자를 알려줌

if(mb_strpos($str,"ㄴ")){
    echo "포함됨";
}
else {
    echo "없음";
}
