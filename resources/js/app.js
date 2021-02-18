require('./bootstrap');

import router from './routes';
import VueRouter from 'vue-router';
import Index from './Index.vue';
import Login from './Login.vue';

window.Vue = require('vue').default;

Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router,
    components: { Index, Login }
});
