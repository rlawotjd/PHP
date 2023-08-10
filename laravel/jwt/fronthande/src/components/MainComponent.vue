<template>
    <div>
        <h1>Main</h1>
        <button @click="$emit('callLogin')" v-if="!$store.state.isToken">로그인</button>
        <button @click="$emit('callLogout')" v-if="$store.state.isToken">로그아웃</button>
    </div>
</template>
<script>

export default {
    name:'MainComponent'
}
</script>
<style>

</style>
