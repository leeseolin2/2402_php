// 타이머 함수

// setTimeout(콜백함수, 시간(ms)) : 일정 시간이 흐른 후에 콜백 함수를 실행
setTimeout(() => console.log('타임아웃'), 5000);

// 1초뒤 A, 2초 뒤 B, 3초뒤 C출력
setTimeout(() => console.log('A'), 1000);
setTimeout(() => console.log('B'), 2000);
setTimeout(() => console.log('C'), 3000);

// A, B, C를 순선대로 찍고 싶으면 아래와 같이
console.log('A');
setTimeout(() => {
    console.log('B');
    console.log('C');
}, 1000);

// clearTimeout(타임아웃ID) : 해당 타임아웃ID의 처리를 제거 
const TIMEOUT_ID = setTimeout(() => console.log('ttt'), 5000);
clearTimeout(TIMEOUT_ID);
console.log(TIMEOUT_ID);

// setInterval(콜백함수, 시간(ms)[, 아규먼트1, 아규먼트2]) : 일정 시간마다 콜백함수 실행 
const INTERVAL_ID = setInterval(() => console.log('인터벌'), 1000);
// let cnt = 1;
// setInterval(() => {
//     console.log('인터벌' + cnt);
//     cnt++;
// }, 1000);

// clearInterval(intervalID) : 해당 intervalID 처리 제거 
clearInterval(INTERVAL_ID);

// 화면에 5초뒤에 '두둥등장'이라는 매우 큰 글씨가 나타나게 해주세요.
// const TITLE = document.getElementsByTagName('body')
const DOO1 = '두둥등장';

const DOO = setTimeout(() => {
    const dooElement = document.createElement('div');
    dooElement.textContent = DOO1;
    dooElement.style.fontSize = '3rem'; // 크기 조정
    dooElement.style.fontWeight = '900'; // 크기 조정
    document.body.appendChild(dooElement); // body에 h1 추가

    // 3초 뒤에 문자열을 제거하는 코드
    setTimeout(() => {
        document.body.removeChild(dooElement);
    }, 3000);
}, 5000);

// 콜백 지옥
setTimeout(() => console.log('A'), 3000);
setTimeout(() => console.log('B'), 2000);
setTimeout(() => console.log('C'), 1000);

setTimeout(() => {
    console.log('A');
    setTimeout(() => {
        console.log('B');
        setTimeout(() => {
            console.log('C');
        },1000)
    }, 2000)
}, 3000)

