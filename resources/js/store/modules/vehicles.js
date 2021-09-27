import axios from "axios";
const state = {
    rp_vehicles: [],
    hired_vehicles: [],
    loadingStats: false
};
const getters = {
    rp_vehicles(state) {
        return state.rp_vehicles;
    },
    hired_vehicles(state) {
        return state.hired_vehicles;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadVehicles({ commit }) {
        commit("setLoadingStats", true);
        axios.get(BASE_URL + "/store/vehicles?type=1").then(response => {
            commit("setRPVehicles", response.data);
            commit("setLoadingStats", false);
        });

        axios.get(BASE_URL + "/store/vehicles?type=2").then(response => {
            commit("setHiredVehicles", response.data);
            commit("setLoadingStats", false);
        });
    },
    setLocalData({ commit }, payload) {
        commit("setVehicles", payload);
    }
};
const mutations = {
    setRPVehicles: (state, vehicles) => {
        state.rp_vehicles = vehicles;
    },
    setHiredVehicles: (state, vehicles) => {
        state.hired_vehicles = vehicles;
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
