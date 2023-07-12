<template lang="">
    <div>
        <h1>
            PostComponent.vue
            {{test}}
            <h1>{{postTest}}</h1>
        </h1>
    </div>
</template>
<script>
import { ref,toRefs } from 'vue'
export default {
    name:'PostComponent',
    props:{
        test:Number,
        postTest:Number
    },
    data() {
        return {
            
        }
    },setup(props) {
        let data = ref([]);
        let {postTest} = toRefs(props);
        console.log(postTest.value)
        return{data}
    }
}
</script>
<style lang="">
    
</style>