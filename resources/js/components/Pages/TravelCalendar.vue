<template>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-custom card-stretch">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Vehicles</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                        <div class="card" v-for="v in vehicle.data" :key="v.id">
                            <div class="card-header" :id="'headingOne' + v.id">
                                <div class="card-title collapsed" data-toggle="collapse" :data-target="'#collapseOne' + v.id">
                                    <i class="flaticon2-lorry"></i> {{ v.name }} <span class="mt-0 mb-0 ml-5 label label-primary label-inline">{{ v.template }}</span>
                                </div>
                            </div>
                            <div :id="'collapseOne' + v.id" class="collapse" data-parent="#accordionExample6">
                                <div class="card-body">
                                    <div v-for="r in vehicle.records.filter(i=>i.vehicle_id == v.id)" :key="r.id" class="timeline timeline-5 mt-1">
                                        <!-- cities.filter(i=>i.province_id == activeProv.id) -->
                                        <!--begin::Item-->
                                        <div class="timeline-item align-items-start">
                                            <!--begin::Label-->
                                            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3 text-nowrap">{{ dateFormat(r.travel_date) }}</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-success icon-xxl"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content text-dark-50">{{ r.purpose }}</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card card-custom card-stretch">
                <div class="card-body">
                    <div id="kt_calendar"></div>
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
                list: [],
                records: [],
                data: []
            }
        }
    },
    created() {
        this.getVehicles();
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            $(() => {
            });
        },
        ktcalendar() {
            let vm = this;
            return {
                init: function() {
                    var todayDate = moment().startOf('day');
                    var YM = todayDate.format('YYYY-MM');
                    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                    var TODAY = todayDate.format('YYYY-MM-DD');
                    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                        themeSystem: 'bootstrap',

                        isRTL: KTUtil.isRTL(),

                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay'
                        },

                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                        nowIndicator: true,
                        now: TODAY + 'T09:25:00', // just for demo

                        views: {
                            dayGridMonth: { buttonText: 'month' },
                            timeGridWeek: { buttonText: 'week' },
                            timeGridDay: { buttonText: 'day' }
                        },
  
                        defaultView: 'dayGridMonth',
                        defaultDate: TODAY,
                        editable: false,
                        eventLimit: true, // allow "more" link when too many events
                        navLinks: true,
                        events: vm.vehicle.list,

                        eventRender: function(info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                }
                            }
                        }
                    });

                    calendar.render();
                }
            };
        },
        getVehicles() {
            axios.get(BASE_URL + '/tracking/travelcalendar').then(response => {
                this.vehicle.list = response.data.list;
                this.vehicle.records = response.data.records;
                this.vehicle.data = response.data.data;
                this.ktcalendar().init();
            });
        },
        dateFormat(date) {
            return dateEng2(date);
        }
    },
}
</script>