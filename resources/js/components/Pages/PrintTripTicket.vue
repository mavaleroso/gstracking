<template>
    <div>
        <page size="A4" class="paper-page">
            <div id="page-1">
                <table id="tripTicket" class="w-100">
                    <thead>
                        <tr>
                            <td class="left-header">
                                <img
                                    alt="Print Logo"
                                    class="print-logo d-block m-auto"
                                    src="assets/media/logos/dswd_logo_new.png"
                                />
                            </td>
                            <td>
                                <div class="header-title">
                                    <p class="main">ADMINISTRATIVE SERVICES</p>
                                    <p class="sub-main">
                                        GENERAL ADMINISTRATION AND SUPPORT
                                        SERVICES GROUP
                                    </p>
                                    <p class="sub">
                                        DSWD-AS-GF-031 | REV 00/ 11 JAN 2021
                                    </p>
                                </div>
                            </td>
                            <td class="right-header"></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr />
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <p class="font-weight-bold">Form A</p>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p class="fs-9 text-nowrap ctrl-no">
                                        Control No.:
                                    </p>
                                    <span
                                        class="underline text-center fs-9 ctrl-no"
                                        >{{ travel.trip_ticket }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="font-weight-bold">
                                    TO BE FILLED-UP BY PERSON REQUESTING USE OF
                                    THE DEPARTMENT VEHICLE
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-nowrap fs-12 my-2">
                                    DATE:
                                </p>
                            </td>
                            <td>
                                <span
                                    class="underline d-flex w-75 ml-n13 pl-5"
                                    >{{ $dateEng(date) }}</span
                                >
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p class="text-nowrap fs-12">
                                        PLATE NO.:
                                    </p>
                                    <span class="underline text-center">{{
                                        travel.vehicle_plate_no
                                    }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-nowrap fs-12  my-2">
                                    DRIVER'S NAME:
                                </p>
                            </td>
                            <td>
                                <span
                                    class="underline d-flex w-75 ml-n13 pl-4"
                                    >{{ travel.fullname }}</span
                                >
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-nowrap fs-12  my-2">
                                    AUTHORIZED PASSENGERS:
                                </p>
                            </td>
                            <td>
                                <span
                                    class="underline d-flex w-75 ml-n13 pl-4"
                                    >{{ request.passenger_count }}</span
                                >
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-nowrap fs-12  my-2">
                                    DESTINATION:
                                </p>
                            </td>
                            <td>
                                <span class="underline w-75 ml-n13 h-15 pl-4">{{
                                    request.destinations.toString()
                                }}</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex signatories my-5">
                                    <div class="sign">
                                        <p class="text-center font-weight-bold">
                                            MARLENE D. SINOC
                                        </p>
                                        <hr />
                                        <p class="text-center fs-12">
                                            DISPATCHER
                                        </p>
                                    </div>
                                    <div class="sign">
                                        <p class="text-center font-weight-bold">
                                            TERESA M. BIDAURE
                                        </p>
                                        <hr />
                                        <p class="text-center fs-12">
                                            HEAD, GENERAL SERVICES SECTION
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table id="tbl-passengers" class="fs-10 mt-2">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2">
                                                NAME OF PASSENGER / SIGNATURE
                                            </th>
                                            <th rowspan="2">DATE</th>
                                            <th rowspan="2">GENDER</th>
                                            <th rowspan="2">
                                                PLACE OF DEPARTURE
                                            </th>
                                            <th rowspan="2">TIME</th>
                                            <th rowspan="2">
                                                PLACE OF ARRIVAL
                                            </th>
                                            <th rowspan="2">TIME</th>
                                            <th colspan="2">
                                                ODOMETER READING
                                            </th>
                                            <th rowspan="2">FUEL READING</th>
                                        </tr>
                                        <tr>
                                            <th>STARTING</th>
                                            <th>ENDING</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(p, index) in passengers"
                                            :key="index"
                                        >
                                            <td>{{ p.name }}</td>
                                            <td></td>
                                            <td>{{ p.gender }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr
                                            v-for="index in freePax"
                                            :key="index"
                                        >
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="">
                                <table
                                    id="tbl-liters"
                                    class="w-90 my-5 mx-auto"
                                >
                                    <tr>
                                        <td width="120" class="fs-10">
                                            Gasoline Used:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                        <td width="100"></td>
                                        <td width="120" class="fs-10">
                                            Gear oil put in:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="120" class="fs-10">
                                            Issued from stock:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                        <td width="100"></td>
                                        <td width="120" class="fs-10">
                                            Motor oil put in:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="120" class="fs-10">
                                            Purchased outsied:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                        <td width="100"></td>
                                        <td width="120" class="fs-10">
                                            B. Fluid in:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="120" class="fs-10">
                                            Bal. in tank:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                        <td width="100"></td>
                                        <td width="120" class="fs-10">
                                            Greased used:
                                        </td>
                                        <td width="150">
                                            <p
                                                class="h-15 underline text-center fs-10"
                                            ></p>
                                        </td>
                                        <td
                                            width="50"
                                            class="text-center fs-10"
                                        >
                                            ltrs.
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex m-auto w-50 my-4">
                                    <p class="text-nowrap fs-12">
                                        TOTAL DISTANCE TRAVELLED (KM):
                                    </p>
                                    <span class="underline text-center"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="text-center fs-12 my-5">
                                    CERTIFIED CORRECT:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex signatories mb-4">
                                    <div class="sign">
                                        <p
                                            class="text-center font-weight-bold"
                                        ></p>
                                        <hr />
                                        <p
                                            class="text-center fs-12 font-weight-bold"
                                        >
                                            OFFICIAL
                                        </p>
                                    </div>
                                    <div class="sign">
                                        <p class="text-center font-weight-bold">
                                            {{ travel.fullname }}
                                        </p>
                                        <hr />
                                        <p
                                            class="text-center fs-12 font-weight-bold"
                                        >
                                            DRIVER
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="fs-9 text-center">
                                    DSWD Central Office, IBP Road, Batasan
                                    Pambansa Complex, Constitution Hills, Quezon
                                    City, Philippines 1126
                                </p>
                                <p class="fs-9 text-center">
                                    Website: <u>http://wwww.dswd.gov.ph</u> Tel
                                    Nos.: (632) 8 931-8191
                                </p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </page>
    </div>
</template>
<style></style>
<script>
export default {
    data() {
        return {
            date: null,
            type: null,
            request: {
                purpose: [],
                destinations: [],
                requested_by: null,
                passenger_count: 0
            },
            travel: {
                trip_ticket: null,
                fullname: null,
                vehicle_name: null,
                vehicle_plate_no: null,
                vehicle_type: null,
                starting_odo: null,
                ending_odo: null,
                distance_travelled: null
            },
            destinations: [],
            vehiclemodes: [],
            passengers: []
        };
    },
    computed: {
        freePax() {
            let pax = 15 - this.passengers.length;
            return pax;
        }
    },
    created() {
        this.getVehiclemode();
    },
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
            axios.get(BASE_URL + "/travel/printtripticket/" + id).then(res => {
                this.date = res.data.date_now;
                // Travel Data
                this.type = res.data.type;
                this.travel.fullname = res.data.travel.fullname;
                this.travel.starting_odo = res.data.travel.starting_odo;
                this.travel.ending_odo = res.data.travel.ending_odo;
                this.travel.distance_travelled = res.data.travel.travelled;
                this.travel.vehicle_name = res.data.travel.vehicle_name;
                this.travel.vehicle_plate_no = res.data.travel.vehicle_plate_no;
                this.travel.trip_ticket = res.data.travel.trip_ticket;
                this.travel.vehicle_type = res.data.travel.mot;
                this.request.passenger_count =
                    res.data.request[0].passenger_count;
                // Request Data
                this.request.requested_by = res.data.request[0].requested_by;
                for (let i = 0; i < res.data.request.length; i++) {
                    if (
                        this.$searchInArray(
                            res.data.request[i].purpose,
                            this.request.purpose
                        ) == false
                    ) {
                        this.request.purpose.push(res.data.request[i].purpose);
                    }
                    if (
                        this.$searchInArray(
                            res.data.request[i].place,
                            this.request.destinations
                        ) == false
                    ) {
                        this.request.destinations.push(
                            res.data.request[i].place
                        );
                    }
                }

                // Passengers Data
                for (let i = 0; i < res.data.passengers.length; i++) {
                    if (res.data.type == "rito") {
                        this.passengers.push({
                            name:
                                res.data.passengers[i].first_name +
                                " " +
                                res.data.passengers[i].middle_name[0] +
                                ". " +
                                res.data.passengers[i].last_name,
                            gender: res.data.passengers[i].gender
                        });
                    } else {
                        this.passengers.push({
                            name: res.data.passengers[i].name,
                            gender: res.data.passengers[i].gender
                        });
                    }
                }
            });
        },
        getVehiclemode() {
            axios.get(BASE_URL + "/api/v1/vehiclemode").then(res => {
                this.vehiclemodes = res.data.results;
            });
        }
    }
};
</script>
