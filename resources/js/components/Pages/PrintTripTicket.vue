<template>
    <div>
        <page size="A4" class="paper-page">
            <div id="page-1">
                <table class="w-100">
                    <thead>
                        <tr>
                            <td>
                                <p class="page-header-right">
                                    DSWD-FO-Caraga-F-AD-GS-003
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="page-header mt-2">
                                    <img
                                        alt="Print Logo"
                                        class="print-logo d-block m-auto"
                                        src="assets/media/logos/dswd_print_logo.png"
                                    />
                                    <span
                                        class="header-text d-block m-auto text-center"
                                        >Field Office Caraga, Capitol Site,
                                        Butuan City</span
                                    >
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h5
                                    class="text-center d-block mr-auto ml-auto mt-5 mb-10"
                                >
                                    VEHICLE TRIP TICKET
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex w-25 ml-auto">
                                    <p class="m-0 text-nowrap">Date:</p>
                                    <span class="underline text-center">{{
                                        $dateEng(date)
                                    }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex mt-3">
                                    <span class="box-letter">A</span>
                                    <p class="m-0">
                                        To filled-up by the Requesting Party
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex pl-8 mt-3">
                                    <span class="box-number">1</span>
                                    <p class="m-0 text-nowrap">
                                        Name of Driver of Vehicle :
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        >{{ travel.fullname }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex pl-8 mt-3">
                                    <span class="box-number">2</span>
                                    <p class="m-0 text-nowrap">
                                        Government Car to be used / Plate Number
                                        :
                                    </p>
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                        v-for="vm in vehiclemodes.filter(
                                            i => i.id == travel.vehicle_type
                                        )"
                                        :key="vm.id"
                                        >{{ travel.vehicle_name }} ({{
                                            vm.name
                                        }}) {{ travel.vehicle_plate_no }}</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex pl-8 mt-3">
                                    <span class="box-number">3</span>
                                    <p class="m-0 text-nowrap">
                                        Name of Authorized Passenger :
                                    </p>
                                    <span class="underline"></span>
                                </div>
                                <div class="d-flex pl-18 div-height mt-2">
                                    <span class="underline"></span>
                                </div>
                                <div class="d-flex pl-18 div-height mt-2">
                                    <span class="underline"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex pl-8 mt-3">
                                    <span class="box-number">4</span>
                                    <p class="m-0 text-nowrap">
                                        Place to be visited (for Butuan City
                                        proper, please indicate specific
                                        location)
                                    </p>
                                </div>
                                <div class="pl-18 div-height mt-2">
                                    <span class="underline font-weight-bold"
                                        >{{
                                            request.destinations.toString()
                                        }}.</span
                                    >
                                </div>
                                <!-- <div class="d-flex pl-18 div-height mt-2">
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                    ></span>
                                </div>
                                <div class="d-flex pl-18 div-height mt-2">
                                    <span
                                        class="underline pl-8 font-weight-bold"
                                    ></span>
                                </div> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="pl-8 mt-3">
                                    <div class="d-flex">
                                        <span class="box-number">5</span>
                                        <p class="m-0 text-nowrap">Purpose :</p>
                                    </div>

                                    <span
                                        class="ml-9 underline font-weight-bold"
                                        >{{ request.purpose.toString() }}.</span
                                    >
                                </div>
                                <!-- <div class="d-flex pl-18 div-height mt-2">
                                    <span class="underline"></span>
                                </div> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex mt-10">
                                    <div class="w-50">
                                        <p>Requested by:</p>
                                        <div class="ml-15 w-75 mt-8">
                                            <p
                                                class="underline mb-1 text-center font-weight-bold"
                                            >
                                                {{ request.requested_by }}
                                            </p>
                                            <p class="text-center">
                                                Division / Project / Unit /
                                                Section Head
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-50">
                                        <p>Approved by:</p>
                                        <div class="ml-15 w-75 mt-8">
                                            <p
                                                class="underline mb-1 text-center font-weight-bold"
                                            >
                                                TERESA M. BIDAURE, AO-III
                                            </p>
                                            <p class="text-center">
                                                Head General Services
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="w-100">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex mt-3">
                                    <span class="box-letter">B</span>
                                    <p class="m-0">
                                        To filled-up by the Driver
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8">
                                    <span class="box-number">1</span>
                                    <p class="m-0 text-nowrap">
                                        Time of Departure from Station / Office
                                        :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >AM / PM</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8">
                                    <span class="box-number">2</span>
                                    <p class="m-0 text-nowrap">
                                        Time of Arrival per # 4 above :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >AM / PM</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8">
                                    <span class="box-number">3</span>
                                    <p class="m-0 text-nowrap">
                                        Time of Departure per # 4 above :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >AM / PM</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8">
                                    <span class="box-number">4</span>
                                    <p class="m-0 text-nowrap">
                                        Time of Arrival at the Station / Office
                                        :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >AM / PM</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex pl-8">
                                    <p class="m-0">Petroleum Oil Lubricant</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex pl-8">
                                    <span class="box-number">5</span>
                                    <p class="m-0 text-nowrap">
                                        Fuel issued, purchased and used
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17">
                                    <span class="box-number">a</span>
                                    <p class="m-0 text-nowrap">
                                        Balance in Tank :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17">
                                    <span class="box-number">b</span>
                                    <p class="m-0 text-nowrap">
                                        Issued on Office from Stock :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17 ">
                                    <span class="box-number">c</span>
                                    <p class="m-0 text-nowrap">
                                        Additional purchase during trip :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17">
                                    <span class="box-number">d</span>
                                    <p class="m-0 text-nowrap">Total :</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17 ">
                                    <span class="box-number">e</span>
                                    <p class="m-0 text-nowrap">
                                        Used during trip (to and from) :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25 "
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-17 ">
                                    <span class="box-number">f</span>
                                    <p class="m-0 text-nowrap">
                                        Balance in tank at the end trip :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25 "
                                    ></span
                                    ><span class="line-height-25 mt-n2"
                                        >Liters</span
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8 ">
                                    <span class="box-number">6</span>
                                    <p class="m-0 text-nowrap">
                                        Motor Oil used :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="d-flex pl-8">
                                    <span class="box-number">7</span>
                                    <p class="m-0 text-nowrap">
                                        Break Fluid used :
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex text-nowrap">
                                    <span
                                        class="underline div-height line-height-25"
                                    ></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        Odometer Reading
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="w-100 odometer">
                                    <tbody>
                                        <tr>
                                            <td>Destination</td>
                                            <td>Reading (Start)</td>
                                            <td>Reading (Arrival)</td>
                                            <td>Distance travelled (km)</td>
                                            <td>
                                                Signature
                                                <br />(Passenger/Driver)
                                            </td>
                                        </tr>
                                        <tr
                                            v-for="(d,
                                            index) in request.destinations"
                                            :key="index"
                                        >
                                            <td class="row-height">
                                                {{ d }}
                                            </td>
                                            <td class="row-height">
                                                {{ travel.starting_odo }}
                                            </td>
                                            <td class="row-height">
                                                {{ travel.ending_odo }}
                                            </td>
                                            <td class="row-height">
                                                {{
                                                    travel.distance_travelled
                                                        ? travel.distance_travelled
                                                        : ""
                                                }}
                                            </td>
                                            <td class="row-height"></td>
                                        </tr>
                                        <tr
                                            v-for="index in freeDestinations"
                                            :key="index"
                                        >
                                            <td class="row-height"></td>
                                            <td class="row-height"></td>
                                            <td class="row-height"></td>
                                            <td class="row-height"></td>
                                            <td class="row-height"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">Remarks :</p>
                                    <span class="underline"></span>
                                </div>
                                <div class="d-flex pl-18 div-height">
                                    <span class="underline"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex mt-3">
                                    <p class="m-0 text-nowrap">
                                        I hereby certify to the correction of
                                        the above statement / record travel
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="mt-5 w-75 ml-auto">
                                    <p
                                        class="underline mb-1 text-center font-weight-bold text-uppercase"
                                    >
                                        {{ travel.fullname }}
                                    </p>
                                    <p class="text-center">Driver</p>
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
            request: {
                purpose: [],
                destinations: [],
                requested_by: null
            },
            travel: {
                fullname: null,
                vehicle_name: null,
                vehicle_plate_no: null,
                vehicle_type: null,
                starting_odo: null,
                ending_odo: null,
                distance_travelled: null
            },
            destinations: [],
            vehiclemodes: []
        };
    },
    computed: {
        freeDestinations() {
            let res = 5 - this.request.destinations.length;
            return res;
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
                $("#page-1").printThis();
            });

            let url = window.location.href;
            let data = this.$parseURLParams(url);
            this.getData(data.id[0]);
        },
        getData(id) {
            axios.get(BASE_URL + "/travel/printtripticket/" + id).then(res => {
                this.date = res.data.date_now;

                // Travel Data
                this.travel.fullname = res.data.travel.fullname;
                this.travel.starting_odo = res.data.travel.starting_odo;
                this.travel.ending_odo = res.data.travel.ending_odo;
                this.travel.distance_travelled = res.data.travel.travelled;
                this.travel.vehicle_name = res.data.travel.vehicle_name;
                this.travel.vehicle_plate_no = res.data.travel.vehicle_plate_no;
                this.travel.vehicle_type = res.data.travel.mot;

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
