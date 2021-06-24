import axios from "axios";  
const state = {
    employee: [] 
};
const getters = {

    employee(state){
        return state.employee
    }

};
const actions = {
    loadEmployee({commit}){
        axios.post(BASE_URL + '/transportation/driver/autoComplete').then(response => {
            commit('setEmployee', response.data) 
        });
    }
};
const mutations = {
    setEmployee: (state, drivers) => {
        state.employee= drivers;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}