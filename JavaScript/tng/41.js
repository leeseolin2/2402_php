// const H3 = document.getElementsByTagName('span');
// // 현재날짜/시간획득
// const NOW = new Date();

// const lpadZero = (val, length) => {
//     return String(val).padStart(length, '0')
// }

// // getFullYear() : 연도만 가져오는 메소드 (yyyy)
// const YEAR = NOW.getFullYear();

// // getHours() : 시를 가져오는 메소드
// const HOUR = lpadZero(NOW.getHours(), 2);

// // getminutes() : 분을 가져오는 메소드
// const MINUTE = lpadZero(NOW.getMinutes(), 2);

// // getSeconds() : 초를 가져오는 메소드
// const SECOND = lpadZero(NOW.getSeconds(),2);



// // const MIN = H3[0].innerHTML = `${HOUR}:`+`${MINUTE}:`+`${SECOND}`;


// // const INTERVAL_ID = setInterval(() => (H3[0].innerHTML = `${HOUR}:`+`${MINUTE}:`+`${SECOND}`), 100);
// // 제거
// // clearInterval(INTERVAL_ID);
// let cnt = 1;
// setInterval(() => {
//     H3[0].innerHTML = `${HOUR}:`+`${MINUTE}:`+`${SECOND}`
//     cnt++;
// },200);

const H3 = document.getElementsByTagName('span');

const lpadZero = (val, length) => {
    return String(val).padStart(length, '0');
};

let intervalId;

function updateTime() {
    const NOW = new Date();
    let meridiem = '오전'; // 기본값은 오전으로 설정
    let HOUR = NOW.getHours();
    
    if (HOUR >= 12) {
        meridiem = '오후';
        HOUR = HOUR === 12 ? 12 : HOUR - 12;
    }

    HOUR = lpadZero(HOUR, 2);
    const MINUTE = lpadZero(NOW.getMinutes(), 2);
    const SECOND = lpadZero(NOW.getSeconds(), 2);

    H3[0].innerHTML = `${meridiem} ${HOUR}:${MINUTE}:${SECOND}`;
}


intervalId = setInterval(updateTime, 1000);

const BTN1 = document.querySelector('#stop');
const BTN2 = document.querySelector('#start');

BTN1.addEventListener('click', () => {
    clearInterval(intervalId);
});

BTN2.addEventListener('click', () => {
    intervalId = setInterval(updateTime, 1000);
});
