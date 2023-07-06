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
  <div v-for="(item,index) in products" :key="index">
  <!-- 기본 foreach -->
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div>
  <div v-for="(item) in products" :key="item">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div>
  <div v-for="(item) in 2" :key="item"> 
  <!-- for문 형식 -->
    <h4>{{ item }}</h4>
    <p>{{ item }}원</p>
  </div>
  <!-- <div v-for="(item) in products" :key="num">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

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
      products:[{name:'티셔츠',price:'5000'},{name:'바지',price:'2000'},{name:'점퍼',price:'6000'}],
      
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
