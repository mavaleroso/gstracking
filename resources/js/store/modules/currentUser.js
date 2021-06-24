import axios from "axios";
const state = {
    transansportDrivers: [] 
};
const getters = {};
const actions = {
    loadEmployee({}){
        axios.post(BASE_URL + '/transportation/driver/autoComplete').then(response => {
            commit('setTransportDrivers', response.data)
        });
    }
};
const mutations = {
    setTransportDrivers: (state, drivers) => {
        state.transansportDrivers= drivers;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}