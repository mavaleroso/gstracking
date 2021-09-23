import axios from "axios";
const state = {
    loadingStats: false,
    Division: [],
    Section: []
};
const getters = {
    loadingStats(state) {
        return state.loadingStats;
    },
    Division(state) {
        return state.Division;
    },
    Section(state) {
        return state.Section;
    }
};
const actions = {
    loadDivision({ commit }) {
        return axios.get(BASE_URL + "/api/v1/division").then(response => {
            commit("setDivision", response.data);
        });
    },
    loadSection({ commit }) {
        return axios.get(BASE_URL + "/api/v1/section").then(response => {
            commit("setSection", response.data);
        });
    },

    setLocalDivision({ commit }, data) {
        commit("setDivision", data);
    },
    setLocalSection({ commit }, data) {
        commit("setSection", data);
    }
};
const mutations = {
    setLoadingStats: (state, value) => {
        state.loadingStats = value;
    },
    setDivision: (state, division) => {
        state.Division = division;
    },
    setSection: (state, section) => {
        state.Section = section;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
