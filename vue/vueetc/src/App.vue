<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>app.vue</h1>
  <p>{{ test }}</p>
  <p>{{ data.name }}</p>
  <p>{{ data2.name }}</p>
  <router-link to="/">홈으로</router-link>
  <br>
  <router-link to="/post" :test="21222">포스트로</router-link>
  <router-view></router-view>
  <!-- <ContainerComponent/>-->
  <hr>
  <PostComponent :postTest="222" />
  <hr>
  <!-- <button @click="flg=!flg">버튼</button> -->
  <button @click="data.name='길동이'; test='bbb'; data2.name='영희'">버튼</button>

</template>

<script>
// import ContainerComponent from './components/ContainerComponent.vue';
import PostComponent from './components/PostComponent.vue';
import { ref,reactive } from 'vue';
export default {
  name: 'App',
  components: {
    // ContainerComponent,
    PostComponent
  },
  setup() {
    let data=ref({name:'홍길동',age:20}); //리렌더링 가능 
    let test = 'aaa' //리렌더링 불가능
    let data2 = reactive({ //
      name: '철수',
      age:21
    });

    
    // onMounted(() => {
    //   //처리
    // }),
    // onBeforeMount(() => {
    //   //처리
    // }),
    

    return {test, data, data2};
  }
  // data() {
  //   return {
  //     flg:true,
  //   }
  // },
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
