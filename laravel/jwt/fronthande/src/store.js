import { createStore } from 'vuex';
import ApiController from './js/ApiController';
import TokenController from './js/TokenController';
import router from './route';

const store = createStore({
    state(){
        return{
            isToken:false,
        }
    },
    mutations:{
        setToken(state,token){
            TokenController.setToken(token);
            state.isToken=true;
        }
    },
    actions:{
        login(context,id){
            ApiController.post('/api/token',{id:id})
            .then(res=>{
                let token=res.data['token'];
                console.log('tokne');
                context.commit('setToken',token)
                router.push('main');
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
});

export default store
