<template lang="">
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg==='0'">
        <PostComponent/>
    </div>
    <!-- 이미지 -->

    <div v-if="$store.state.tabFlg==='1'">
        <!-- <div class="upload-img"> -->
        <div class="upload-img" v-bind:style="{backgroundImage :`url('${$store.state.imgUrl}')`}" :class="$store.state.filter">
        </div>
        <div class="filter-box" >
            <div class="filter" v-for="(item, index) in filterList" :key="index" v-bind:style="{backgroundImage :`url('${$store.state.imgUrl}')`}" :class="item" @click="$store.commit('changeFilter',item);">
                {{item}}
            </div>
        </div>
    </div>
    <!-- {{$store.state.imgUrl}} -->
    <!-- 글작성 -->
    <div v-if="$store.state.tabFlg==='2'">
        <div class="upload-img" v-bind:style="{backgroundImage :`url('${$store.state.imgUrl}')`}" :class="$store.state.filter">
        </div>
        <div>
            <textarea name="content" id="content" cols="30" rows="10" class="write-box" placeholder='글써' v-model="$store.state.content"></textarea>
        </div>
        {{$store.state.content}}
    </div>
</template>
<script>
import PostComponent from './PostComponent.vue';
export default {
    name: 'ContainerComponent',
    components: {
        PostComponent,
    },
    data() {
        return {
            filterList:[ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
}
</script>
<style lang="">

</style>