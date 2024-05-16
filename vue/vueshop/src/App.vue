<template>
<img alt="Vue logo" src="./assets/logo.png">
<!-- 헤더 -->
<!-- props : 자식 컴포넌트에게 props 속성을 이용해서 데이터를 전달 -->
   <HeaderComponent :navList="navList"/> 
    <!-- 상품리스트 -->
    <div>
        <div v-for="item in products" :key="item.productName">
            <h4 @click="myOpenModal(item)">{{ item.productName }}</h4>
            <p>{{ item.price }} 원</p>
        </div>
        <!-- <div>
            <h4 @click="myOpenModal(products[1])">{{ products[1].productName }}</h4>
            <p>{{ products[1].price }}</p>  -->
            <!-- <button @click="products[1].price += 1000">가격증가</button> -->
        <!-- </div>
        <div @click="myOpenModal(products[2])">
        <h4>{{ products[2].productName }}</h4>
        <p>{{ products[2].price }}</p>
        </div> -->
        <!-- <button @click="products[2].price += 1000">가격증가</button> -->
    </div>

    <!-- 모달 -->
    <ModalDetail :product="product" :flgModal ="flgModal"/>
    
</template>

<script setup>
import { ref, reactive } from 'vue'
import HeaderComponent from './components/HeaderComponent.vue'; // 자식 컴퓨넌트 import
import ModalDetail from './components/ModalDetail.vue'; // 자식 컴퓨넌트 import

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
    flgModal.value = !flgModal.value;
    product = item;
}

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
