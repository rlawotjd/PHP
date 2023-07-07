<template>
    <!-- <div v-for="(item,index) in products" :key="index">   디폴트 foreach -->
    <!-- <div> -->
    <!-- <img v-bind:src="products.img" @click="products.moduleFlg=!item.moduleFlg"> -->
    <!-- <img v-bind:src="products.img" @click="flgNumChange(index);"> -->
    <!-- <img :src="products.img"> -->
    <!-- <h4>{{ item.name }}</h4> -->
    <!-- <p>{{ item.count*item.price }}원</p> -->
    <!-- <button type="button" v-on:click="item.count++"> 수량증가</button><span> : {{item.count}}</span> 온클릭 -->
    <!-- <button type="button" @click="count[index]++"> 수량증가</button><span> : {{count[index]}}</span> 온클릭 -->
    <!-- <button type="button" @click="pluse(index)"> 수량증가</button><span>&nbsp; : {{count[index]}}</span> 온클릭 -->
    <!-- <button type="button" @click="minus(index)"> 수량감소</button><span> : {{count[index]}}</span> 온클릭 -->
    <!-- </div> -->
    <!-- {{ products }} -->
    <div>
        <img :src="products.img" alt="" @click="$emit('openModule')">
        <!-- <img :src="products.img" alt=""> -->
        <h4 >{{ products.name }}</h4>
        <p>{{ products.price }}원</p>
        <p>{{ products.count }}개</p>
        {{ moduleFlg }}
    </div>
</template>
<script>
export default {
    name: 'Content',
    props:{
        products:Object,
        moduleFlg:Boolean
    }
}


</script>
<style>
    
</style>