import axios from "axios";
import secureStorage from "../secureStorage";
const state = {
    vehicles: [],
    loadingStats: false
};
const getters = {
    vehicles(state) {
        return state.vehicles;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadVehicles({ commit }) {
        commit("setLoadingStats", true);
        return axios.get(BASE_URL + "/store/vehicles").then(response => {
            commit("setVehicles", response.data);
            commit("setLoadingStats", false);
            secureStorage.setItem(
                "ListVehicles",
                JSON.stringify(response.data)
            );
        });
    },
    setLocalData({ commit }, payload) {
        commit("setVehicles", payload);
    }
};
const mutations = {
    setVehicles: (state, vehicles) => {
        state.vehicles = vehicles;
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
