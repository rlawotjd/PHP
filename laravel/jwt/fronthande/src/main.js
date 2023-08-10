import { createApp } from 'vue'
import App from './App.vue'
import store from './store.js';
import router from './route.js';


createApp(App).use(store).use(router).mount('#app')
