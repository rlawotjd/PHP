<template>
  
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li class="header-button header-button-left" @click="$store.commit('changeTabFlg','0'); $store.commit('changeFilter',''); $store.commit('changeImgUrl','') " v-if="$store.state.tabFlg!=='0'">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li class="header-button header-button-right" @click="$store.commit('changeTabFlg','2');" v-if="$store.state.tabFlg==='1'">다음</li>
    </ul>
  </div>
  <!-- 컨테이너 -->
  <ContainerComponent/>
  {{$store.state.butFlg}}
  <button @click="$store.dispatch('moreMainList')" v-if="$store.state.butFlg && $store.state.tabFlg==='0'">더보기</button>
  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store" v-if="$store.state.tabFlg==='0'">
      <label for="file" class="label-store">+</label>
        <input type="file" name="file" id="file" accept="image/*" class="input-file" @change="updateImg">
    </div>
  </div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue';

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  
  components: {
    ContainerComponent,
  },
  methods: {
    updateImg(e){
      let file = e.target.files;
      let imgUrl=URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl',imgUrl)
      this.$store.commit('changeTabFlg','1');
      e.target.value=''
    }
  },
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
</style>
