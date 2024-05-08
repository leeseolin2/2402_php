// 상세모달처리
document.querySelectorAll(".my-btn-detail").forEach($item => {
    $item.addEventListener('click', () => {
        const url = '/board/detail?b_id=' + $item.value;

        axios.get(url)
        .then(response => {
            const data = response.data[0];
            
            const btnDelete =document.querySelector('#my-btn-delete'); // 삭제 버튼
            const modalTitle = document.querySelector('.modal-title'); // 제목 노드
            const modalContent = document.querySelector('.modal-body > p'); // 내용 노드
            const modalImg = document.querySelector('.modal-body > img'); // 이미지 노드

            // 상세 정보 셋팅
            modalTitle.textContent = data.b_title;
            modalContent.textContent = data.b_content;
            modalImg.src = data.b_img;
            if (data.login_u_id !== data.u_id) {
                btnDelete.classList.add('d-none');
                btnDelete.value = '';
            } else {
                btnDelete.classList.remove('d-none');
                btnDelete.value = data.b_id;
            }
        })
        .catch(err => console.log(err));
    });
});

// 삭제처리 (async)
document.querySelector('#my-btn-delete').addEventListener('click', myDeleteCard);
async function myDeleteCard(e) {
    const url = '/board/delete'; // url 설정

    const data = new FormData(); // form 생성
    data.append('b_id', e.target.value); // b_id 셋팅
    try {
        const responese = await axios.post(url, data);
        console.log(responese)

        if(responese.data.errorFlg) {
        // 에러일 경우
        alert('삭제에 실패 했습니다.');
        } else {
        // 정상인 경우
        const main = document.querySelector('main'); // 부모요소
        const card = document.querySelector('#card' + responese.data.b_id); // 삭제할 요소
        main.removeChild(card);


        }
    } catch (error) {
        console.log(error);
    }
    

}


