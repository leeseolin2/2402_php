<template>
<img alt="Vue logo" src="./assets/logo.png">
<!-- 헤더 -->
<!-- props : 자식 컴포넌트에게 props 속성을 이용해서 데이터를 전달 -->
   <HeaderComponent :navList="navList"/> 
    <!-- 상품리스트 -->
    <ListComponent :products="products"  @myOpenModal="myOpenModal">
        <!-- slot : 자식쪽에서 <slot></slot> 부분에 전달하여 자식컴포넌트에서 렌더링처리 -->
        <h3>부무쪽에서 정의한 슬롯</h3>
    </ListComponent>
    <!-- 모달 -->
    <!-- :자식한테주는거 = App.vue가 가지고있는거 -->
    <ModalDetail :product="product" :flgModal="flgModal" @myCloseModal="myCloseModal" />
    
</template>

<script setup>
import { ref, reactive, provide } from 'vue'
import HeaderComponent from './components/HeaderComponent.vue'; // 자식 컴퓨넌트 import
import ModalDetail from './components/ModalDetail.vue'; // 자식 컴퓨넌트 import
import ListComponent from './components/ListComponent.vue'; // 자식 컴퓨넌트 import

// ------------
// 데이터 바인딩
// ------------

// ------------
// 헤더 처리
// ------------
const navList = reactive([
    {navName: '홈'},
    {navName: '상품'},
    {navName: '기타'},
])

// ref : 타입제한 없이 사용가능하나 일반적으로 string, number, boolean 과 같은 기본유형에 대한 반응적 참조를 위해 사용
// import { ref } from 'vue';

// const pants = ref('청바지');
// const price = ref(10000);
// console.log(pants.value);

// reactive : 객체 타입만 사용 가능하며, 해당 객체에 대한 반응적 참조를 위해 사용
const products = reactive([
    {productName: '바지', price: 10000, productContent: '매우 아름다운 바지 입니다.', img: require('@/assets/img/2.png')},
    {productName: '티셔츠', price: 1000, productContent: '매우 아름다운 티셔츠 입니다.', img: require('@/assets/img/2.png')},
    {productName: '양말', price: 1000, productContent: '매우 아름다운 양말 입니다.', img: require('@/assets/img/2.png')}
]);
// console.log(products[0].price);

// ------------
// 모달용
// ------------
const flgModal = ref(false); // 모달 표시용 플래그
let product = reactive({});
function myOpenModal(item) {
    flgModal.value = true;
    product = item;
}
function myCloseModal(str) {
    flgModal.value = false;
    // product = {};
    console.log(str); // 파라미터 연습용
}

// ---------------------
// Provide / Inject 연습
// ---------------------
const count = ref(0);
function addCount() {
    count.value++;
}

provide('test', {
    count
    ,addCount
});

</script>

<style>
@import url('./assets/css/common.css');
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
/* css 파일 따로 분리 */
/* .nav {
    background-color: #2c3e50;
    padding: 15px;
    border-radius: 10px;
}

.nav  a {
    color: #fff;
    padding: 10px;
    text-decoration: none;
} */
</style>
