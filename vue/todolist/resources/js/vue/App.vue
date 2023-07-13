<template>
    <div>
        <!-- <h1>test</h1> -->
        <!-- <h1>{{todoData}}</h1> -->
        <!-- <hr> -->
        <!-- <h1>{{dateId}}</h1> -->
        <!-- 헤더 -->
        <div>
            <input v-model="inpValue" type="text" name="" id="">
            <button @click="insertInp()">추가</button>
            <!-- {{ inpValue }} -->
        </div>
        <!-- 컨텐츠 -->
        <div v-for="(item, index) in todoData" :key="index">
            <input v-if="item.completed" type="checkbox" name="" id="" @change="chkChange(item.id,item.completed)" checked>
            <input v-if="!item.completed" type="checkbox" name="" id="" @change="chkChange(item.id,item.completed)">
            <div v-if="item.completed">{{ item.content }}-완료된</div>
            <div v-if="!item.completed">{{ item.content }}</div>
            <!-- <div>{{ item.id }}</div> -->
            <button @click="delTodo(item.id)">삭제</button>
        </div>
    </div>
</template>
<script>
// import axios from 'axios';
export default {
    name:'App',
    data() {
        return {
            todoData:[],
            dateId:0,
            inpValue:'',
            red:'red'
        }
    },
    methods: {
        getMainList(){
            axios.get('/api/items')
            .then(res=>{
                this.todoData=res.data;
                console.log(res);
                this.dateId=res.data[0].id;
            })
            .catch(err=>{
                console.log(err);
            })
        },
        chkChange(id,completed){
            axios.put('/api/items/'+id,{
                item:{
                    completed:!completed
                    // completed:true
                }
            })
            .then(res=>{
                this.getMainList();
                console.log(res);
            })
            .catch(err=>{
                console.log(err);
            })
        },
        insertInp(){
            axios.post('/api/items',{
                // content:'test'
                // item:'test'
                item:{
                    content:this.inpValue
                }
            })
            .then(res=>{
                console.log(res);
                this.getMainList();
            })
            .catch(err=>{
                console.log(err);
            })
        },
        delTodo(id){
            axios.delete('/api/items/'+id)
            .then(res=>{
                console.log(res);
                this.getMainList();
            })
            .catch(err=>{
                console.log(err);
            })
        }
    },
    created(){
        this.getMainList();
    }
}
</script>
<style>

</style>
