<template>
    <div>
            <!-- <div class="nav">
            <a href="">홈</a>
            <a href="">상품</a>
            <a href="">기타</a>
            <a href="">{{ product1 }}</a>
            </div> -->
            <nav>
                <div class="nav">
                    <a href="" v-for="(item, index) in navList" :key="index">{{ item }}</a>
                </div>
            </nav>
            <!-- {{ navList }} -->

    </div>
</template>
<script>
export default {
    name: 'Header',
    props:{
        navList: Array,
    }
}
</script>
<style>
    
</style>