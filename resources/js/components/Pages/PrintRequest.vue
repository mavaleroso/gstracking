<template>
    <div>
        <page  size="A4" class="paper-page">
            <div id="page-1">
                <table class="w-100">
                    <thead>
                        <tr>
                            <td colspan="3">
                                <div class="page-header mt-2">
                                    <img alt="Print Logo" class="print-logo d-block m-auto" src="assets/media/logos/dswd_print_logo.png">
                                    <span class="header-text d-block m-auto text-center">Field Office<br>Butuan City</span>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <h5 v-if="transaction.mot == 1" class="text-center d-block mr-auto ml-auto mt-5">Motor Vehicle Declined Request</h5>
                                <h5 v-else class="text-center d-block mr-auto ml-auto mt-5">Motor Vehicle Request</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="text-left my-10">Date: <span class=" text-underline">{{ date }}</span></p>
                            </td>
                            <td colspan="1">
                                <p class="text-right my-10">Series: <span class=" text-underline">{{ transaction.serial_code }}</span></p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="">Program / Division / Section:</p>
                            </td>
                            <td colspan="2">
                                <input class="input-text w-100 mb-3 mt-n2" type="text" v-model="transaction.department" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="">Purpose of travel:</p>
                            </td>
                            <td colspan="2">
                                <input class="input-text w-100 mb-3 mt-n2" type="text" v-model="transaction.purpose" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="">Destination:</p>
                            </td>
                            <td colspan="2">
                                <textarea class="form-control textarea my-3" id="kt_autosize_1" cols='60' rows='3' v-model="destinations" readonly>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="">Date of travel:</p>
                            </td>
                            <td colspan="2">
                                <input class="input-text w-100 mb-3 mt-n2" type="text" v-model="transaction.travel_date" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="">Date return:</p>
                            </td>
                            <td colspan="2">
                                <input class="input-text w-100 mb-3 mt-n2" type="text" v-model="transaction.return_date" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="pb-8">
                                <p class="">Time of departure:</p>
                            </td>
                            <td colspan="2" class="pb-8">
                                <input class="input-text w-100 mb-3 mt-n2" type="text" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td class="text-center table-border">Name of Passenger/s</td>
                                        <td class="text-center table-border">Position/Designation</td>
                                        <td class="text-center table-border w-10">Gender</td>
                                    </tr>
                                    <tr v-for="p in passengers" :key="p.id">
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="p.first_name + ' ' + p.middle_name + ' ' + p.last_name" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="p.position" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="p.gender" disabled></td>
                                    </tr>
                                    <tr v-for="f in freePassengers" :key="f.id">
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" disabled></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td class="p-4 py-10 w-50">
                                            <p class="mb-6">Requested by:</p>
                                            <input type="text" class="text-center input-text w-100 text-uppercase" v-model="transaction.requestor" disabled>
                                            <p class="text-center">Requestor</p>
                                        </td>
                                        <td class="p-4 py-10">
                                            <p class="mb-6">Noted by:</p>
                                            <input type="text" class="input-text w-100" disabled>
                                            <p class="text-center">Section/Program/Division Head</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                
                <hr  :class="(passengers.length > 5 || vehicles.length > 2) ? 'd-none':'dashed-border my-2'">
                <table :class="(passengers.length > 5 || vehicles.length > 2) ? 'break-page':''">
                    <thead v-if="passengers.length > 5">
                            <tr>
                                <td colspan="3">
                                    <div class="page-header mt-2">
                                        <img alt="Print Logo" class="print-logo d-block m-auto" src="assets/media/logos/dswd_print_logo.png">
                                        <span class="header-text d-block m-auto text-center">Field Office<br>Butuan City</span>
                                    </div>

                                </td>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h5 class="text-center d-block mr-auto ml-auto my-8">Motor Vehicle Confirmation Slip</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <p class="text-left my-10">Date: <span class=" text-underline">{{ date }}</span></p>
                            </td>
                            <td colspan="1">
                                <p class="text-right my-8">Series: <span class="text-underline">{{ transaction.serial_code }}</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="text-center table-border">Vehicle Name</td>
                                        <td class="text-center table-border">Plate No.</td>
                                        <td class="text-center table-border">Driver Name</td>
                                        <td class="text-center table-border">Contact No.</td>
                                    </tr>
                                    <tr v-for="v in vehicles" :key="v.id">
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="v.name" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="v.plate_no" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="v.fullname" disabled></td>
                                        <td class="table-border"><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2" :value="v.contact" disabled></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mt-5">Confirmed No. of Passenger/s:</p>
                            </td>
                            <td>
                                <input class="input-text w-100 mb-3 mt-n2" type="text" v-model="passengers.length" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 pt-10">
                                <p class="mb-6">Accepted by:</p>
                                <input type="text" class="text-center text-uppercase input-text w-100" :value="transaction.gs_staff.first_name + ' ' + transaction.gs_staff.last_name" disabled>
                                <p class="text-center">Assigned GS staff</p>
                            </td>
                            <td class="p-4 pt-10">
                                <p class="mb-6">Approved by:</p>
                                <input type="text" class="input-text w-100" disabled>
                                <p class="text-center">GSS Head</p>
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
            passenger_count:7,
            transaction: {
                depart_time: [],
                department: null,
                gs_staff: null,
                purpose: [],
                travel_date: [],
                return_date: [],
                serial_code: null,
                is_status: null,
                mot: null,
                requestor: []
            },
            destinations: [],
            passengers: [],
            vehicles: [],
        }
    },
    computed: {
        freePassengers() {
            let result = 5 - this.passengers.length;
            return (result > 0)? result:0;
        },
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {

            var scripts = [
                "/js/main.js",
            ];
            scripts.forEach(script => {
                let tag = document.createElement("script");
                tag.setAttribute("src", script);
                $('.print-content').append(tag);
            });

            document.onkeypress = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.onmousedown = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.onkeydown = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.addEventListener('contextmenu', function(e) {
                // e.preventDefault();
            });
            
            $('.btn-print').click(() => {
                $("#page-1").printThis();
            });

            let url = window.location.href;
            let data = this.parseURLParams(url);
            this.getData(data.id[0]);

            // document.getElementById("footer").style.pageBreakBefore = "always";
            // $('#footer').css('page-break-before', 'always');

        },
        parseURLParams(url) {
            var queryStart = url.indexOf("?") + 1,
                queryEnd   = url.indexOf("#") + 1 || url.length + 1,
                query = url.slice(queryStart, queryEnd - 1),
                pairs = query.replace(/\+/g, " ").split("&"),
                parms = {}, i, n, v, nv;

            if (query === url || query === "") return;

            for (i = 0; i < pairs.length; i++) {
                nv = pairs[i].split("=", 2);
                n = decodeURIComponent(nv[0]);
                v = decodeURIComponent(nv[1]);

                if (!parms.hasOwnProperty(n)) parms[n] = [];
                parms[n].push(nv.length === 2 ? v : null);
            }
            return parms;
        },
        getData(id) {
            axios.get(BASE_URL + '/travel/printrequest/'+id).then(res => {
                this.transaction.serial_code = res.data.trans[0].serial_code;
                this.transaction.department = null;
                this.transaction.mot = res.data.trans[0].mot;
                this.date = this.$dateEng(res.data.date_now);
                for (let i = 0; i < res.data.travels.length; i++) {
                    if(this.transaction.purpose.indexOf(res.data.travels[i].data[0].purpose) === -1) {
                        this.transaction.purpose.push(res.data.travels[i].data[0].purpose);
                    }
                    if(this.destinations.indexOf(res.data.travels[i].data[0].place) === -1) {
                        this.destinations.push(res.data.travels[i].data[0].place);
                    }
                    if(this.transaction.travel_date.indexOf(this.$dateEng(res.data.travels[i].data[0].inclusive_from)) === -1) {
                        this.transaction.travel_date.push(this.$dateEng(res.data.travels[i].data[0].inclusive_from));
                    }
                    if(this.transaction.return_date.indexOf(this.$dateEng(res.data.travels[i].data[0].inclusive_to)) === -1) {
                        this.transaction.return_date.push(this.$dateEng(res.data.travels[i].data[0].inclusive_to));
                    }
                    if(this.transaction.requestor.indexOf(res.data.travels[i].data[0].requested_by) === -1) {
                        this.transaction.requestor.push(res.data.travels[i].data[0].requested_by);
                    }
                    for (let j = 0; j < res.data.travels[i].passengers.length; j++) {
                        this.passengers.push(res.data.travels[i].passengers[j]);
                    }
                }
                this.vehicles = res.data.vehicles;
                this.transaction.gs_staff = res.data.gs_staff;
                autosize($('#kt_autosize_1'));
            });
        }
    },
}
</script>