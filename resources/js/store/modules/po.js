import axios from "axios";
import secureStorage from "../secureStorage";
const state = {
    pos: [],
    loadingStats: false
};
const getters = {
    pos(state) {
        return state.pos;
    },
    loadingStats(state) {
        return state.loadingStats;
    }
};
const actions = {
    loadPos({ commit }) {
        commit("setLoadingStats", true);
        return axios.get(BASE_URL + "/store/pos").then(response => {
            commit("setPos", response.data);
            commit("setLoadingStats", false);
            secureStorage.setItem("ListPos", JSON.stringify(response.data));
        });
    },
    setLocalData({ commit }, payload) {
        commit("setPos", payload);
    }
};
const mutations = {
    setPos: (state, pos) => {
        state.pos = pos;
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
