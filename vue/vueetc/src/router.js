import { createWebHistory,createRouter } from 'vue-router';
import ContainerComponent from './components/ContainerComponent';
import PostComponent from './components/PostComponent';
// import ContainerComponent from './components/';

const routes=[{
    path:'/',
    component:ContainerComponent,
},
{
    path:'/post',
    component:PostComponent
}
]

const router=createRouter({
    history: createWebHistory(),
    routes,
})

export default router
