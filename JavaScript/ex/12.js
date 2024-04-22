// 함수 (function)
// 입력을 받아 출력을 하는 일련의 과정을 정의한 것

// 함수 선언식
// 호이스팅에 영향을 받고, 재할당이 가능함
function mySum(a, b){
   return a + b;
}

function mySum(a,b){
    console.log('재할당');
}

// 함수 표현식
// 호이스팅에 영향 받지않고, 재할당을 방지
const FNC_MY_SUM = function(a,b){
    return a + b;
}

// 화살표 함수
const FNC_MY_CUM_2 = (a,b) => a + b;

// 파라미터가 없을 경우
const FNC_TEST1 = function() {
    return 'FNC_TEST1';
}
const FNC_TEST1_A = () => 'FNC_TEST1';

// 파라미터가 1개일 경우
const FNC_TEST2 = function(str) {
    return str;
}
const FNC_TEST2_A = str => str; // 파라미터가 한개일경우 소괄호 생략가능

// 리턴처리 이외의 처리가 있을 경우, {}생략 불가능
const FNC_TEST3 = function(str) {
    if(str === 'a') {
        str = 'a입니다.';
    }
    return str;
}

const FNC_TEST3_A = str => {
    if(str === 'a') {
        str = 'a입니다.';
    }
    return str;
}

// 콜백 함수 
// 다른 함수의 파라미터로 전달되어 특정 조건에 따라 호출되는 함수
const MY_SUB = (callBack, num) => {
    if(num === 3) {
        return '3입니다.';
    } 
    return callBack() - num;
}

const MY_CALLBACK = () => 10;
MY_SUB(MY_CALLBACK, 3);

// 즉시 실행 함수(IIFE)
// 함수의 정의와 동시에 바로 호출되는 함수
// 딱 한번만 호출되고 다시는 호출 불가
// 모듈화, 스코프 보호, 클로저 형성
const MY_CLASS = (function(){
    const name = '홍길동';

    return {
        myPrint: function(){
            console.log(name + '입니다.');
        }
    }
})();
