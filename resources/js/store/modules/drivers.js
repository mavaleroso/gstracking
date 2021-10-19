import axios from "axios";
const state = {
    drivers: [],
    loadingStats: false
};
const getters = {
    drivers(state) {
        return state.drivers;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadDrivers({ commit }) {
        commit("setLoadingStats", true);
        return axios.get(BASE_URL + "/store/drivers").then(response => {
            commit("setDrivers", response.data);
            commit("setLoadingStats", false);
        });
    },
    setLocalData({ commit }, payload) {
        commit("setDrivers", payload);
    }
};
const mutations = {
    setDrivers: (state, drivers) => {
        state.drivers = drivers;
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
