// 원본은 보존하면서 오름차순 정렬 해주세요.
const ARR1 = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40 ];
result = ARR1.concat().sort((a, b) => a - b);

// 풀이
let copyArr = [...ARR1];
copyArr.sort((a,b) => a - b);
console.log(copyArr);

// 짝수와 홀수를 분리해서 각각 새로운 배열 만들어 주세요.
const ARR2 = [5,7,3,4,5,1,2];
result1 = ARR2.filter(val => val % 2 === 0);
result2 = ARR2.filter(val => val % 2 != 0);

// 풀이
const EVEN2 = [];
const ODD2 = [];
ARR2.forEach(num =>{
    if(num % 2 ===0){
        EVEN2[EVEN2.length] = num;
    } else {
        ODD2[ODD2.length] = num;
    }
});