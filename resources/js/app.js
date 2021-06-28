require('./bootstrap');

import router from './routes';
import VueRouter from 'vue-router';
import Index from './Index.vue';
import Login from './Login.vue';
import Print from './Print.vue';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';
import Vue from "vue";
import Vuex from "vuex";
import ConfigMixin from "./mixins/config.vue";

Vue.mixin(ConfigMixin);
Vue.use (Vuex);
window.Vue = require('vue').default;

Vue.prototype.$appName = 'example app'

import store from "./store"

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
    components: { Index, Login, Print },
    router,
    store,
});
