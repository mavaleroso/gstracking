import Vue from "vue";
import Vuex, { Store } from "vuex";
import employees from "./modules/employees";
import destination from "./modules/destination";
import drivers from "./modules/drivers";
import vehicles from "./modules/vehicles";
import sessionStore from "./modules/session";
import po from "./modules/po";
Vue.use(Vuex);
Vue.config.devtools = true;

export default new Vuex.Store({
    modules: {
        employees,
        destination,
        drivers,
        vehicles,
        po,
        sessionStore
    }
});
