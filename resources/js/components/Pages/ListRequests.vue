<template>
    <div id="list-requests-page">
        <!--begin::Card-->
        <div class="card card-custom gutter-b animate__animated animate__fadeIn">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <router-link :to="{name: 'requestTravel'}" class="btn btn-primary font-weight-bolder" >
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>New Request</router-link>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-6">
                            <div class="row align-items-center">
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">All</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Approved</option>
                                            <option value="3">Completed</option>
                                            <option value="4">Declined</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--end: Search Form-->
                <!--begin: Datatable-->
                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <modal>
            <template v-slot:header>
                <h5 :class="request_status_lbl">{{ request_status }}</h5>
                <h5 class="modal-title"><span class="m-title">{{ request_title }}</span>
                <span class="d-block text-muted font-size-sm">Reference Code</span></h5>
                <h3 class="modal-date"><span class="m-date">{{ dateTimeEng }}</span>
                <span class="d-block text-muted font-size-sm">Date Created</span></h3>
                <button @click="edit" type="button" class="btn-edit btn btn-sm btn-primary mr-7">
                    <i class="la la-edit icon-md"></i>
                    <span>Edit</span>
                </button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <form id="request-form" class="form">
                    <input name="request_id" type="hidden" v-model="request_id"/>
                    <div class="card-body row">
                        <h5 class="col-lg-12 text-dark font-weight-bold mb-10">Requestor Details:</h5>
                        <div class="col-lg-6">
                            <input name="prog_div_sec" type="hidden" v-model="request_dept"/>
                            <div class="form-group">
                                <label>Type of Motor Vehicle</label>
                                <div class="radio-inline">
                                    <label class="radio radio-solid">
                                        <input type="radio" name="travel_radio" disabled="disabled" class="details-input" value="Office" v-model="request_vehicle"/> Office
                                        <span></span>
                                    </label>
                                    <label class="radio radio-solid">
                                        <input type="radio" name="travel_radio" disabled="disabled" class="details-input" value="Rental" v-model="request_vehicle"/> Rental
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Purpose of Travel</label>
                                <input type="text" name="pur_travel" class="form-control details-input" disabled="disabled" v-model="request_travelPurpose"/>
                            </div>
                            <div class="form-group">
                                <label>Date of Travel</label>
                                <input type="date" name="date_travel" class="form-control details-input" disabled="disabled" v-model="request_travelDate"/>
                            </div>
                            <div class="form-group">
                                <label>Time of Departure</label>
                                <input type="time" name="time_depart" class="form-control details-input" disabled="disabled" v-model="request_departTime"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Destination</label>
                                <br>
                                <select class="form-control select2 details-input" id="kt_select_region" name="region" disabled="disabled">
                                    <option v-for="region in regions" :key="region.id" :value="region.id">{{ region.region_name }}</option>
                                </select>
                                <span class="form-text text-muted">Region</span>
                                <br>
                                <select class="form-control select2 kt_select2_3 details-input" id="kt_select_province" name="province[]" multiple="multiple" disabled="disabled">
                                    <option v-for="province in provinces" :key="province.id" :value="province.id">{{ province.province_name }}</option>
                                </select>
                                <span class="form-text text-muted">Province</span>
                                <br>
                                <select class="form-control select2 kt_select2_3 details-input" id="kt_select_city" name="city[]" multiple="multiple" disabled="disabled">
                                    <optgroup v-for="activeProv in activeProvinces" :key="activeProv.id" :label="activeProv.province_name">
                                        <option v-for="city in cities.filter(i=>i.province_id == activeProv.id)" :key="city.id" :value="city.id">{{ city.city_name }}</option>
                                    </optgroup>
                                </select>
                                <span class="form-text text-muted">City</span>
                                <br>
                                <select class="form-control select2 kt_select2_3 details-input" id="kt_select_brgy" name="brgy[]" multiple="multiple" disabled="disabled">
                                    <optgroup v-for="activeCity in activeCities" :key="activeCity.id" :label="activeCity.city_name">
                                        <option v-for="brgy in brgys.filter(i=>i.city_id == activeCity.id)" :key="brgy.id" :value="brgy.id">{{ brgy.brgy_name }}</option>
                                    </optgroup>
                                </select>
                                <span class="form-text text-muted">Barangay</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="separator separator-dashed my-10"></div>
                            <div class="">
                                <div class="d-flex">
                                    <input id="pax-total" type="hidden" name="pax_total" v-model="passengers.length">
                                    <h5 class="text-dark font-weight-bold mb-10">Passenger Details:</h5>
                                    <div class="ml-auto" v-if="request_edit">
                                        <button class="btn btn-sm btn-outline-primary" @click="addRow"><i class="fa fa-plus-square p-0"></i></button>
                                        <button class="btn btn-sm btn-outline-primary" @click="removeRow"><i class="fa fa-minus-square p-0"></i></button>
                                    </div>
                                </div>
                                <table id="passenger-tbl" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col" class="text-center">Name of Passenger/s</th>
                                            <th scope="col" class="text-center">Position/Designation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(pax, index) in passengers" :key="index">
                                            <td scope="row" class="text-center">{{ paxIndex(index) }}</td>
                                            <td><input :name="'pax_name_' + paxIndex(index)" class="form-control details-input" type="text" disabled="disabled" :value="pax.name"/></td>
                                            <td><input :name="'pax_des_' + paxIndex(index)" class="form-control details-input" type="text" disabled="disabled" :value="pax.designation"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </template>
            <template v-slot:footer v-if="request_edit">
                <button type="button" class="btn btn-sm btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                <button @click="save(request_id)" type="button" class="btn btn-sm btn-primary font-weight-bold text-uppercase">Save</button>
            </template>
        </modal>
        <!--end::Modal-->
    </div>
</template>

<script>
import Modal from '../../components/Layouts/Modal';
export default {
    data() {
        return {
            request_id: null,
            request_status: null,
            request_status_lbl: null,
            request_title: null,
            request_createdAt: null,
            request_vehicle: null,
            request_travelPurpose: null,
            request_travelDate: null,
            request_departTime: null,
            request_dept: null,
            regions: [],
            provinces: [],
            cities: [],
            brgys: [],
            activeProvinces: [],
            activeCities: [],
            destinations: [],
            passengers: [],
            request_edit: 0,
            names: ['travel_radio', 'region', 'province', 'city', 'brgy', 'date_travel', 'pax_des_1', 'pax_name_1', 'prog_div_sec', 'pur_travel', 'time_depart'],
            ktdatatable: null,
            dateTimeEng: null
        }
    },  
    components: {
        Modal
    },
    created() {
        this.getRegion();
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            // LOAD SCRIPTS
            var scripts = [
                "/assets/js/pages/crud/forms/widgets/select2.js"
            ];
            scripts.forEach(script => {
                let tag = document.createElement("script");
                tag.setAttribute("src", script);
                document.getElementById("list-requests-page").appendChild(tag);
            });


            $(()=>{
                $('.menu-item').removeClass('menu-item-active');
                $('.router-link-active').parent().addClass('menu-item-active');
                
                this.KTDatatableModal().init();
                $('#kt_select_region').on('change', () => {
                    let id  = $('#kt_select_region').val();
                    this.getProvince(id);
                    this.provinces= [];
                    this.cities = [];
                    this.brgys = [];
                    this.activeProvinces = [];
                    this.activeCities = [];
                });

                $('#kt_select_province').on('change', () => {
                    let id  = $('#kt_select_province').val();
                    id = id.map(i=>Number(i));
                    this.provinces.map(i=> {
                        if (id.indexOf(i.id) != -1) {
                            i.active="true";
                        } else {
                            i.active="false";
                        }
                    });
                    if(id.length != 0) {
                        this.getCity(id);
                        this.currentProv();             
                    }
                });

                $('#kt_select_city').on('change', () => {
                    let id  = $('#kt_select_city').val();
                    id = id.map(i=>Number(i));
                    this.cities.map(i=> {
                        if (id.indexOf(i.id) != -1) {
                            i.active="true";
                        } else {
                            i.active="false";
                        }
                    });
                    if(id.length != 0) {
                        this.getBrgy(id);
                        this.currentCity();
                    }
                });

                $('#kt_datatable_modal').on('hidden.bs.modal', function (e) {
                    $('.details-input').attr('disabled',true);
                    this.request_edit = 0;
                    $('.btn-edit span').text('Edit');
                });
            });
        },
        KTDatatableModal() {
            var initDatatable = () => {
                var el = $('#kt_datatable');
                var count = 0;
                var vm = this;

                var datatable = el.KTDatatable({
                    // datasource definition
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: HOST_URL + '/travel/listrequest',
                                method: 'GET',
                            },
                        },
                        pageSize: 10, // display 20 records per page
                        
                    },

                    // layout definition
                    layout: {
                        theme: 'default',
                        scroll: true,
                        height: null,
                        footer: false,
                    },

                    // column sorting
                    sortable: true,

                    pagination: true,

                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },

                    // columns definition
                    columns: [{
                        field: 'id',
                        title: 'ID',
                        width: 35,
                        autoHide: false,
                        // template: () => {
                        //     count += 1;
                        //     return count;
                        // }
                    }, {
                        field: 'serial_code',
                        title: 'code',
                        textAlign: 'center',
                        autoHide: false,
                    }, {
                        field: 'type_vehicle',
                        title: 'Vehicle Type',
                        autoHide: false,
                    }, {
                        field: 'department',
                        title: 'Department',
                    }, {
                        field: 'purpose',
                        title: 'Purpose',
                        autoHide: false,
                    }, {
                        field: 'travel_date',
                        title: 'Travel Date',
                        autoHide: false,
                        textAlign: 'center',
                        template: (row) => {
                            return dateEng(row.travel_date);
                        }
                    }, {
                        field: 'depart_time',
                        title: 'Depart Time',
                        textAlign: 'center',
                        autoHide: false,
                        template: (row) => {
                            return timeEng(row.depart_time);
                        }
                    }, {
                        field: 'is_status',
                        title: 'Status',
                        autoHide: false,
                        // callback function support for column rendering
                        template: (row) => {
                            var status = {
                                1: {
                                    'title': 'Pending',
                                    'class': ' label-light-warning'
                                },
                                2: {
                                    'title': 'Approved',
                                    'class': ' label-light-info'
                                },
                                3: {
                                    'title': 'Completed',
                                    'class': ' label-light-success'
                                },
                                4: {
                                    'title': 'Declined',
                                    'class': ' label-light-danger'
                                }
                            };
                            return '<span class="label label-lg font-weight-bold ' + status[row.is_status].class + ' label-inline">' + status[row.is_status].title + '</span>';
                        },
                    }, {
                        field: 'created_at',
                        title: 'Date Created',
                        order: 'desc',
                        width: 130,
                        textAlign: 'center',
                        template: (row) => {
                            return dateTimeEng(row.created_at);
                        }
                    }, {
                        field: 'fullname',
                        title: 'Requested By',
                    },{
                        field: 'Actions',
                        width: 130,
                        title: 'Actions',
                        sortable: false,
                        overflow: 'visible',
                        textAlign: 'left',
                        autoHide: false,
                        template: (row) => {
                            return '\
                                <button data-record-id="' + row.id + '" class="btn btn-sm btn-clean btn-details" title="View records">\
                                    <i class="flaticon2-document"></i> Details\
                                </button>';
                        },
                    }],
                });

                vm.ktdatatable = datatable;

                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'is_status');
                });

                datatable.on('click', '[data-record-id]', function() {
                    let recordID = $(this).data('record-id');
                    let recordData = $.grep(datatable.dataSet, v => {
                        return v.id === recordID;
                    });

                    switch (recordData[0].is_status) {
                        case 1:
                                vm.request_status = 'Pending';
                                vm.request_status_lbl = 'modal-status label label-warning label-inline mr-5';
                            break;
                        case 2:
                                vm.request_status = 'Approved';
                                vm.request_status_lbl = 'modal-status label label-primary label-inline mr-5';
                            break;
                        case 3:
                                vm.request_status = 'Completed';
                                vm.request_status_lbl = 'modal-status label label-success label-inline mr-5';
                            break;
                        case 4:
                                vm.request_status = 'Rejected';
                                vm.request_status_lbl = 'modal-status label label-danger label-inline mr-5';
                            break; 
                    }

                    vm.request_id = recordData[0].id;
                    vm.request_title = recordData[0].serial_code;
                    vm.request_createdAt = recordData[0].created_at;
                    vm.request_vehicle = recordData[0].type_vehicle;
                    vm.request_travelPurpose = recordData[0].purpose;
                    vm.request_travelDate = recordData[0].travel_date;
                    vm.request_departTime = recordData[0].depart_time;
                    vm.request_dept = recordData[0].department;

                    vm.dateTimeEng = dateTimeEng(recordData[0].created_at);
                    vm.getDetails(vm.request_id);
                    vm.getPassengers(vm.request_id);

                    $('#kt_datatable_modal').modal('show');
                });

            };

            return {
                init: function() {
                    initDatatable();
                }
            };
        },
        getRegion() {
            axios.get(BASE_URL + "/api/region").then(response => {
                this.regions = response.data;
            });
        },
        getProvince(id) {
            axios.get(BASE_URL + "/api/province/" + id).then(response => {
                this.provinces = response.data;
                this.provinces.map(i=>i.active="false")
            });
        },
        getCity(id) {
            axios.get(BASE_URL + "/api/city/" + id).then(response => {
                this.cities = response.data;
                this.cities.map(i=>i.active="false")
            });
        },
        getBrgy(id) {
            axios.get(BASE_URL + "/api/brgy/" + id).then(response => {
                this.brgys = response.data;
            });
        },
        currentProv() {
            this.activeProvinces = this.provinces.filter(i => i.active === 'true');
        },
        currentCity() {
            this.activeCities = this.cities.filter(i => i.active === 'true');
        },
        getDetails(id) {
            $('.details-input').attr('disabled',true);
            this.request_edit = 0;
            $('#kt_select_region').val();
            axios.get(BASE_URL + "/api/destination/" + id).then(response => {
                let destination = response.data;
                let data = [];

                const distinct = (value, index, self) => {
                    return self.indexOf(value) === index;
                }

                data['region'] = (destination.map(function(d) { return d['region_id']; })).filter(distinct);
                data['province'] = (destination.map(function(d) { return d['province_id']; })).filter(distinct);
                data['city'] = (destination.map(function(d) { return d['city_id']; })).filter(distinct);
                data['brgy'] = (destination.map(function(d) { return d['brgy_id']; })).filter(distinct);

                $('#kt_select_region').val(data.region);
                $('#kt_select_region').trigger('change');
                let ctr_p = 0;
                let ctr_c = 0;
                let ctr_b = 0;

                setTimeout(() => {
                    $('#kt_select_province').val(data.province);
                    $('#kt_select_province').trigger('change');
                }, 500);
                setTimeout(() => {
                    $('#kt_select_city').val(data.city);
                    $('#kt_select_city').trigger('change');
                }, 1000);
                setTimeout(() => {
                    $('#kt_select_brgy').val(data.brgy);
                    $('#kt_select_brgy').trigger('change');
                }, 1500);
                    
            });
        },
        getPassengers(id) {
            axios.get(BASE_URL + "/api/passenger/" + id).then(response => {
                this.passengers = response.data;
            });
        },
        paxIndex(index) {
            return index + 1;
        },
        edit() {
            let btn_edit = $('.btn-edit span');
            if (btn_edit.text() == 'Edit') {
                btn_edit.text('Cancel');
                $('.details-input').attr('disabled',false);
                this.request_edit = 1;
                showToast('Can edit request now!', 'info');
            } else {
                btn_edit.text('Edit');
                $('.details-input').attr('disabled',true);
                this.request_edit = 0;
                showToast('Canceled edit request now!', 'info');
            }
            
        },
        save(id) {
            let requestform = $('#request-form').serialize();
            axios.put(BASE_URL + "/travel/listrequest/" + id, requestform).then(response => {
                $('.new-row').remove();
                $('.details-input').attr('disabled',true);
                this.request_edit = 0;
                $('.btn-edit span').text('Edit');
                $('.invalid-feedback').remove();
                $('.is-invalid').removeClass('is-invalid');
                Swal.fire("Good job!", response.data.message, "success");
                showToast(response.data.message, 'success');
                this.getPassengers(this.request_id);
            }).catch((error) => {
                let data = error.response.data.errors;
                let keys = [];
                let values = [];
                for (const [key, value] of Object.entries(data)) {
                    keys.push(`${key}`);
                    values.push(`${value}`);
                    if (`${key}` == 'travel_radio') {
                        if ($('.checkbox-inline').next().length == 0 || $('.checkbox-inline').next().attr('class').search('invalid-feedback') == -1) {
                            $('.checkbox-inline').after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                        }
                    } else if (`${key}` == 'region' || `${key}` == 'province' || `${key}` == 'city' || `${key}` == 'brgy'){
                        if (`${key}` == 'brgy') {
                            if ($('#kt_select_'+`${key}`).next().next().length == 0 || $('#kt_select_'+`${key}`).next().next().attr('class').search('invalid-feedback') == -1) {
                                $('#kt_select_'+`${key}`).next().after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                            }
                        } else {
                            if ($('#kt_select_'+`${key}`).next().next().attr('class').search('invalid-feedback') == -1) {
                                $('#kt_select_'+`${key}`).next().after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                            }
                        }
                    } else {
                        if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                            $('input[name="'+`${key}`+'"]').addClass('is-invalid');
                            $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                        }
                    }
                }
                for (let i = 0; i < this.names.length; i++) {
                    if (this.names[i] == 'travel_radio') {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            if ($('.checkbox-inline').next().length != 0) {
                                $('.checkbox-inline').next('.invalid-feedback').remove();
                            }
                        } 
                    } else if (this.names[i] == 'region' || this.names[i] == 'province' || this.names[i] == 'city' || this.names[i] == 'brgy') {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            if (this.names[i] == 'brgy') {
                                if ($('#kt_select_'+this.names[i]).next().next().length != 0) {
                                    $('#kt_select_'+this.names[i]).next().next('.invalid-feedback').remove();
                                }
                            } else {
                                if ($('#kt_select_'+this.names[i]).next().next().attr('class').search('invalid-feedback') != -1) {
                                    $('#kt_select_'+this.names[i]).next().next('.invalid-feedback').remove();
                                }
                            }
                        }
                    } else {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            $('input[name="'+this.names[i]+'"]').removeClass('is-invalid');
                            $('[name="'+this.names[i]+'"]').next('.invalid-feedback').remove();
                        }
                    }
                }
                showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        },
        addRow(event){
            event.preventDefault();
            let lastTr = parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text());
            lastTr += 1;
            $('#passenger-tbl tbody').append('<tr class="new-row"><td scope="row" class="text-center">'+lastTr+'</td><td><input name="pax_name_'+lastTr+'" class="form-control details-input" type="text" /></td><td><input name="pax_des_'+lastTr+'" class="form-control details-input" type="text" /></td></tr>');
            $('#pax-total').val(lastTr);
            this.names.push('pax_name_'+lastTr);
            this.names.push('pax_des_'+lastTr);
        },
        removeRow(event){
            event.preventDefault();
            let lastTr = $('#passenger-tbl tbody tr:eq(-1)');
            if(lastTr.find('td:eq(0)').text() != '1') {
                let aliasNames = this.names;
                let paxName = aliasNames.indexOf('pax_name_'+lastTr.find('td:eq(0)').text());
                let paxDes = aliasNames.indexOf('pax_name_'+lastTr.find('td:eq(0)').text());
                if (paxName > -1) {
                    aliasNames.splice(paxName, 1);
                }
                if (paxDes > -1) {
                    aliasNames.splice(paxDes, 1);
                }
                this.names = aliasNames;

                lastTr.remove();
            }
            $('#pax-total').val(parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text()));
        }
    },
}
</script>