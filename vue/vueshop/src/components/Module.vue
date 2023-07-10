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
            <!-- <p>{{ products.count*products.price }}</p> -->
            <p>{{ testPrice*test }}</p>
            <button type="button" @click="$emit('callPluse'); pluse()">수량증가</button>
            <button type="button" @click="$emit('callMinus'); minus()">수량감소</button>
            <!-- <p>{{ products.count }}</p> -->
            <p>{{ test }}</p>
            <!-- <input type="text" @input="product2=$event.target.value"> -->
            <input type="text" v-model="test">
            <!-- <input type="text" v-model="test"> -->
            <!-- <p>{{ product2 }}</p> -->
            <button @click="$emit('closeModule'); test='1'">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Module',
    props:{
        moduleFlg:Boolean,
        products:Array,
        product2:String
    },
    data() {
        return {
            test:this.products.count,
            testPrice:this.products.price,
        }
    },
    watch: {
        test(inp){
            if (inp>10) {
                alert('최대10개구매')
                this.test='10'
            } else {
            if (inp<0) {
                alert('음수입니다')
                this.test='0'
            }
            // else {
            //     if (inp==replace(/[^0-9]/g, '')) {
            //         alert('숫자를입력해주세요')
            //         this.test='0'
            //     }
            }
        }
    },
    methods: {
        pluse(){
        this.test++;
        // this.index++;
        },
        minus(){
        this.test--;
        // this.index++;
        },
    },
}
</script>
<style>
    
</style>