<template>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <!--begin::Mixed Widget 1-->
            <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title font-weight-bolder text-white">Overview</h3>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header pb-1">
                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-shopping-cart-1"></i>
                                            </span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Event</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-graph-1"></i>
                                            </span>
                                            <span class="navi-text">Report</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Post</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-writing"></i>
                                            </span>
                                            <span class="navi-text">File</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 position-relative overflow-hidden">
                    <!--begin::Chart-->
                    <div id="travel-stats" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-spacer mt-n25">
                        <!--begin::Row-->
                        <div class="row m-0">
                            <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                        </g>
                                    </svg>
                                    <h1 class="float-right text-warning font-weight-bold">{{ overview.pending }}</h1>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-warning font-weight-bold font-size-h6">Pending</a>
                            </div>
                            <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <h1 class="float-right text-primary font-weight-bold">{{ overview.approved }}</h1>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Approved</a>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row m-0">
                            <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <h1 class="float-right text-danger font-weight-bold">{{ overview.rejected }}</h1>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Rejected</a>
                            </div>
                            <div class="col bg-light-success px-6 py-8 rounded-xl">
                                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <h1 class="float-right text-success font-weight-bold">{{ overview.completed }}</h1>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Completed</a>
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>
        <div class="col-xl-4 col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Division</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="division-chart"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xl-4 col-lg-6">
            <!--begin::List Widget 9-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Activities</h3>
                    </div>
                    <div class="card-toolbar">
                        <ul class="nav nav-light-success nav-bold nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_4_1">
                                    <span class="nav-icon"><i class="flaticon-event-calendar-symbol"></i></span>
                                    <span class="nav-text">Upcoming</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_2">
                                    <span class="nav-icon"><i class="flaticon-list-1"></i></span>
                                    <span class="nav-text">Recent</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active p-10" id="kt_tab_pane_4_1" role="tabpanel" aria-labelledby="kt_tab_pane_4_1">
                            <div class="timeline timeline-5 mt-3">
                                <div v-for="activity in activities.upcoming" :key="activity.id" class="timeline-item align-items-start">
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3 text-nowrap">{{ dateEngShort(activity.travel_date) }}</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary icon-xxl"></i>
                                    </div>
                                    <div class="timeline-content text-dark-50"><span class="label label-primary label-inline mr-2">{{ activity.trip_ticket }}</span> {{ activity.purpose }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-10" id="kt_tab_pane_4_2" role="tabpanel" aria-labelledby="kt_tab_pane_4_2">
                            <div class="timeline timeline-5 mt-3">
                                <div v-for="activity in activities.recent" :key="activity.id" class="timeline-item align-items-start">
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3 text-nowrap">{{ dateEngShort(activity.travel_date) }}</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success icon-xxl"></i>
                                    </div>
                                    <div class="timeline-content text-dark-50"><span class="label label-success label-inline mr-2">{{ activity.trip_ticket }}</span> {{ activity.purpose }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Card-->
        </div>
        <div class="col-xl-4 col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Travel Stat</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_2"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xl-4 col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">PO Stat</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_3"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xl-4 col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">PO Balance</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_12" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            overview: {
                pending: 0,
                approved: 0,
                rejected: 0,
                completed: 0
            },
            travel: {
                month: [],
                count: []
            },
            po: {
                no: [],
                amount: [],
                balance: [],
                balance_percent: []
            },
            activities: {
                upcoming: [],
                recent: []
            },
            division: {
                dep: [],
                count: [],
            }
        }
    },
    mounted() {
        this.ini().init();
        this.ini().events();
    },
    methods: {
        dashData() {
            let year = $('#year').val();
            
            axios.get(BASE_URL + '/api/dash/' + year).then(res => { 
                for (let i = 0; i <  res.data.overview.length; i++) {
                    switch (res.data.overview[i]['is_status']) {
                        case 1:
                            this.overview.pending = res.data.overview[i]['count_status']
                            break;
                    
                        case 2:
                            this.overview.approved = res.data.overview[i]['count_status']
                            break;

                        case 3:
                            this.overview.completed = res.data.overview[i]['count_status']
                            break;

                        case 4:
                            this.overview.rejected = res.data.overview[i]['count_status']
                            break;
                        default:
                            break;
                    }
                }

                for (let i = 0; i < res.data.travel.length; i++) {
                    this.travel.month.push(res.data.travel[i]['travel_month']);
                    this.travel.count.push(res.data.travel[i]['travel_count']);
                }

                for (let i = 0; i < res.data.procurement.length; i++) {
                    let amount = res.data.procurement[i]['po_amount'];
                    let balance = (res.data.procurement[i]['totalBalance'])? res.data.procurement[i]['totalBalance']:res.data.procurement[i]['po_amount'];
                    let percent =  (balance / amount) * 100;
                    this.po.no.push(res.data.procurement[i]['po_no']);
                    this.po.amount.push(amount);
                    this.po.balance.push(balance);
                    this.po.balance_percent.push(percent.toFixed(2));
                }

                this.activities.upcoming = res.data.activities.upcoming;
                this.activities.recent = res.data.activities.recent;


                this.KTApexCharts().init();
            });
        },
        ini() {
            let vm = this;
            var charts = () => {
                $(()=>{
                    setTimeout(() => {
                        vm.dashData();
                    }, 500);
                });
            }

            var events = () => {
                $(() => {
                    $('#year').change(() => {
                        vm.overview.pending = 0;
                        vm.overview.approved = 0;
                        vm.overview.rejected = 0;
                        vm.overview.completed = 0;
                        vm.travel.month = [],
                        vm.travel.count = [],
                        vm.po.no = [],
                        vm.po.amount = [],
                        vm.po.balance = [],
                        vm.po.balance_percent = [],
                        vm.activities.upcoming = [],
                        vm.activities.recent = [],
                        $('#chart_2').children().remove();
                        $('#chart_3').children().remove();
                        $('#chart_12').children().remove();
                        $('#travel-stats').children().remove();
                        vm.ini().init();
                    });
                });
            }

            return {
                init: () => {
                    charts();
                },
                events: () => {
                    events();
                }
               
            };
        },
        KTApexCharts() {
            let vm = this;
            const primary = '#6993FF';
            const success = '#1BC5BD';
            const info = '#8950FC';
            const warning = '#FFA800';
            const danger = '#F64E60';

            var LineChart = function() {
                const apexChart = "#chart_2";
                var options = {
                    series: [{
                        name: "Travels",
                        data: JSON.parse(JSON.stringify(vm.travel.count))
                    }],
                    chart: {
                        height: 350,
                        type: 'area',
                        redrawOnParentResize: true,
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: { 	
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.travel.month)),
                    },
                    colors: [primary]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            var DivisionChart = function() {
                const apexChart = "#division-chart";
                var options = {
                    series: [{
                        name: "Division",
                        data: JSON.parse(JSON.stringify(vm.division.count))
                    }],
                    chart: {
                        height: 350,
                        type: 'area',
                        redrawOnParentResize: true,
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: { 	
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.division.dep)),
                    },
                    colors: [primary]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            var TravelStat = function() {
                var element = document.getElementById("travel-stats");
                var height = parseInt(KTUtil.css(element, 'height'));
                if (!element) {
                    return;
                }
                var strokeColor = '#D13647';

                var options = {
                    series: [{
                        name: 'Monthly Travel',
                        data: JSON.parse(JSON.stringify(vm.travel.count))
                    }],
                    chart: {
                        type: 'area',
                        height: height,
                        toolbar: {
                            show: false
                        },
                        zoom: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                        dropShadow: {
                            enabled: true,
                            enabledOnSeries: undefined,
                            top: 5,
                            left: 0,
                            blur: 3,
                            color: strokeColor,
                            opacity: 0.5
                        }
                    },
                    plotOptions: {},
                    legend: {
                        show: false
                    },
                    dataLabels: {
                        enabled: false
                    },
                    fill: {
                        type: 'solid',
                        opacity: 0
                    },
                    stroke: {
                        curve: 'smooth',
                        show: true,
                        width: 3,
                        colors: [strokeColor]
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.travel.month)),
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            show: false,
                            style: {
                                colors: ['#B5B5C3'],
                                fontSize: '12px',
                                fontFamily: "Poppins" 
                            }
                        },
                        crosshairs: {
                            show: false,
                            position: 'front',
                            stroke: {
                                color: ['#E5EAEE'],
                                width: 1,
                                dashArray: 3
                            }
                        }
                    },
                    yaxis: {
                        min: 0,
                        labels: {
                            show: false,
                            style: {
                                colors: ['#B5B5C3'],
                                fontSize: '12px',
                                fontFamily: "Poppins" 
                            }
                        }
                    },
                    states: {
                        normal: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        hover: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        active: {
                            allowMultipleDataPointsSelection: false,
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        }
                    },
                    tooltip: {
                        style: {
                            fontSize: '12px',
                            fontFamily: KTApp.getSettings()['font-family']
                        },
                        y: {
                            formatter: function(val) {
                                return "" + val + " Travels"
                            }
                        },
                        marker: {
                            show: false
                        }
                    },
                    colors: ['transparent'],
                    markers: {
                        colors: "#FFE2E5",
                        strokeColor: [strokeColor],
                        strokeWidth: 3
                    }
                };

                var chart = new ApexCharts(element, options);
                chart.render();
            }

            var BarChart = function () {
                const apexChart = "#chart_3";
                var options = {
                    series: [{
                        name: 'Amount',
                        data: JSON.parse(JSON.stringify(vm.po.amount)),
                    }, {
                        name: 'Balance',
                        data: JSON.parse(JSON.stringify(vm.po.balance)),
                    }],
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.po.no)),
                    },
                    yaxis: {
                        title: {
                            text: '₱ (thousands)'
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "₱ " + toParseNum(val);
                            }
                        }
                    },
                    colors: [primary, success, warning]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            var PieChart = function () {
                const apexChart = "#chart_12";
                var options = {
                    series: JSON.parse(JSON.stringify(vm.po.balance_percent)),
                    chart: {
                        height: 350,
                        type: 'radialBar',
                    },
                    plotOptions: {
                        radialBar: {
                            dataLabels: {
                                name: {
                                    fontSize: '22px',
                                },
                                value: {
                                    fontSize: '16px',
                                },
                                total: {
                                    show: true,
                                    label: 'Total Balance',
                                    formatter: function (w) {
                                        let total = 0;
                                        for (let i = 0; i < vm.po.balance_percent.length; i++) {
                                            total += parseInt(vm.po.balance_percent[i]);
                                        }
                                        return (total / vm.po.balance_percent.length).toFixed(2) + ' %';
                                    }
                                }
                            }
                        }
                    },
                    labels: JSON.parse(JSON.stringify(vm.po.amount)),
                    colors: [primary, success, warning, danger]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();
            }

            return {
                init: function() {
                    TravelStat();
                    LineChart();
                    BarChart();
                    PieChart();
                    DivisionChart();
                }
            };
        },
        dateEngShort(date) {
            return dateEng2(date);
        }
    },
}
</script>