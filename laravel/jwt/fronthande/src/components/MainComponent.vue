<template>
    <div>
        <h1>Main</h1>
        <button @click="login()" v-if="!$store.state.isToken">로그인</button>
        <button @click="logout()" v-if="$store.state.isToken">로그아웃</button>
        <button @click="logout()" >강제로그아웃</button>
        {{ $store.state.isToken }}
    </div>
</template>
<script>

export default {
    name:'MainComponent',
    methods:{
        logout(){
            this.$store.dispatch('logout');
        },
        login(){
            this.$store.dispatch('login');
        }
    }
}
</script>
<style>

</style>
