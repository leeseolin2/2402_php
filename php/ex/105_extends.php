<?php
// 상속 : 부모클래스의 자원을 자식클래스가 물려받아 사용하거나 재정의 하는 것

class Parents {
    protected $name;
    
    public function __construct(){
        echo "부모 클래스 생성자 실행\n";
    }

    private function home(){
        echo "집은 부모님 겁니다.";
    }
    public function car(){
        echo "차는 부모님 자식 다 씁니다.\n";
    }
}

class Child extends Parents {
    public function __construct($name){
        $this->name = $name;
        echo "자식 클래스 생성자 실행\n";
    }
    public function dog(){
        echo "강아지는 제겁니다.";
    }
    
    // 오버라이딩 : 부모가 가지고 있는 메소드를 자식이 재정의해서 쓰는것
    public function car(){
        echo "이 자동차는 이제 제겁니다.\n";
    }
    
    public function getName(){
        echo $this->name;
    }
}

$obj = new Child("홍길동");
$obj->car();
$obj->getName();
// $obj->home(); private 는 자식이 쓸수없다 쓸수있는건 public만
// construct가 만약 자식쪽에 정의 해두지 않으면 부모쪽 construct가 실행이되고 자식도 설정을 따로 해둿으면 자식꺼가 나옴