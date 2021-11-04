import axios from "axios";
const state = {
    employee: [],
    loadingStats: false
};
const getters = {
    employee(state) {
        return state.employee;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadEmployee({ commit }) {
        commit("setLoadingStats", true);
        return axios.get(BASE_URL + "/store/employees").then(response => {
            commit("setEmployee", response.data);
            commit("setLoadingStats", false);
        });
    },
    setLocalData({ commit }, payload) {
        commit("setEmployee", payload);
    }
};
const mutations = {
    setEmployee: (state, employee) => {
        state.employee = employee;
    },
    setLoadingStats: (state, value) => {
        state.loadingStats = value;
    }
};
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
