// 데이터 저장하는 곳
import { createStore } from 'vuex';
import axios from 'axios';

const store=createStore({
    state(){
        return{
            test:'테스트입니다',
            boardData:[], //게시글 데이터
            lastId:'',
            butFlg:true,
            tabFlg:'0',// 0-메인/1-필터/2-작성
            imgUrl:'',
            filter:''
        }
    },
    mutations:{
        createBoardData(state,data){ //초기 셋팅용
            state.boardData=data;
            this.commit('lastIdChange',data[data.length - 1].id)
        },
        lastIdChange(state,id) { //라스트 아이디 변경
            state.lastId=id;
        },
        addBoardData(state,data){//더보기 데이터 셋팅용
            state.boardData.push(data);
            this.commit('lastIdChange',data.id)
        },
        changeButFlg(state){ //버튼 플래그
            state.butFlg=false;
        },
        changeTabFlg(state,num){ //탭 플래그
            state.tabFlg=num;
        },
        changeImgUrl(state,url){ //이미지 가지고오기
            state.imgUrl=url;
        },
        changeFilter(state,selFilter){ //필터변경
            state.filter=selFilter
        }

    },
    actions:{
        // 비동기처리
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res=>{
                context.commit('createBoardData',res.data);
            })
        },
        moreMainList(context){
                axios.get('http://192.168.0.66/api/boards'+'/'+context.state.lastId)
                .then(res=>{
                    if (res.data) {
                        context.commit('addBoardData',res.data);
                    } else{
                        context.commit('changeButFlg');
                    }
                })
        },
    }
})

export default store