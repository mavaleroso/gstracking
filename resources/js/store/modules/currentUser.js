import axios from "axios";  
const state = {
    employee: [],
    loadingStats: false,
};
const getters = {
    employee(state){
        return state.employee
    },
    loadingStats(state){
        return state.loadingStats
    }
};
const actions = {
    loadEmployee({commit}){
        commit('setLoadingStats', true) ;
        return axios.post(BASE_URL + '/transportation/driver/autoComplete').then(response => {
            commit('setEmployee', response.data) ;
            commit('setLoadingStats', false) ;
            localStorage.setItem('ListEmployee', JSON.stringify(response.data));
        });
    },
    setLocalData({commit}, payload) {
        commit('setEmployee', payload) ;
    }
};
const mutations = {
    setEmployee: (state, drivers) => {
        state.employee= drivers;
    },
    setLoadingStats: (state, value) => {
        state.loadingStats= value;
    },
};
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}