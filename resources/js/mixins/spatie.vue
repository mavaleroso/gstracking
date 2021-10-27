<script>
import store from "../store";
export default {
    methods: {
        $can(permissionName) {
            setTimeout(() => {
                let result = false;
                for (let i = 0; i < permissionName.length; i++) {
                    if (!result) {
                        result =
                            store.state.sessionStore.permissions.indexOf(
                                permissionName[i]
                            ) !== -1;
                    }
                }
                return result;
            }, 1000);
        },
        $role(roleName) {
            let result = false;
            for (let i = 0; i < roleName.length; i++) {
                if (!result) {
                    result =
                        store.state.sessionStore.role.indexOf(roleName[i]) !==
                        -1;
                }
            }
            return result;
        }
    }
};
</script>
