<?php
// 디렉토리 존재여부 체크 -> is_dir
if(is_dir("./test")){
    echo "이미 존재하는 디렉토리\n";
}
else {
    echo "없는 디렉토리\n";
    // 디렉토리(폴더) 생성 -> mkdir
  $result = mkdir("./test", 777); // 777이면 읽기 쓰기 게스트 계정 다됨 666 은 읽기쓰기만 444 읽기만가능
   if($result){
    echo "디렉토리 생성 성공\n";
   }
   else {
    echo "디렉토리 생성 실패\n";
  }
}

// 디렉토리 삭제
$result = rmdir("./test");
if($result) {
    echo "디렉토리 삭제 성공\n";
}
else {
    echo "디렉토리 삭제 실패\n";
}

// 디렉토리 열기 및 읽기
$open_dir = opendir("./"); // 디렉토리 열기
while($item = readdir($open_dir)) {
    echo $item."\n";
}

// 디렉토리 닫기
closedir($open_dir);

// --------------------

// 파일 오픈
$file = fopen("./999_test.php", "w"); // a는 쓰기전용 a로 하면 파일이 없으면 파일생성하고 쓰기전용으로 열림 r 읽기전용으로는 x
if($file){
    echo "파일 오픈 성공\n";
    // 파일에 데이터 쓰기
    fwrite($file, "글쓰기 테스트\n");
    // 파일 닫기
    fclose($file);
}
else {
    echo "파일 오픈 실패\n";
}

// 파일 삭제
unlink("./999_test.php");

