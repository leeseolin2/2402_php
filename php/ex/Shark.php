<?php
// namespace : 해당 파일의 주소를 할당
// 일반적으로 해당 파일의 패스(경로)를 적어줌
namespace php\ex;
class Shark{
    private $name;

    //생성자 별도로 생성자를 안만들경우 그냥 기본값이 들어간다
    public function __construct($name){ 
        $this->name = $name;             
    }
    
    // 메소드
    public function swim(){
        echo $this->name." 헤엄 칩니다.\n";
    }

    public function breathe(){
        echo $this->name." 호흡 한다.\n";
    }

    
}

$objShark = new Shark("상어"); // new가 인스턴스 생성
$objShark->swim();
$objShark->breathe();
