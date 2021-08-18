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
                    <topheader :session-name="sessionData.name"></topheader>
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
        <rightpanel
            :session-data="{ name: sessionData.name, email: sessionData.email }"
        ></rightpanel>
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
import secureStorage from "./store/secureStorage";
export default {
    props: ["sessionData"],
    components: {
        Navbar,
        Mobile,
        Sidebar,
        Topheader,
        Subheader,
        Navfooter,
        Rightpanel
    },
    created() {
        this.storeEmployees();
        this.storeDrivers();
        this.storePo();
        this.storeVehicles();
    },
    mounted() {
        this.ini();
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
        storeEmployees() {
            if (secureStorage.getItem("ListEmployee") === null) {
                this.$store.dispatch("employees/loadEmployee");
            } else {
                this.$store.dispatch(
                    "employees/setLocalData",
                    JSON.parse(secureStorage.getItem("ListEmployee"))
                );
            }
        },
        storeDestination() {
            let division = localStorage.getItem("division");
            let region = localStorage.getItem("region");
            let section = localStorage.getItem("section");
            let province = localStorage.getItem("province");
            let city = localStorage.getItem("city");
            let barangay = localStorage.getItem("barangay");

            if (
                division === null ||
                region === null ||
                section === null ||
                province === null ||
                city === null ||
                barangay === null
            ) {
                this.$store.dispatch("destination/loadDivision");
                this.$store.dispatch("destination/loadRegion");
                this.$store.dispatch("destination/loadSection");
                this.$store.dispatch("destination/loadProvince");
                this.$store.dispatch("destination/loadCity");
                this.$store.dispatch("destination/loadBarangay");
            } else {
                this.$store.dispatch(
                    "destination/setLocalDivision",
                    JSON.parse(localStorage.getItem("division"))
                );
                this.$store.dispatch(
                    "destination/setLocalRegion",
                    JSON.parse(localStorage.getItem("region"))
                );
                this.$store.dispatch(
                    "destination/setLocalSection",
                    JSON.parse(localStorage.getItem("section"))
                );
                this.$store.dispatch(
                    "destination/setLocalProvince",
                    JSON.parse(localStorage.getItem("province]"))
                );
                this.$store.dispatch(
                    "destination/setLocalCity",
                    JSON.parse(localStorage.getItem("city]"))
                );
                this.$store.dispatch(
                    "destination/setLocalBarangay",
                    JSON.parse(localStorage.getItem("barangay]"))
                );
            }

            // if (localStorage.getItem("ListEmployee") === null) {
            // }
            // else {
            // 	this.$store.commit('setEmployee', JSON.parse(localStorage.getItem('ListEmployee')));
            // }
        },
        storeDrivers() {
            if (secureStorage.getItem("ListDrivers") === null) {
                this.$store.dispatch("drivers/loadDrivers");
            } else {
                this.$store.dispatch(
                    "drivers/setLocalData",
                    JSON.parse(secureStorage.getItem("ListDrivers"))
                );
            }
        },
        storePo() {
            if (secureStorage.getItem("ListPos") === null) {
                this.$store.dispatch("po/loadPos");
            } else {
                this.$store.dispatch(
                    "po/setLocalData",
                    JSON.parse(secureStorage.getItem("ListPos"))
                );
            }
        },
        storeVehicles() {
            if (secureStorage.getItem("ListVehicles") === null) {
                this.$store.dispatch("vehicles/loadVehicles");
            } else {
                this.$store.dispatch(
                    "vehicles/setLocalData",
                    JSON.parse(secureStorage.getItem("ListVehicles"))
                );
            }
        }
    }
};
</script>
