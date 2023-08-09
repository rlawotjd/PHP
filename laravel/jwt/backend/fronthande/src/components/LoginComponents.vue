<template>
    <div>
        <input type="text" name="" id="" v-model="testid">
        <button @click="$emit('callLogin')">로그인</button>
        {{ testid }}
    </div>
</template>
<script>
export default {
    name:'LoginComponents'
}
</script>
<style>

</style>
