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
    <div class="bg_black" v-if="moduleFlg">
        <div class="bg_white">
            <img :src="products.img" alt="">
            <h4>{{ products.name }}</h4>
            <p>{{ products.content }}</p>
            <p>{{ products.count*products.price }}</p>
            <button type="button" @click="$emit('callPluse')">수량증가</button>
            <button type="button" @click="$emit('callMinus')">수량감소</button>
            <p>{{ products.count }}</p>
            <button @click="$emit('closeModule')">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Module',
    props:{
        moduleFlg:Boolean,
        products:Array,
    }
}
</script>
<style>
    
</style>