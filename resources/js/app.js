require('./bootstrap');

import router from './routes';
import VueRouter from 'vue-router';
import Index from './Index.vue';
import Login from './Login.vue';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';

window.Vue = require('vue').default;

Vue.use(VueRouter);

router.beforeResolve((to, from, next) => {
    if (to.path) {
        NProgress.done();
        NProgress.start();
    }
    next();
});

router.afterEach(() => {
    NProgress.done();
});


const app = new Vue({
    el: '#app',
    components: { Index, Login },
    router,
});
