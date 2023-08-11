<template>
    <div>
        <h1>Home</h1>
        <router-link to='/login'>로그인하기</router-link>
        <router-link to='/main'>메인가기</router-link>
        <button @click="btn('login')">로그인하기</button>
        <button @click="btn('main')">메인가기</button>
        <!-- <button @click="mianBtn()">로그인하기</button> -->
        <button @click="loginBtn()">메인가기</button>
    </div>
</template>
<script>

import router from '../route';
export default {
    name:'HomeComponent',
    methods:{
        btn(path){
            router.puth(path)
        },
        mianBtn(){
            this.$store.dispatch('mainBtn');
            // this.$router.beforeAuth('main')
        },
        loginBtn(){
            this.$store.dispatch('loginBtn');
            // router.beforeAuth('login')
        }
    }
}
</script>
<style>

</style>
