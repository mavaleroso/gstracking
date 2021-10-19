<template>
    <div class="row">
        <div class="col-lg-9">
            <div class="card card-custom card-stretch">
                <div
                    :class="
                        loading
                            ? 'card-body overlay overlay-block '
                            : 'card-body '
                    "
                >
                    <div v-if="loading" class="overlay-layer bg-dark-o-10">
                        <div class="spinner spinner-primary"></div>
                    </div>
                    <div class="legend d-flex">
                        <h6 class="font-weight-bold mr-4 mt-2">Legend:</h6>
                        <div class="d-flex mx-3 my-2">
                            <span class="label label-warning mr-2"></span>
                            <label for=""> Pending Status</label>
                        </div>
                        <div class="d-flex mx-3 my-2">
                            <span class="label label-primary mr-2"></span>
                            <label for=""> Approved Status</label>
                        </div>
                    </div>
                    <hr />
                    <div id="kt_calendar"></div>
                    <table
                        v-if="!loading"
                        class="table table-responsive w-100 fs-10 mt-5"
                    >
                        <thead>
                            <tr class="table-primary fs-9">
                                <th>ID</th>
                                <th>Trip Ticket</th>
                                <th>Type</th>
                                <th>Tracking No.</th>
                                <th>Vehicle Name</th>
                                <th>Plate No.</th>
                                <th>Driver</th>
                                <th>Purpose</th>
                                <th>Place</th>
                                <th>Travel Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(t, index) in vehicle.data" :key="t.id">
                                <td>{{ index + 1 }}</td>
                                <td>{{ t.trip_ticket }}</td>
                                <td>{{ t.type }}</td>
                                <td>{{ t.request.tracking_no }}</td>
                                <td>{{ t.vehicle.name }}</td>
                                <td>{{ t.vehicle.plate_no }}</td>
                                <td>{{ t.drivers.fullname }}</td>
                                <td>{{ t.request.purpose }}</td>
                                <td>{{ t.request.place }}</td>
                                <td>
                                    {{ $dateEng2(t.request.inclusive_from) }} -
                                    {{ $dateEng2(t.request.inclusive_to) }}
                                </td>
                                <td v-html="$chkStatus(t.request.status)"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">RP Travels</h3>
                    </div>
                </div>
                <div
                    :class="
                        loading
                            ? 'card-body overlay overlay-block '
                            : 'card-body '
                    "
                >
                    <div v-if="loading" class="overlay-layer bg-dark-o-10">
                        <div class="spinner spinner-primary"></div>
                    </div>
                    <div v-for="(v, index) in vehicle.rp" :key="index">
                        <span
                            class="label label-primary label-inline h-auto p-1"
                            >{{ v.name }} - {{ v.plate_no }}</span
                        >
                        <div class="timeline timeline-5 mt-3">
                            <div
                                v-for="(data, index) in vehicle.data.filter(
                                    i => i.vehicle.id === v.id
                                )"
                                :key="index"
                                class="timeline-item align-items-start"
                            >
                                <div
                                    class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3 text-nowrap fs-9"
                                >
                                    {{ $dateNum(data.request.inclusive_from) }}
                                    -
                                    {{ $dateNum(data.request.inclusive_to) }}
                                </div>
                                <div class="timeline-badge">
                                    <i
                                        :class="
                                            data.request.status == 'Approved'
                                                ? 'fa fa-genderless text-primary icon-xxl'
                                                : 'fa fa-genderless text-warning icon-xxl'
                                        "
                                    ></i>
                                </div>
                                <div
                                    class="timeline-content text-dark-50 fs-11"
                                >
                                    <span
                                        class="label label-light-primary label-inline h-auto p-1"
                                        >{{ data.drivers.fullname }}</span
                                    >
                                    - {{ data.trip_ticket }} :
                                    {{ data.request.purpose }}
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div v-if="vehicle.list.length == 0 && !loading">
                        <div
                            class="alert alert-custom alert-default"
                            role="alert"
                        >
                            <div class="alert-icon">
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-2x"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px"
                                        height="24px"
                                        viewBox="0 0 24 24"
                                        version="1.1"
                                    >
                                        <g
                                            stroke="none"
                                            stroke-width="1"
                                            fill="none"
                                            fill-rule="evenodd"
                                        >
                                            <rect
                                                x="0"
                                                y="0"
                                                width="24"
                                                height="24"
                                            />
                                            <circle
                                                fill="#000000"
                                                opacity="0.3"
                                                cx="12"
                                                cy="12"
                                                r="10"
                                            />
                                            <rect
                                                fill="#000000"
                                                x="11"
                                                y="10"
                                                width="2"
                                                height="7"
                                                rx="1"
                                            />
                                            <rect
                                                fill="#000000"
                                                x="11"
                                                y="7"
                                                width="2"
                                                height="2"
                                                rx="1"
                                            />
                                        </g></svg
                                ></span>
                            </div>
                            <div class="alert-text">
                                No ongoing travel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom mt-3">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Hired Travels</h3>
                    </div>
                </div>
                <div
                    :class="
                        loading
                            ? 'card-body overlay overlay-block '
                            : 'card-body '
                    "
                >
                    <div v-if="loading" class="overlay-layer bg-dark-o-10">
                        <div class="spinner spinner-primary"></div>
                    </div>
                    <div
                        v-for="(v, index) in vehicle.hired.filter(
                            i => (i.used = 1)
                        )"
                        :key="index"
                    >
                        <span
                            class="label label-primary label-inline h-auto p-1"
                            >{{ v.name }} - {{ v.plate_no }}</span
                        >
                        <div class="timeline timeline-5 mt-3">
                            <div
                                v-for="(data, index) in vehicle.data.filter(
                                    i => i.vehicle.id === v.id
                                )"
                                :key="index"
                                class="timeline-item align-items-start"
                            >
                                <div
                                    class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3 text-nowrap fs-9"
                                >
                                    {{ $dateNum(data.request.inclusive_from) }}
                                    -
                                    {{ $dateNum(data.request.inclusive_to) }}
                                </div>
                                <div class="timeline-badge">
                                    <i
                                        :class="
                                            data.request.status == 'Approved'
                                                ? 'fa fa-genderless text-primary icon-xxl'
                                                : 'fa fa-genderless text-warning icon-xxl'
                                        "
                                    ></i>
                                </div>
                                <div
                                    class="timeline-content text-dark-50 fs-11"
                                >
                                    <span
                                        class="label label-light-primary label-inline h-auto p-1"
                                        >{{ data.drivers.fullname }}</span
                                    >
                                    -
                                    {{ data.trip_ticket }} :
                                    {{ data.request.purpose }}
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div v-if="vehicle.list.length == 0 && !loading">
                        <div
                            class="alert alert-custom alert-default"
                            role="alert"
                        >
                            <div class="alert-icon">
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-2x"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px"
                                        height="24px"
                                        viewBox="0 0 24 24"
                                        version="1.1"
                                    >
                                        <g
                                            stroke="none"
                                            stroke-width="1"
                                            fill="none"
                                            fill-rule="evenodd"
                                        >
                                            <rect
                                                x="0"
                                                y="0"
                                                width="24"
                                                height="24"
                                            />
                                            <circle
                                                fill="#000000"
                                                opacity="0.3"
                                                cx="12"
                                                cy="12"
                                                r="10"
                                            />
                                            <rect
                                                fill="#000000"
                                                x="11"
                                                y="10"
                                                width="2"
                                                height="7"
                                                rx="1"
                                            />
                                            <rect
                                                fill="#000000"
                                                x="11"
                                                y="7"
                                                width="2"
                                                height="2"
                                                rx="1"
                                            />
                                        </g></svg
                                ></span>
                            </div>
                            <div class="alert-text">
                                No ongoing travel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            vehicle: {
                rp: [],
                hired: [],
                list: [],
                data: [],
                all: []
            },
            loading: true
        };
    },
    created() {
        this.getData();
    },
    mounted() {
        this.ini();
        this.getVehicles();
    },
    methods: {
        ini() {
            $(() => {});
        },
        ktcalendar() {
            let vm = this;
            return {
                init: function() {
                    var todayDate = moment().startOf("day");
                    var YM = todayDate.format("YYYY-MM");
                    var YESTERDAY = todayDate
                        .clone()
                        .subtract(1, "day")
                        .format("YYYY-MM-DD");
                    var TODAY = todayDate.format("YYYY-MM-DD");
                    var TOMORROW = todayDate
                        .clone()
                        .add(1, "day")
                        .format("YYYY-MM-DD");

                    var calendarEl = document.getElementById("kt_calendar");
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [
                            "bootstrap",
                            "interaction",
                            "dayGrid",
                            "timeGrid",
                            "list"
                        ],
                        themeSystem: "bootstrap",

                        isRTL: KTUtil.isRTL(),

                        header: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay"
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 4, // see: https://fullcalendar.io/docs/aspectRatio

                        nowIndicator: true,
                        now: TODAY + "T09:25:00", // just for demo

                        views: {
                            dayGridMonth: { buttonText: "month" },
                            timeGridWeek: { buttonText: "week" },
                            timeGridDay: { buttonText: "day" }
                        },

                        defaultView: "dayGridMonth",
                        defaultDate: TODAY,
                        editable: false,
                        eventLimit: true, // allow "more" link when too many events
                        navLinks: true,
                        events: vm.vehicle.list,

                        eventRender: function(info) {
                            var element = $(info.el);

                            if (
                                info.event.extendedProps &&
                                info.event.extendedProps.description
                            ) {
                                if (element.hasClass("fc-day-grid-event")) {
                                    element.data(
                                        "content",
                                        info.event.extendedProps.description
                                    );
                                    element.data("placement", "top");
                                    KTApp.initPopover(element);
                                } else if (
                                    element.hasClass("fc-time-grid-event")
                                ) {
                                    element
                                        .find(".fc-title")
                                        .append(
                                            '<div class="fc-description">' +
                                                info.event.extendedProps
                                                    .description +
                                                "</div>"
                                        );
                                } else if (
                                    element.find(".fc-list-item-title")
                                        .lenght !== 0
                                ) {
                                    element
                                        .find(".fc-list-item-title")
                                        .append(
                                            '<div class="fc-description">' +
                                                info.event.extendedProps
                                                    .description +
                                                "</div>"
                                        );
                                }
                            }
                        }
                    });

                    calendar.render();
                }
            };
        },
        getData() {
            axios.get(BASE_URL + "/tracking/travelcalendar").then(response => {
                this.vehicle.list = response.data.list;
                this.vehicle.data = response.data.data;
                this.loading = false;
                setTimeout(() => {
                    this.ktcalendar().init();
                }, 1000);
            });
        },
        getVehicles() {
            setTimeout(() => {
                this.vehicle.hired = this.$store.getters[
                    "vehicles/hired_vehicles"
                ];
                this.vehicle.rp = this.$store.getters["vehicles/rp_vehicles"];
            }, 3000);
        },
        mot(id) {
            for (let i = 0; i < this.$store.getters["mot/mot"].length; i++) {
                if (this.$store.getters["mot/mot"][i].id == id) {
                    return this.$store.getters["mot/mot"][i].name;
                }
            }
        }
    }
};
</script>
