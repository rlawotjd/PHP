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

export default {
    name:'App',
    data() {
        return {
            inputValue:'',
            todoData:[],
        }
    },
    methods: {
        getMainList(){
            axios.get('http://127.0.0.1:8000/api/todo')
            .then(res=>{
                todoData=res.data
            })
            .cath(err=>{
                console.log(err);
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
