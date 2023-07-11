<template lang="">
    <!-- {{ $store.state.boardData[1] }} -->
    <div class="post" v-for="(board, index) in $store.state.boardData" :key="index">
        <!-- <div class="post-img"> -->
        <div class="post-img" v-bind:style="{backgroundImage :`url('${board.img}')`}">
        <!-- <img :src="board.img" alt=""> -->
        </div>
        <div class="post-content">
        <p>{{board.likes}}</p>
        <p><strong>{{board.name}}</strong>{{board.content}}</p>
        <p>{{board.created_at}}</p>
        </div>
    </div>
    {{$store.state.lastId}}
</template>
<script>
export default {
    name: 'PostComponent',
    components: {
        
    },

}
</script>
<style lang="">
    
</style>