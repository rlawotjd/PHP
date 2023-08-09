<template>
<img alt="Vue logo" src="./assets/logo.png">
<LoginComponents @callLogin="login()"/>
<!-- <input type="text" name="" id="" v-model="testid">
<button @click="login()">로그인</button>
{{ testid }} -->

</template>

<script>
import axios from "axios";
import LoginComponents from './components/LoginComponents.vue';

export default {
    name: 'App',
    data() {
        return {
            token:'',
            testid:'아이디입력',

        }
    },
    methods: {
        login(){
            axios.get('http://localhost:8000/api/token?id='+this.testid)
            .then(res=>{
                console.log(res.data);
                this.token=res.data.token;
            })
            .catch(
                err=>{
                    if (err.status>=400) {
                        console.log(err);
                    }
                }
            )
        }
    },
    components:{
        LoginComponents,
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
