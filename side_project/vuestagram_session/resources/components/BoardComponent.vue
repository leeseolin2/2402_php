<template>
  <!-- 상세 -->
  <div v-if="detailFlg" class="board-detail-box">
    <div class="item">
      <img :src="detailItem.img">
      <hr>
      <p>{{ detailItem.content }}</p>
      <hr>
      <div class="etc-box">
        <span>{{ detailItem.name }}</span>
        <button @click="closeDetail" class="btn btn-bg-black btn-close">닫기</button>
      </div>
    </div>
  </div>

  <!-- 리스트 -->
  <div class="board-list-box">
    <!-- 루프돌릴곳에 v-for 주기 -->
    <div @click="openDetail(item)" v-for="(item, key) in $store.state.boardData" :key="key" class="item">
        <img  :src="item.img">
    </div>
  </div>
  <button  v-if="$store.state.moreBoardFlg" class="btn btn-bg-black btn-more" @click="$store.dispatch('getMoreBoardData')" type="button">더보기</button>

</template>
<script setup>
import { onBeforeMount, reactive, ref } from 'vue';
import { useStore } from 'vuex';

const store = useStore();

let detailItem = reactive({});
let detailFlg = ref(false);

function openDetail(data) {
  detailItem = data;
  detailFlg.value = true;
}

function closeDetail(data) {
  detailItem = {};
  detailFlg.value = false;
}


onBeforeMount(() => {
  if(store.state.boardData.length < 1) {
    store.dispatch('getBoardData');

  }
})
</script>
<style>
@import url('../css/boardList.css');
</style>
