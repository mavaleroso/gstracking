<template>
    <div>
        <page size="A4" class="paper-page">
            <div id="page-1">
                <table id="vehicle-request" class="w-100">
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
                                        DSWD-AS-GF-027 | REV 00/ 04 JAN 2021
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
                            <td colspan="3">
                                <h5 class="text-center">
                                    REQUEST FOR USE OF VEHICLE
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="p-fs-16">
                                    <strong>Note:</strong> Request for use of
                                    vehicle shall be made at least two (2) days
                                    from the intended date of use. Failure to
                                    use the vehicle at the given date/time
                                    forfeits one's right to use the vehicle
                                    assigned.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    1. REQUESTING OFFICE/UNIT
                                </p>
                            </td>
                            <td colspan="2 p-fs-16">
                                <p class="underline p-fs-16">
                                    : {{ department }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    2. PURPOSE OF TRIP
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline p-fs-16">: {{ purpose }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    3. NAME OF PASSENGER(S)
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline p-fs-16">
                                    : {{ passengers.toString() }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    4. PLACE OF TRAVEL
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline p-fs-16">: {{ place }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    5. DATE OF NEEDED
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline p-fs-16">
                                    : {{ travel_date }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-1 p-fs-16">
                                    6. TIME NEEDED
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline p-fs-16">:</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex signatories">
                                    <div class="sign">
                                        <p class="mb-4 font-weight-bold">
                                            REQUESTED BY:
                                        </p>
                                        <p class="text-center font-weight-bold">
                                            {{ requested_by }}
                                        </p>
                                        <hr />
                                        <p class="text-center fs-12">
                                            SIGNATURE OVER PRINTED NAME
                                        </p>
                                        <div class="d-flex mt-4">
                                            <p
                                                class="fs-11 text-nowrap font-weight-bold"
                                            >
                                                DATE REQUESTED:
                                            </p>
                                            <p class="underline pl-3 fs-11">
                                                {{ $dateEng(requested_date) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sign">
                                        <p class="mb-4 font-weight-bold">
                                            REQUEST RECEIVED BY:
                                        </p>
                                        <p class="text-center font-weight-bold">
                                            MARLENE D. SINOC
                                        </p>
                                        <hr />
                                        <p class="text-center fs-12">
                                            SIGNATURE OVER PRINTED NAME
                                        </p>
                                        <div class="d-flex mt-4">
                                            <p
                                                class="fs-11 text-nowrap font-weight-bold"
                                            >
                                                DATE RECEIVED:
                                            </p>
                                            <p class="underline"></p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="font-weight-bold text-center">
                                    TO BE FILLED-UP BY DISPATCHER
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font-weight-bold my-3">
                                    TICKET NO:
                                </p>
                            </td>
                            <td colspan="2">
                                <p class="underline">{{ ticket_no }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-3">
                                    <div class="assignment pr-8">
                                        <p class="text-center font-weight-bold">
                                            VEHICLE ASSIGNMENT
                                        </p>
                                        <hr />
                                    </div>
                                    <div class="assignment pl-8">
                                        <p class="text-center font-weight-bold">
                                            VEHICLE ASSIGNMENT
                                        </p>
                                        <hr />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex">
                                    <div class="assignment pr-8">
                                        <table>
                                            <tr>
                                                <td width="100">
                                                    <p class="fs-11">
                                                        VEHICLE TYPE:
                                                    </p>
                                                </td>
                                                <td>
                                                    <p
                                                        class="underline h-17"
                                                    ></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="assignment pl-8">
                                        <table>
                                            <tr>
                                                <td width="100">
                                                    <p class="fs-11">NAME:</p>
                                                </td>
                                                <td>
                                                    <p
                                                        class="underline h-17"
                                                    ></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex">
                                    <div class="assignment pr-8">
                                        <table>
                                            <tr>
                                                <td width="100">
                                                    <p class="fs-11">
                                                        PLATE NO.:
                                                    </p>
                                                </td>
                                                <td>
                                                    <p
                                                        class="underline h-17"
                                                    ></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="assignment pl-8">
                                        <table>
                                            <tr>
                                                <td width="100">
                                                    <p class="fs-11">
                                                        CONTACT NO.:
                                                    </p>
                                                </td>
                                                <td>
                                                    <p
                                                        class="underline h-17"
                                                    ></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="font-weight-bold mt-4">REMARKS:</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="underline h-17"></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="underline h-17"></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="checked mt-4 w-60">
                                    <p class="mb-4 font-weight-bold">
                                        CHECKED BY:
                                    </p>
                                    <p class="text-center font-weight-bold">
                                        MARLENE D. SINOC
                                    </p>
                                    <hr />
                                    <p class="text-center fs-12">
                                        DISPATCHER
                                    </p>
                                </div>
                            </td>
                            <td>
                                <table class="mt-5">
                                    <tr>
                                        <td width="30">
                                            <p class="fs-11 font-weight-bold">
                                                DATE:
                                            </p>
                                        </td>
                                        <td>
                                            <p class="underline fs-11 h-17"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30">
                                            <p class="fs-11 font-weight-bold">
                                                TIME:
                                            </p>
                                        </td>
                                        <td>
                                            <p class="underline fs-11 h-17"></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p class="font-weight-bold text-center">
                                    TO BE FILLED-UP BY THE ADMINISTRATIVE
                                    SERVICE - GENERAL SERVICES DIVISION
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex mt-4">
                                    <div class="assignment pr-8">
                                        <div class="d-flex mt-n10">
                                            <input
                                                type="checkbox"
                                                name=""
                                                id=""
                                                class="m-1"
                                            />
                                            <p class="font-weight-bold mr-4">
                                                AVAILABLE
                                            </p>
                                            <input
                                                type="checkbox"
                                                name=""
                                                id=""
                                                class="m-1"
                                            />
                                            <p class="font-weight-bold">
                                                NOT AVAILABLE
                                            </p>
                                        </div>
                                    </div>
                                    <div class="assignment pl-8">
                                        <div class="d-flex">
                                            <input
                                                type="checkbox"
                                                name=""
                                                id=""
                                                class="m-1"
                                            />
                                            <p class="font-weight-bold">
                                                APPROVED
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <input
                                                type="checkbox"
                                                name=""
                                                id=""
                                                class="m-1"
                                            />
                                            <p class="font-weight-bold">
                                                DISAPPROVED
                                            </p>
                                        </div>
                                        <p class="font-weight-bold fs-10">
                                            IF DISAPPROVED, PASSENGER TO USE
                                            PUBLIC TRANSPORTATION, SUBJECT TO
                                            REIMBURESEMENT IN ACCORDANCE WITH
                                            RELEVANT GUIDELINES.
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="checked mt-4 w-60">
                                    <p class="text-center font-weight-bold">
                                        TERESA M. BIDAURE AO - IV
                                    </p>
                                    <hr />
                                    <p class="text-center fs-12">
                                        HEAD, GENERAL SERVICES SECTION
                                    </p>
                                </div>
                            </td>
                            <td></td>
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
<script>
export default {
    data() {
        return {
            type: null,
            department: null,
            purpose: null,
            passengers: [],
            place: null,
            travel_date: null,
            travel_time: null,
            requested_by: null,
            requested_date: null,
            ticket_no: null
        };
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
            this.getData(data.id[0], data.type[0]);
            this.type = data.type[0];

            // document.getElementById("footer").style.pageBreakBefore = "always";
            // $('#footer').css('page-break-before', 'always');
        },
        getData(id, type) {
            axios
                .get(BASE_URL + "/travel/printrequest/" + id, {
                    params: {
                        type: type
                    }
                })
                .then(res => {
                    this.department =
                        this.type == "rito"
                            ? res.data.travel[0].requestor.division +
                              ", " +
                              res.data.travel[0].requestor.area_of_assignment
                            : res.data.travel[0].department;
                    this.purpose = res.data.travel[0].purpose;
                    for (let i = 0; i < res.data.passengers.length; i++) {
                        if (this.type == "rito") {
                            this.passengers.push(
                                this.$titleCase(
                                    res.data.passengers[i].first_name +
                                        " " +
                                        res.data.passengers[i].middle_name[0] +
                                        ". " +
                                        res.data.passengers[i].last_name
                                )
                            );
                        } else if (this.type == "local") {
                            this.passengers.push(
                                this.$titleCase(res.data.passengers[i].name)
                            );
                        }
                    }
                    this.place = res.data.travel[0].place;
                    this.travel_date =
                        this.$dateEng(res.data.travel[0].inclusive_from) +
                        " - " +
                        this.$dateEng(res.data.travel[0].inclusive_to);
                    this.requested_by = this.$titleCase(
                        res.data.travel[0].requestor.first_name +
                            " " +
                            (res.data.travel[0].requestor.middle_name == null
                                ? ""
                                : res.data.travel[0].requestor.middle_name[0]) +
                            ". " +
                            res.data.travel[0].requestor.last_name
                    );
                    this.ticket_no =
                        this.type == "rito"
                            ? res.data.travel[0].tracking_no
                            : res.data.travel[0].serial_code;
                    this.requested_date = res.data.travel[0].created_at;
                    autosize($("#kt_autosize_1"));
                });
        }
    }
};
</script>
