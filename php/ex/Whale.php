<?php
class Whale {
    // 프로퍼티
    // 접근 제어 지시자
    // public : class 외부, 내부 어디에서 접근가능
    public $str;
    // private : class 내부에서만 접근 가능, 외부는 접근 불가능
    private $i;
    // protected : class 내에서만 접근 가능, 외부에서는 접근 불가능, 단 상속 관계에서는 접근 가능
    protected $boo;

    private $name;

    // 생성자 메소드
    public function __construct($name){ // 순서 2
       $this->name = $name;             // 순서 3
    }

    // getter, setter : private이나 protected로 설정된 프로퍼티에 접근을 위해 사용하는 메소드
    
    public function getName() {
        return $this->name;
    }
    public function setName($name){
        $this->name =$name;
    }

    // 메소드
    public function swim($opt){
        echo $opt.$this->name." 헤엄 칩니다.\n"; 
    }
    public function breathe(){
        echo $this->name." 호흡 한다.\n";
    }
    
    // static 메소드 : 인스턴스 생성 없이 사용할 수 있는 메소드 / this랑 static은 같이못씀
    public static function big(){
        echo "매우 크다.";
    }
}

// 클래스 인스턴스 생성 - 메소드 호출
// $objWhale = new whale("고래");  
// $objWhale->swim("흰 수염");             
// echo $objWhale->getName()."\n";
// $objWhale->breathe(); 

// $objWhale->setName("참새");
// $objWhale->swim("흰 수염");
// $objWhale->breathe(); 

// static 메소드 호출 stasic으로 하면 메모리에 미리 올려둬서 new없이 바로쓸수있음
Whale::big();
