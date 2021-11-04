const state = {
    user: [],
    role: [],
    permissions: []
};
const getters = {
    user(state) {
        return state.user;
    },
    role(state) {
        return state.role;
    },
    permissions(state) {
        return state.permissions;
    }
};
const actions = {
    async loadUserData({ commit }, payload) {
        await commit("setUser", payload);
    },
    async loadRoleData({ commit }, payload) {
        await commit("setRole", payload);
    },
    async loadPermissionsData({ commit }, payload) {
        await commit("setPermissions", payload);
    }
};
const mutations = {
    setUser: (state, user) => {
        state.user = user;
    },
    setRole: (state, role) => {
        state.role = role;
    },
    setPermissions: (state, permissions) => {
        state.permissions = permissions;
    }
};
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
