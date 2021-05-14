<template>
    <div class="row">
        <div class="col-lg-9">
            <div class="card card-custom card-stretch">
                <div class="card-body">
                    <div id="kt_calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Office</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div v-if="vehicle.office.length" class="accordion accordion-solid accordion-toggle-plus" id="accordion-office">
                        <div class="card" v-for="v in vehicle.officeData" :key="v.id">
                            <div class="card-header" :id="'headingOne' + v.id">
                                <div class="card-title collapsed" data-toggle="collapse" :data-target="'#collapseOfficeOne' + v.id">
                                    <i class="flaticon2-lorry"></i> {{ v.name }} <span class="mt-0 mb-0 ml-5 label label-primary label-inline">{{ v.template }}</span>
                                </div>
                            </div>
                            <div :id="'collapseOfficeOne' + v.id" class="collapse" data-parent="#accordion-office">
                                <div class="card-body">
                                    <div v-for="r in vehicle.office.filter(i=>i.vehicle_id == v.id)" :key="r.id" class="timeline timeline-5 mt-1">
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
                    <div v-else>
                        <div class="alert alert-custom alert-default" role="alert">
                            <div class="alert-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Info-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                                        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <div class="alert-text">
                                No office vehicle travel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="vehicle.rental.length" class="card card-custom mt-5">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Rental</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-solid accordion-toggle-plus" id="accordion-rental">
                        <div class="card" v-for="v in vehicle.rentalData" :key="v.id">
                            <div class="card-header" :id="'headingOne' + v.id">
                                <div class="card-title collapsed" data-toggle="collapse" :data-target="'#collapseRentalOne' + v.id">
                                    <i class="flaticon2-lorry"></i> {{ v.name }} <span class="mt-0 mb-0 ml-5 label label-primary label-inline">{{ v.template }}</span>
                                </div>
                            </div>
                            <div :id="'collapseRentalOne' + v.id" class="collapse" data-parent="#accordion-rental">
                                <div class="card-body">
                                    <div v-for="r in vehicle.rental.filter(i=>i.vehicle_id == v.id)" :key="r.id" class="timeline timeline-5 mt-1">
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
            <div v-else>
                <div class="alert alert-custom alert-default" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Info-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                    </div>
                    <div class="alert-text">
                        No Rental vehicle travel.
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
                list: [],
                office: [],
                rental: [],
                officeData: [],
                rentalData: []
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
                this.vehicle.office = response.data.office;
                this.vehicle.rental = response.data.rental;
                this.vehicle.officeData = response.data.officeData;
                this.vehicle.rentalData = response.data.rentalData;
                this.ktcalendar().init();
            });
        },
        dateFormat(date) {
            return dateEng2(date);
        }
    },
}
</script>