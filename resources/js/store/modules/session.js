const state = {
    session_data: []
};
const getters = {
    session_data(state) {
        return state.session_data;
    }
};
const actions = {
    setLocalData({ commit }, payload) {
        commit("setSessData", payload);
    }
};
const mutations = {
    setSessData: (state, session_data) => {
        state.session_data = session_data;
    }
};
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
