function myAxiosGet(){
    // URL 획득
    const URL = document.querySelector('#input-url').value;

    // Axios 처리
    axios.get(URL)
    .then(response => {
        myMakeImg(response.data);
    })
    .catch()
    ;

}


// 사진, id 데이터를 화면에 추가 함수
function myMakeImg(data) {
    data.forEach(item => {
        // 부모요소 접근
        const CONTAINER = document.querySelector('.img-container');
        
        // ADD_IMG와 ADD_ID를 함께 감싸는 컨테이너 요소 생성
        const ITEM_CONTAINER = document.createElement('div');
        ITEM_CONTAINER.style.display = 'flex';
        ITEM_CONTAINER.style.flexDirection = 'column';
        ITEM_CONTAINER.style.alignItems = 'center';
        
        // img 태그 생성
        const ADD_IMG = document.createElement('img');
        ADD_IMG.setAttribute('src', item.download_url);
        ADD_IMG.style.width = '200px';
        ADD_IMG.style.height = '200px';
        ADD_IMG.style.backgroundColor = 'gray';
        ADD_IMG.style.padding = '1rem';
        
        const ADD_ID = document.createElement('p');
        const IDS = item.id;
        ADD_ID.setAttribute('id', IDS);
        ADD_ID.innerHTML = `${IDS}`;
        ADD_ID.style.width ='200px';
        ADD_ID.style.textAlign ='center';
        ADD_ID.style.margin ='0';
        ADD_ID.style.backgroundColor ='gray';
        ADD_ID.style.padding ='0.5rem 1rem';
        ADD_ID.style.fontSize ='1.5rem';
        ADD_ID.style.fontWeight ='900';

        // 이미지와 ID를 함께 감싸는 컨테이너에 추가
        ITEM_CONTAINER.appendChild(ADD_ID);
        ITEM_CONTAINER.appendChild(ADD_IMG);

        // 컨테이너를 이미지 컨테이너에 추가
        CONTAINER.appendChild(ITEM_CONTAINER);
    });
    
    // 그리드 레이아웃 조정
    const CONTAINER = document.querySelector('.img-container');
    CONTAINER.style.margin = 'auto';
    CONTAINER.style.display = 'grid';
    CONTAINER.style.gap = '10px';
    CONTAINER.style.gridTemplateColumns = 'repeat(auto-fit, minmax(200px, 1fr))'; // 반응형 그리드 레이아웃 적용
}

// API 호출 버튼 이벤트
const BTN_API = document.querySelector('#btn-api');
BTN_API.addEventListener('click', myAxiosGet);


// API 삭제 버튼 이벤트

function toggleBtn() {
    const CONTAINER = document.querySelector('.img-container');
    CONTAINER.innerHTML = ''; // 이미지 컨테이너 내용을 모두 비움
    CONTAINER.classList.toggle('display-none');
}


// const CONTAINER = document.querySelector('.img-container');
const BTN_D = document.querySelector('#btn-de');
BTN_D.addEventListener('click', toggleBtn) ;