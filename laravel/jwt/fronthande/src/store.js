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
        },
        destroyToken(state){
            TokenController.destroyToken();
            state.isToken=false;
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
        },
        logout(context){
            context.commit('destroyToken');
            router.push('login');
        },
        mainBtn(context){
            if (context.isToken) {
                router.push('main')
                console.log('mainBtn:main')
            } else {
                router.push('login')
                console.log('mainBtn:login')
            }
        },
        loginBtn(context){
            if (context.isToken) {
                router.push('main')
            } else {
                router.push('login')
            }
        }
    }
});

export default store
