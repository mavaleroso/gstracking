import axios from "axios";
const state = {
    mot: [],
    loadingStats: false
};
const getters = {
    mot(state) {
        return state.mot;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadMot({ commit }) {
        commit("setLoadingStats", true);
        return axios.get(BASE_URL + "/api/v1/vehiclemode").then(response => {
            commit("setMot", response.data.results);
            commit("setLoadingStats", false);
        });
    },
    setLocalData({ commit }, payload) {
        commit("setMot", payload);
    }
};
const mutations = {
    setMot: (state, mot) => {
        state.mot = mot;
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
