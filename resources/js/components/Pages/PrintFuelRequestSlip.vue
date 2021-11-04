<template>
    <div>
        <page size="A4" class="paper-page">
            <div id="page-1">
                <table class="w-100">
                    <thead>
                        <tr>
                            <td colspan="4">
                                <p class="text-left m-0 float-right w-15">
                                    Control #:
                                    <span class="text-underline text-right">{{
                                        code
                                    }}</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Republic of the Philippines
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Department of Social Welfare and Development
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Field Office Caraga
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Capitol Site, Butuan City
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p
                                    class="text-center text-underline my-10 font-weight-bold"
                                >
                                    FUEL WITHDRAWAL SLIP
                                </p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Name of Driver:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ driver_name }}</span
                                    >
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="d-flex mt-3">
                                    <p class="m-0 pl-3 text-nowrap">
                                        PO:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ po_no }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Plate Number:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ plate_no }}</span
                                    >
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="d-flex mt-3">
                                    <p class="m-0 pl-3 text-nowrap">
                                        Date:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ date }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Particulars:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        No. of Liters:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Unit Price:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Amount:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Purpose of travel:
                                    </p>
                                </div>
                                <p
                                    class="underline pl-8 font-weight-bold w-100"
                                >
                                    {{ purpose }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="w-50 float-right">
                                    <p>Approved by:</p>
                                    <div class="ml-15 w-75 mt-8">
                                        <p
                                            class="underline mb-1 text-center font-weight-bold"
                                        >
                                            TERESA M. BIDAURE, AO-III
                                        </p>
                                        <p class="text-center">
                                            Gen. Services Section Head
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr class="" />
                <table class="w-100">
                    <thead>
                        <tr>
                            <td colspan="4">
                                <p class="text-left m-0 float-right w-15">
                                    Control #:
                                    <span class="text-underline text-right">{{
                                        code
                                    }}</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Republic of the Philippines
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Department of Social Welfare and Development
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Field Office Caraga
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                Capitol Site, Butuan City
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p
                                    class="text-center text-underline my-10 font-weight-bold"
                                >
                                    FUEL WITHDRAWAL SLIP
                                </p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Name of Driver:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ driver_name }}</span
                                    >
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="d-flex mt-3">
                                    <p class="m-0 pl-3 text-nowrap">
                                        PO:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ po_no }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Plate Number:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ plate_no }}</span
                                    >
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="d-flex mt-3">
                                    <p class="m-0 pl-3 text-nowrap">
                                        Date:
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ date }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Particulars:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        No. of Liters:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Unit Price:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                            <td colspan="1">
                                <div class="mt-5 p-3">
                                    <p class="m-0 text-nowrap">
                                        Amount:
                                    </p>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                    <span
                                        class="d-flex underline font-weight-bold py-3"
                                    ></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Purpose of travel:
                                    </p>
                                </div>
                                <p
                                    class="underline pl-8 font-weight-bold w-100"
                                >
                                    {{ purpose }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="w-50 float-right">
                                    <p>Approved by:</p>
                                    <div class="ml-15 w-75 mt-8">
                                        <p
                                            class="underline mb-1 text-center font-weight-bold"
                                        >
                                            TERESA M. BIDAURE, AO-III
                                        </p>
                                        <p class="text-center">
                                            Gen. Services Section Head
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </page>
    </div>
</template>

<script>
export default {
    data() {
        return {
            date: null,
            driver_name: null,
            plate_no: null,
            po_no: null,
            purpose: null,
            code: null
        };
    },
    computed: {},
    created() {},
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            var scripts = ["/js/main.js"];
            scripts.forEach(script => {
                let tag = document.createElement("script");
                tag.setAttribute("src", script);
                $(".print-content").append(tag);
            });

            document.onkeypress = function(event) {
                event = event || window.event;
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.onmousedown = function(event) {
                event = event || window.event;
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.onkeydown = function(event) {
                event = event || window.event;
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.addEventListener("contextmenu", function(e) {
                // e.preventDefault();
            });

            $(".btn-print").click(() => {
                $("#page-1").printThis({
                    importCSS: true
                });
            });

            let url = window.location.href;
            let data = this.$parseURLParams(url);
            this.getData(data.id[0]);
        },
        getData(id) {
            axios.get(BASE_URL + "/tracking/fuelcharges/" + id).then(res => {
                this.code = res.data.code;
                this.driver_name = res.data.fullname;
                this.plate_no = res.data.plate_no;
                this.po_no = res.data.po_no;
                this.date = this.$dateEng(res.data.created_at);
                this.purpose = res.data.purpose;
            });
        }
    }
};
</script>
