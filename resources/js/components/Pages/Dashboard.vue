<template>
    <div id="dashboard-page">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div
                    class="col bg-light-danger px-6 py-8 rounded-xl mr-7 shadow-sm"
                >
                    <span
                        class="svg-icon svg-icon-3x svg-icon-danger d-block my-2"
                    >
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg
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
                                <g
                                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                    fill="#000000"
                                >
                                    <rect
                                        x="0"
                                        y="7"
                                        width="16"
                                        height="2"
                                        rx="1"
                                    />
                                    <rect
                                        opacity="0.3"
                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                        x="0"
                                        y="7"
                                        width="16"
                                        height="2"
                                        rx="1"
                                    />
                                </g>
                            </g>
                        </svg>
                        <h1 class="float-right text-danger font-weight-bold">
                            {{ overview.unassigned }}
                        </h1>
                        <!--end::Svg Icon-->
                    </span>
                    <a
                        href="#"
                        class="text-danger font-weight-bold font-size-h6 mt-2"
                        >Unassigned</a
                    >
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div
                    class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7 shadow-sm"
                >
                    <span
                        class="svg-icon svg-icon-3x svg-icon-warning d-block my-2"
                    >
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                        <svg
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
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"
                                    opacity="0.3"
                                />
                                <path
                                    d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <h1 class="float-right text-warning font-weight-bold">
                            {{ overview.pending }}
                        </h1>
                        <!--end::Svg Icon-->
                    </span>
                    <a
                        href="#"
                        class="text-warning font-weight-bold font-size-h6"
                        >Pending</a
                    >
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div
                    class="col bg-light-primary px-6 py-8 rounded-xl mb-7 shadow-sm"
                >
                    <span
                        class="svg-icon svg-icon-3x svg-icon-primary d-block my-2"
                    >
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                        <svg
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
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                    fill="#000000"
                                />
                                <path
                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <h1 class="float-right text-primary font-weight-bold">
                            {{ overview.approved }}
                        </h1>
                        <!--end::Svg Icon-->
                    </span>
                    <a
                        href="#"
                        class="text-primary font-weight-bold font-size-h6 mt-2"
                        >Approved</a
                    >
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="col bg-light-success px-6 py-8 rounded-xl">
                    <span
                        class="svg-icon svg-icon-3x svg-icon-success d-block my-2"
                    >
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                        <svg
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
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"
                                    opacity="0.3"
                                    transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) "
                                />
                                <path
                                    d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"
                                    transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) "
                                />
                            </g>
                        </svg>
                        <h1 class="float-right text-success font-weight-bold">
                            {{ overview.completed }}
                        </h1>
                        <!--end::Svg Icon-->
                    </span>
                    <a
                        href="#"
                        class="text-success font-weight-bold font-size-h6 mt-2"
                        >Completed</a
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-stretch">
                    <div class="card-header m-0 p-5">
                        <div class="card-title p-0 mb-0 h6">
                            Divisions Stat
                        </div>
                    </div>
                    <div
                        :class="
                            !division.count.length
                                ? 'card-body overlay overlay-block min-height-400'
                                : 'card-body min-height-400'
                        "
                    >
                        <div
                            v-if="!division.count.length"
                            class="overlay-layer bg-dark-o-10"
                        >
                            <div class="spinner spinner-primary"></div>
                        </div>
                        <div id="division-bar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-stretch">
                    <div class="card-header m-0 p-5">
                        <div class="card-title p-0 mb-0 h6">
                            Travels Stat
                        </div>
                    </div>
                    <div
                        :class="
                            !travel.count.length
                                ? 'card-body overlay overlay-block min-height-400'
                                : 'card-body min-height-400'
                        "
                    >
                        <div
                            v-if="!travel.count.length"
                            class="overlay-layer bg-dark-o-10"
                        >
                            <div class="spinner spinner-primary"></div>
                        </div>
                        <div id="travel-bar-chart"></div>
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
            division: {
                dep: [],
                count: []
            },
            travel: {
                month: [],
                count: []
            },
            overview: {
                unassigned: 0,
                pending: 0,
                approved: 0,
                completed: 0
            }
        };
    },
    mounted() {
        this.ini().init();
    },
    methods: {
        ini() {
            let vm = this;
            var charts = () => {
                $(() => {
                    setTimeout(() => {
                        vm.dashData();
                    }, 500);
                });
            };

            return {
                init: () => {
                    charts();
                }
            };
        },
        dashData() {
            axios.get(BASE_URL + "/tracking/dashboard").then(res => {
                var division_keys = [];
                var division_values = [];
                var travel_keys = [];
                var travel_values = [];
                var overview_keys = [];
                var overview_values = [];

                for (var k in res.data.divisions) division_keys.push(k);
                for (var v in res.data.divisions)
                    division_values.push(res.data.divisions[v]);

                for (var m in res.data.travels) travel_keys.push(m);
                for (var c in res.data.travels)
                    travel_values.push(res.data.travels[c]);

                for (var s in res.data.overview) overview_keys.push(s);
                for (var t in res.data.overview)
                    overview_values.push(res.data.overview[t]);

                this.division.dep = division_keys;
                this.division.count = division_values;

                this.travel.month = travel_keys;
                this.travel.count = travel_values;

                for (let o in res.data.overview) {
                    switch (o) {
                        case "unassigned":
                            this.overview.unassigned = res.data.overview[o];
                            break;
                        case "pending":
                            this.overview.pending = res.data.overview[o];
                            break;
                        case "approved":
                            this.overview.approved = res.data.overview[o];
                            break;
                        case "completed":
                            this.overview.completed = res.data.overview[o];
                            break;

                        default:
                            break;
                    }
                }

                this.KTApexCharts().init();
            });
        },
        KTApexCharts() {
            let vm = this;
            const primary = "#6993FF";
            const success = "#1BC5BD";
            const info = "#8950FC";
            const warning = "#FFA800";
            const danger = "#F64E60";

            var DivisionBarChart = function() {
                const apexChart = "#division-bar-chart";
                var options = {
                    series: [
                        {
                            name: "Travel/s",
                            data: JSON.parse(JSON.stringify(vm.division.count))
                        }
                    ],
                    chart: {
                        type: "bar",
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            columnWidth: "55%",
                            endingShape: "rounded"
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ["transparent"]
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.division.dep)),
                        title: {
                            text: "Travels"
                        }
                    },
                    yaxis: {
                        title: {
                            text: "Divisions"
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return val;
                            }
                        }
                    },
                    colors: [primary, success, warning]
                };

                var chart = new ApexCharts(
                    document.querySelector(apexChart),
                    options
                );
                chart.render();
            };

            var TravelBarChart = function() {
                const apexChart = "#travel-bar-chart";
                var options = {
                    series: [
                        {
                            name: "Travel/s",
                            data: JSON.parse(JSON.stringify(vm.travel.count))
                        }
                    ],
                    chart: {
                        type: "bar",
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "55%",
                            endingShape: "rounded"
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ["transparent"]
                    },
                    xaxis: {
                        categories: JSON.parse(JSON.stringify(vm.travel.month)),
                        title: {
                            text: "Months"
                        }
                    },
                    yaxis: {
                        title: {
                            text: "Travels"
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return val;
                            }
                        }
                    },
                    colors: [primary, success, warning]
                };

                var chart = new ApexCharts(
                    document.querySelector(apexChart),
                    options
                );
                chart.render();
            };

            return {
                init: function() {
                    DivisionBarChart();
                    TravelBarChart();
                }
            };
        }
    }
};
</script>
