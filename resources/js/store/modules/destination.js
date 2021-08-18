import axios from "axios";
const state = {
    Division: [],
    loadingStats: false,
    Region: [],
    Section: [],
    Province: [],
    City: [],
    Barangay: []
};
const getters = {
    Division(state) {
        return state.Division;
    },
    loadingStats(state) {
        return state.loadingStats;
    },
    Region(state) {
        return state.Region;
    },
    Section(state) {
        return state.Section;
    },
    Province(state) {
        return state.Province;
    },
    City(state) {
        return state.City;
    },
    Barangay(state) {
        return state.Barangay;
    }
};
const actions = {
    loadDivision({ commit }) {
        return axios.get(BASE_URL + "/api/v1/division").then(response => {
            commit("setDivision", response.data);
            localStorage.setItem("division", JSON.stringify(response.data));
        });
    },
    loadRegion({ commit }) {
        return axios.get(BASE_URL + "/api/v1/region").then(response => {
            commit("setRegion", response.data);
            localStorage.setItem("region", JSON.stringify(response.data));
        });
    },
    loadSection({ commit }) {
        return axios.get(BASE_URL + "/api/v1/section").then(response => {
            commit("setRegion", response.data);
            localStorage.setItem("section", JSON.stringify(response.data));
        });
    },
    loadProvince({ commit }) {
        return axios.get(BASE_URL + "/api/v1/province").then(response => {
            commit("setProvince", response.data);
            localStorage.setItem("province", JSON.stringify(response.data));
        });
    },
    loadCity({ commit }) {
        return axios.get(BASE_URL + "/api/v1/city").then(response => {
            commit("setCity", response.data);
            localStorage.setItem("city", JSON.stringify(response.data));
        });
    },

    loadBarangay({ commit }) {
        return axios.get(BASE_URL + "/api/v1/brgy").then(response => {
            commit("setBarangay", response.data);
            localStorage.setItem("barangay", JSON.stringify(response.data));
        });
    },

    setLocalDivision({ commit }, data) {
        commit("setDivision", data);
    },
    setLocalRegion({ commit }, data) {
        commit("setRegion", data);
    },
    setLocalSection({ commit }, data) {
        commit("setSection", data);
    },
    setLocalProvince({ commit }, data) {
        commit("setProvince", data);
    },
    setLocalCity({ commit }, data) {
        commit("setCity", data);
    },
    setLocalBarangay({ commit }, data) {
        commit("setBarangay", data);
    }
};
const mutations = {
    setDivision: (state, division) => {
        state.Division = division;
    },
    setLoadingStats: (state, value) => {
        state.loadingStats = value;
    },
    setRegion: (state, region) => {
        state.Region = region;
    },
    setSection: (state, section) => {
        state.Section = section;
    },
    setProvince: (state, province) => {
        state.Province = province;
    },
    setCity: (state, city) => {
        state.City = city;
    },
    setBarangay: (state, barangay) => {
        state.Barangay = barangay;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
