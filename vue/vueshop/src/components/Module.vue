<template>
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
    <div v-if="moduleFlg">
        상품명
        내용
        가격
        <button @click="$emit('closeModule')">닫기</button>
        <!-- {{ moduleFlg }} -->
    </div>
</template>
<script>
export default {
    name:'Module',
    props:{
        moduleFlg:Boolean
    }
}
</script>
<style>
    
</style>