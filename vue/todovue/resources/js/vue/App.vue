<template>
    <div>
        <!-- 헤더 -->
        <div>
        <input v-model="inputValue" type="text" name="" id="">
        {{ inputValue }}
        <button>등록</button>
        </div>
        <!-- 컨텐트 -->

    </div>
</template>
<script>
import axios from 'axios';

export default {
    name:'App',
    data() {
        return {
            inputValue:''
        }
    },
    methods: {
        getMainList(context){
            this.axios.get('http://127.0.0.1:8000/api/todo')
            .then(res=>{
                context.commit('createTodoData',res.data);
            })
        },

    },
    // created() {
    // this.$store.dispatch('getMainList');
    // },
}
</script>
<style>

</style>
