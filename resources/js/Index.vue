<template>
    <div
        id="kt_body"
        class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable"
    >
        <mobile></mobile>
        <div class="d-flex flex-column flex-root w-100">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <sidebar></sidebar>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div
                    class="d-flex flex-column flex-row-fluid wrapper"
                    id="kt_wrapper"
                >
                    <!--begin::Header-->
                    <topheader></topheader>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div
                        class="content d-flex flex-column flex-column-fluid"
                        id="kt_content"
                    >
                        <!--begin::Subheader-->
                        <subheader></subheader>
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div
                            id="container-div"
                            class="d-flex flex-column-fluid"
                        >
                            <!--begin::Container-->
                            <div class="container-fluid">
                                <router-view></router-view>
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    <navfooter></navfooter>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <rightpanel></rightpanel>
    </div>
</template>

<script>
import Navbar from "./components/Layouts/Navbar";
import Sidebar from "./components/Layouts/Sidebar";
import Mobile from "./components/Layouts/Mobile";
import Topheader from "./components/Layouts/Header";
import Subheader from "./components/Layouts/Subheader";
import Navfooter from "./components/Layouts/Footer";
import Rightpanel from "./components/Layouts/Rightpanel";
export default {
    components: {
        Navbar,
        Mobile,
        Sidebar,
        Topheader,
        Subheader,
        Navfooter,
        Rightpanel
    },
    data() {
        return {
            user: [],
            role: [],
            permissions: []
        };
    },
    created() {
        this.getUser();
    },
    mounted() {
        this.ini();
        this.vuexStore();
    },
    methods: {
        ini() {
            var scripts = [
                // "/assets/plugins/global/plugins.bundle.js",
                // "/assets/plugins/custom/prismjs/prismjs.bundle.js",
                // "/assets/js/scripts.bundle.js",
                // "/assets/plugins/custom/datatables/datatables.bundle.js",
                // "/plugins/fancybox/jquery.fancybox.js",
                // "/js/jquery-ui.js",
                // "/js/main.js",
            ];
            scripts.forEach(script => {
                let tag = document.createElement("script");
                tag.setAttribute("src", script);
                document.getElementById("kt_body").appendChild(tag);
            });
        },
        async getUser() {
            await axios.get(BASE_URL + "/user").then(res => {
                this.user = res.data.user;
                this.role = res.data.role;
                this.permissions = res.data.permissions;
                this.$store.dispatch(
                    "sessionStore/loadUserData",
                    res.data.user
                );
                this.$store.dispatch(
                    "sessionStore/loadRoleData",
                    res.data.role
                );
                this.$store.dispatch(
                    "sessionStore/loadPermissionsData",
                    res.data.permissions
                );
                this.session();
            });
        },
        vuexStore() {
            this.$store.dispatch("employees/loadEmployee");
            this.$store.dispatch("drivers/loadDrivers");
            this.$store.dispatch("po/loadPos");
            this.$store.dispatch("vehicles/loadVehicles");
            this.$store.dispatch("department/loadSection");
            this.$store.dispatch("department/loadDivision");
            this.$store.dispatch("mot/loadMot");
        },
        session() {
            this.$session.destroy();
            this.$session.start();
            this.$session.set("user", this.user);
        }
    }
};
</script>
