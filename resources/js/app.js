import  './bootstrap';
import  './icon';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

createApp(App)
.use(store)
.use(router)
.component('font-icon', FontAwesomeIcon)
.mount('#app');
