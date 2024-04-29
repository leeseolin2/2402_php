// API 호출 버튼 이벤트
const btnAPI = document.querySelector('#btn-api');
btnAPI.addEventListener('click' , myGetData )

// API 호출
// function myGetData() {
//     // URL 획득
//     const url = document.querySelector('#input-url').value;
    
//     // API 요청
//     axios.get(url)
//     .then(response => {
//         console.log(response);   
//     })
//     .catch(err => console.log(err));
// }
// API 호출
async function myGetData() {
    // URL 획득
    const url = document.querySelector('#input-url').value;
    
    // API 요청
    try {
        const response = await axios.get(url);
        myMakeItem(response.data)
    } catch (error) {
        console.log(error);
    }
}


function myMakeItem() { 
    data.forEach(item => {
        // 아이템 추가할 부모요소 획득
        const main = document.querySelector('.main')

        const newArticle = document.createElement('div');
        const newArticleId = document.createElement('div');
        const newImg = document.createElement('img');

        // 아이템 셋팅
        newArticle.classList = 'article';
        newArticleId.classList = 'div-article-id';
        newImg.classList = 'div-article-img';
        newArticleId.textContent = item.id;
        newImg.src = item.download_url;
        
        // 생성한 요소 결합
        newArticle.appendChild(newArticleId); // 아티클에 이미지 추가
        newArticle.appendChild(newImg); // 메인에 아티클 추가
    })
}

// 아이템 지우기
const btnMain = document.querySelector('#btn-clear');
btnMain.addEventListener('click', () => {
    // const main = document.querySelector('.main');
    // main.innerHTML = '';

    // 최대 5개까지씩 지우기
    const main = document.querySelector('.main');
    const articleList = document.querySelectorAll('.article');

    for(let i = 0; i < 5; i++ ) {
        let idx = articleList.length -1 -i; // index 계산
        if(idx < 0){
            // index가 0보다 작으면 루프 종료
            break;
        }
        main.removeChild(articleList[idx]); // 해당 아티클 삭제
    }
})
