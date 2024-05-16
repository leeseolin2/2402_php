<template>
<div class="bg_black" v-if="flgModal">
    <div class="bg_white">
        <img :src="data.product.img " >
        <h4>{{ data.product.productName }}</h4>
        <p>{{ data.product.productContent }}</p>
        <p>{{ data.product.price }}</p>
        <!-- <button @click = "flgModal = !flgModal">닫기</button> -->
    </div>
</div>
</template>
<script setup>
    // import { ref } from 'vue';
    import { defineProps } from 'vue';
    // const products = reactive([
    //     {productName: '바지', price: 10000, productContent: '매우 아름다운 바지 입니다.', img: require('@/assets/img/2.png')},
    //     {productName: '티셔츠', price: 1000, productContent: '매우 아름다운 티셔츠 입니다.', img: require('@/assets/img/2.png')},
    //     {productName: '양말', price: 1000, productContent: '매우 아름다운 양말 입니다.', img: require('@/assets/img/2.png')}
    // ]);

    const data = defineProps({
        'product' : Object
        ,'flgModal' : Array
    });

    // const flgModal = ref(false); // 모달 표시용 플래그
    // let product = product({});
    // function myOpenModal(item) {
    //     flgModal.value = !flgModal.value;
    //     product = item;
    // }
</script>