function myAlert() {
    alert('안녕하세요');
    alert('숨어있는 div를 찾아보세요 !');
}
const DIV_1 = document.querySelector('#doo');
DIV_1.addEventListener('mouseenter',() => (alert('두근두근')));


// const DIV = document.querySelector('.modal-item');
// const BTN_MODAL = document.querySelector('.modal-item');

// DIV.addEventListener('click', e => {
//     e.target.style.backgroundColor = 'pink'; 
// });
// DIV.addEventListener('click',() => (alert('들켰다!')));
// DIV.addEventListener('mouseleave', e => { 
//     e.target.style.backgroundColor = '#fff'; 
// });
// DIV.addEventListener('click',() => (alert('다시 숨는다!')));
const DIV = document.querySelector('.modal-item');

DIV.addEventListener('click', e => {
    if (e.target.classList.contains('pink-background')) {
        e.target.style.backgroundColor = '#fff';
        alert('다시 숨는다!');
        // 숨은 뒤 랜덤 위치로 이동
        const randomX = Math.random() * (window.innerWidth - e.target.clientWidth);
        const randomY = Math.random() * (window.innerHeight - e.target.clientHeight);
        e.target.style.position = 'absolute'; // position을 설정
        e.target.style.left = `${randomX}px`;
        e.target.style.top = `${randomY}px`;
    } else {
        e.target.style.backgroundColor = 'pink';
        alert('들켰다!');
    }
    // 배경색 클래스 토글
    e.target.classList.toggle('pink-background');
});

