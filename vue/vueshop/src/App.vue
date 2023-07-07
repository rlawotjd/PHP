<template>
  <img alt="Vue logo" src="./assets/logo.png">
  

  <!-- <div>
    <h4>{{product1}}</h4>
    <p>{{price1}}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{chung}}바지</h4>
    <p>{{price2}}원</p>
  </div> -->
  <Header :navList="navList" />
  <Content @openModule="moduleFlg=!moduleFlg" :products="item" v-for="(item, index) in products" :key="index" :moduleFlg="moduleFlg"/>
  <Module @closeModule="moduleFlg=!moduleFlg" :moduleFlg="moduleFlg" :/>
  
      <!-- 모달 -->
  <!-- <div class="bg_black" v-if="item.moduleFlg">
      <div class="bg_white">
        <img :src="item.img" alt="">
        <h4>{{ item.name }}</h4>
        <p>{{ item.content }}</p>
        <p>{{ item.price }}원</p>
      <button @click="item.moduleFlg=!item.moduleFlg" >❌</button>
    </div>
  </div> -->
  <!-- </div> -->
  <div v-for="(item) in products" :key="item">
    <!-- <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p> -->
  </div>
  <div v-for="(item) in 2" :key="item"> <!-- for문 형식쓰고싶을때 -->
    <!-- <h4>{{ item }}</h4> -->
  </div>
  <!-- <div v-for="(item) in products" :key="num">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div> -->
  <!-- if문 -->
  <!-- <p v-if="true">if문 테스트 true </p>
  <p v-if="false">if문 테스트 false</p> -->

  <!-- 모달 -->
  <!-- <div class="bg_black" v-if="moduleFlg">
    <div class="bg_white">
      <img :src="products[proNum].img" alt="">
      <h4>{{ products[proNum].name }}</h4>
      <p>{{ products[proNum].content }}</p>
      <p>{{ products[proNum].count*products[proNum].price }}</p>
      <button type="button" @click="pluse(proNum)">수량증가</button>
      <button type="button" @click="minus(proNum)">수량감소</button>
      <p>{{ products[proNum].count }}</p>
      <button @click="moduleFlg=!moduleFlg; products[proNum].count='0'" >❌</button>
    </div>
  </div> -->
  
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

import data from './assets/js/data.js';
import Header from './components/Header.vue';
import Content from './components/Content.vue';
import Module from './components/Module.vue';
export default {
  name: 'App',
  data(){
    return{
      // num:[1,2,3],
      chung:'청',
      product1:'양말',
      product2:'',
      price1:'3800',
      price2:'5000',
      styleR: 'color:red',
      // products:['티셔츠','바지','점퍼'],
      // products:[{name:'티셔츠',price:'5000' ,count:1, img:require("./assets/cat.webp")},{name:'바지',price:'2000',count:1,img:require("./assets/cat2.jpg")},{name:'점퍼',price:'6000',count:1,img:require("./assets/cat3.jpg")}],
      products:data,
      count:['1','1','1'],
      moduleFlg:true,
      proNum:0,
      navList:['홈','상품','기타','양말']
    }
  },
  methods: {
    pluse(index){
      this.products[index].count++;
      // this.index++;
    },
    minus(index){
      this.products[index].count--;
      // this.index++;
    },
    flgNumChange(index){
      this.moduleFlg=!this.moduleFlg;
      this.proNum=index
    }
  },
  components:{
    Header,Content,Module
    //package.json 에서 설정 추가
    //     "rules": {
    //  "vue/multi-word-component-names" : "off" //두단어이상제한 풀기
    //}
  }
}
</script>

<style>
@import url('./assets/css/header.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

</style>
