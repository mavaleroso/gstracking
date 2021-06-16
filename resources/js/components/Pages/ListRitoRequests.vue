<template>
    <div id="rito-requests-page">
        <!--begin::Card-->
        <div class="card card-custom gutter-b animate__animated animate__fadeIn">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button class="btn btn-primary font-weight-bolder" @click="assignVehicle">
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
                    </span>Confirm Request</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <table class="table table-separate table-head-custom table-checkable" id="rito-tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tracking No.</th>
                            <th>Destination</th>
                            <th>Travel Date</th>
                            <th>Return Date</th>
                            <th>Purpose</th>
                            <th>Means of Transportation</th>
                            <th>Status</th>
                            <th>Passengers</th>
                            <th>Requested By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr v-for="d in data" :key="d.id">
                            <td>{{ d.id }}</td>
                            <td>{{ d.tracking_no }}</td>
                            <td>{{ d.place }}</td>
                            <td>{{ d.inclusive_from }}</td>
                            <td>{{ d.inclusive_to }}</td>
                            <td>{{ d.purpose }}</td>
                            <td>{{ d.means_of_transportation }}</td>
                            <td>{{ d.id }}</td>
                            <td>{{ d.passenger_count }}</td>
                            <td>{{ d.requested_by }}</td>
                            <td>{{ d.id }}</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Card-->
        <modal :size="modal.size" :id="modal.passengers_id">
            <template v-slot:header>
                <h5 class="modal-title"><span class="m-title">{{ (passengers.length)?data[current_row].tracking_no:null }}</span>
                <span class="d-block text-muted font-size-sm">Tracking Number</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <table class="w-100 table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position / Designation</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(p,index) in passengers" :key="index">
                            <td>{{ p.first_name }} {{ p.middle_name[0] }} {{ p.last_name }}</td>
                            <td>{{ p.position }}</td>
                            <td>{{ p.gender }}</td>
                        </tr>
                    </tbody>
                </table>
            </template>
        </modal>
        <modal :id="modal.approved_id">
            <template v-slot:header>
                <h5 class="modal-title">Motor Vehicle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <form id="rito-form" class="form">
                    <input type="hidden" name="selected" v-model="selected">
                    <input type="hidden" name="rp_total" v-model="rp.total">
                    <input type="hidden" name="hired_total" v-model="hired.total">
                    <div class="w-100 row">
                        <div class="col-lg-12">
                            <div class="btn font-weight-bold btn-primary mr-2">Request <span class="label label-sm label-white ml-2">{{ selected.length }}</span></div>
                            <div class="btn font-weight-bold btn-primary mr-2">Passengers <span class="label label-sm label-white ml-2">{{ passengers_count }}</span></div>
                            <a href="#" class="btn btn-light-danger pulse pulse-danger float-right">
                                <i class="flaticon2-information"></i>
                                <span class="pulse-ring mt-n9 ml-n3"></span>
                                PUV
                            </a>
                        </div>
                        <hr class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Type of Motor Vehicle</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-solid">
                                        <input type="checkbox" name="rp_vehicle" id="checkbox-office" class="checkbox-vehicle" value="office" v-model="rp.status"/> RP
                                        <span></span>
                                    </label>
                                    <label class="checkbox checkbox-solid">
                                        <input type="checkbox" name="hired_vehicle" id="checkbox-rental" class="checkbox-vehicle" value="rental" v-model="hired.status"/> Hired
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div v-if="hired.status" class="form-group">
                                <label>Travel Po Number</label>
                                <select name="travel_po" class="form-control select2 staff-required" id="travel_po-select">
                                    <option label="Label"></option>
                                    <option v-for="po in pos.filter(i => i.type == 1)" :key="po.id" :value="po.id">{{ po.po_no }} - ₱ {{ (po.totalBalance)? parseNum(po.totalBalance) : parseNum(po.po_amount) }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr v-if="rp.status" class="col-lg-12">
                    <div v-if="rp.status" class="col-lg-12 row">
                        <div class="col-lg-12 d-flex">
                            <label class="h5">RP Vehicle</label>
                            <div class="ml-auto">
                                <button class="btn btn-sm btn-outline-primary" @click="incrementRpVehicle"><i class="fa fa-plus-square p-0"></i></button>
                                <button class="btn btn-sm btn-outline-primary" @click="decrementRpVehicle"><i class="fa fa-minus-square p-0"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <table id="vehicle-office-tbl" class="table w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Vehicle Name</th>
                                        <th scope="col" class="text-center">Driver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="index in rp.total" :key="index">
                                        <td scope="row" class="text-center">{{ index }}</td>
                                        <td>
                                            <select class="form-control select2 staff-required" :id="'vehicle-select-'+index" :name="'vehicle_'+index">
                                                <option label="Label"></option>
                                                <option v-for="vehicle in vehicles" :key="vehicle.id" :value="vehicle.id">{{ vehicle.name }} - {{ vehicle.plate_no }}</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control select2 staff-required" :id="'driver-select-'+index" :name="'driver_'+index">
                                                <option label="Label"></option>
                                                <option v-for="driver in drivers" :key="driver.id" :value="driver.id">{{ driver.fullname }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr v-if="hired.status" class="col-lg-12">
                    <div v-if="hired.status" class="col-lg-12 row">
                        <div class="col-lg-12 d-flex">
                            <label class="h5">Hired Vehicle</label>
                            <div class="ml-auto">
                                <button class="btn btn-sm btn-outline-primary" @click="incrementHiredlVehicle"><i class="fa fa-plus-square p-0"></i></button>
                                <button class="btn btn-sm btn-outline-primary" @click="decrementHiredVehicle"><i class="fa fa-minus-square p-0"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <table id="vehicle-rental-tbl" class="table w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Plate #</th>
                                        <th scope="col" class="text-center">Vehicle Name</th>
                                        <th scope="col" class="text-center">Driver Name</th>
                                        <th scope="col" class="text-center">Contact #</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="index in hired.total" :key="index">
                                        <td scope="row" class="text-center">{{ index }}</td>
                                        <td>
                                            <input type="text" class="select-remove form-control" placeholder="Enter vehicle plate no." :name="'vehicle_plate_'+index"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Enter vehicle name" :name="'vehicle_name_'+index"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Enter driver name" :name="'driver_name_'+index"/>
                                        </td>
                                        <td>
                                            <input type="text" class="select-remove form-control" placeholder="Enter driver contact no." :name="'driver_contact_'+index"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </template>
            <template v-if="rp.status || hired.status" v-slot:footer>
                <button type="button" class="btn btn-sm btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                <button @click="approved" type="button" class="btn btn-sm btn-primary font-weight-bold text-uppercase">Approved</button>
            </template>
        </modal>
    </div>
</template>

<script>
import Modal from '../../components/Layouts/Modal';
export default {
    data() {
        return {
            modal: {
                passengers_id: 'modal-passengers',
                approved_id: 'modal-approved',
                size: 'modal-lg',
            },
            current_row: null,
            selected: [],
            data:[],
            passengers:[],
            passengers_count: 0,
            pos: [],
            vehicles: [],
            drivers: [],
            rp: {
                status: false,
                total: 1
            },
            hired: {
                status: false,
                total: 1,
            },
            defaultNames: [],
            rpNames: ['vehicle_1', 'driver_1'],
            hiredNames: ['travel_po', 'vehicle_name_1', 'vehicle_plate_1','driver_name_1','driver_contact_1'],
        }
    },  
    components: {
        Modal
    },
    created() {
    },
    mounted() {
        this.ini().datatable_ini('1');
        this.getPos();
        this.getVehicles();
        this.getDrivers();
    },
    methods: {
        ini() {
            let table = (type) => {
                $(()=>{
                    // axios.get(BASE_URL + '/travel/ritorequest').then(res=>{
                    //     this.data = res.data.results;                    
                    // });
                    this.tdatatable().init(1);
                }); 
            }
            
            return {
                init: () => {
                    ini();
                },
                datatable_ini: (type = null) => {
                    table(type)
                }
            }
        },
        tdatatable() {
            let vm = this;
            var initTable = (currentPage) => {
            var table = $('#rito-tbl');
                table.DataTable({
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    lengthChange: false,
                    pageLength: 100,
                    ajax: {
                        url: BASE_URL + '/travel/ritorequest',
                        type: 'GET',
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "tracking_no" },
                        { "data": "place" },
                        { "data": "inclusive_from" },
                        { "data": "inclusive_to" },
                        { "data": "purpose" },
                        { "data": "means_of_transportation" },
                        { "data": "id" },
                        { "data": "passenger_count" },
                        { "data": "requested_by" },
                        { "data": "id" },
                    ],
                    order: [[3, 'asc']],
                    headerCallback: function(thead, data, start, end, display) {
                        thead.getElementsByTagName('th')[0].innerHTML = ``;
                    },
                    columnDefs: [
                        {
                            targets: 0,
                            width: '30px',
                            className: 'dt-left',
                            orderable: false,
                            render: function(data, type, full, meta) {
                                return `
                                <label class="checkbox checkbox-single ml-4">
                                    <input type="checkbox" value="`+data+`" class="checkable"/>
                                    <span></span>
                                </label>`;
                            },
                        },
                        {
                            targets: [3,4],
                            render: data => {
                                return dateEng(data);
                            }
                        },
                        {
                            targets: -1,
                            sortable: false,
                            render: function(data, type, full, meta) {
                                return '<button data-record-id="' + data + '" data-row-idx="'+ meta.row +'" class="btn btn-sm btn-clean btn-passengers" title="View passengers">\
                                            <i class="flaticon2-document"></i>\
                                        </button>';
                            }
                        }
                    ],
                    drawCallback: () => {
                        $('.btn-passengers').off().on('click', function() {
                            let id = $(this).data('record-id');
                            let idx = $(this).data('row-idx');
                            axios.get(BASE_URL + `/travel/ritorequest/${id}`).then(res=>{
                                vm.passengers = res.data;
                                vm.current_row =  idx;
                                $('#modal-passengers').modal('show');
                            });
                        });
                    }
                });

                table.on('change', 'tbody tr .checkbox', function() {
                    $(this).parents('tr').toggleClass('active');
                });
            };
            
            return {
                init: function(currentPage = 1) {
                    initTable(currentPage);
                },
            };
        },
        assignVehicle() {
            let vm = this;
            let arr = [];
            vm.passengers_count = 0;
            let count = 0;
            $('input.checkable:checkbox:checked').each(function () {
                arr.push($(this).val());
                vm.selected.push($(this).val())
                let pasColumn = $('input.checkable:checkbox:checked')[count].closest('tr').children[8];;
                vm.passengers_count += parseInt(pasColumn.textContent);
                count++;
            });

            if (arr.length > 0) {
                $('#modal-approved').modal('show');

                $('.checkbox-vehicle').change(function() {
                    vm.rp.total = vm.hired.total = 1;
                    if(vm.rp.status) {
                        $('#vehicle-select-1').select2({
                            placeholder: "Select a vehicle",
                        });

                        $('#driver-select-1').select2({
                            placeholder: "Select a driver",
                        });
                    } else {
                        vm.rpNames = ['vehicle_1', 'driver_1'];
                    }
                    
                    if (vm.hired.status) {
                        $('#travel_po-select').select2({
                            placeholder: "Select a Travel PO",
                        });

                        $('.select-remove').siblings('.select2').remove();
                        $('.select-remove').siblings('.select2').remove();
                    } else {
                        vm.hiredNames = ['po', 'vehicle_name_1', 'vehicle_plate_1','driver_name_1','driver_contact_1'];
                    }

                    if ($('#checkbox-office').is(":checked")) {
                        vm.defaultNames.push('office_vehicle');
                    } else {
                        vm.defaultNames.splice(vm.defaultNames.indexOf('office_vehicle'), 1);
                    }

                    if ($('#checkbox-rental').is(":checked")) {
                        vm.defaultNames.push('rental_vehicle');
                    } else {
                        vm.defaultNames.splice(vm.defaultNames.indexOf('rental_vehicle'), 1);
                    }
                });

                $('.checkbox-vehicle').on('change', () => {
                    $('.invalid-feedback-admin').remove();
                    $('.invalid-admin').removeClass('is-invalid');
                });
            }
        },
        incrementRpVehicle(event) {
            event.preventDefault();
            let count = this.rp.total += 1;
            setTimeout(() => {
                $(`#vehicle-select-${count}`).select2({
                    placeholder: "Select a vehicle",
                });

                $(`#driver-select-${count}`).select2({
                    placeholder: "Select a driver",
                });
            }, 100);

            this.rpNames.push(`vehicle_${count}`);
            this.rpNames.push(`driver_${count}`);
        },
        decrementRpVehicle(event) {
            event.preventDefault();
            if(this.rp.total != 1) {
                this.rpNames.pop();
                this.rpNames.pop();

                this.rp.total -= 1;
            } 
        },
        incrementHiredlVehicle(event) {
            event.preventDefault();
            let count = this.hired.total += 1;
            this.hiredNames.push('vehicle_name_'+count);
            this.hiredNames.push('vehicle_plate_'+count);
            this.hiredNames.push('driver_name_'+count);
            this.hiredNames.push('driver_contact_'+count);
        },
        decrementHiredVehicle(event) {
            event.preventDefault();
            if(this.hired.total != 1) {
                this.hiredNames.pop();
                this.hiredNames.pop();
                this.hiredNames.pop();
                this.hiredNames.pop();

                this.hired.total -= 1;
            }
        },
        getPos() {
            axios.get(BASE_URL + '/api/v1/po').then(response => {
                this.pos = response.data;
            });
        },
        getVehicles() {
            axios.get(BASE_URL + '/api/v1/vehicle').then(response => {
                this.vehicles = response.data;
            });
        },
        getDrivers() {
            axios.get(BASE_URL + '/api/v1/driver').then(response => {
                this.drivers = response.data;
            });
        },
        parseNum(data) {
            return toParseNum(data);
        },
        approved() {
            let ritoData = $('#rito-form').serialize();
            axios.post(BASE_URL + '/travel/ritorequest', ritoData).then(response => {
                $('.invalid-feedback-admin').remove();
                $('.invalid-admin').removeClass('is-invalid');
                Swal.fire("Good job!", response.data.message, "success");
                showToast(response.data.message, 'success');
                this.ini().datatable_ini();
                $('#modal-approved').modal('toggle');
                $('input.checkable:checkbox:checked').click();
            }).catch(error => {
                let data = error.response.data.errors;
                let keys = [];
                let values = [];
                for (const [key, value] of Object.entries(data)) {
                    keys.push(`${key}`);
                    values.push(`${value}`);
                    let _keys = `${key}`.replace(/[0-9]/g, '');
                    if (`${key}` == 'rp_vehicle' || `${key}` == 'hired_vehicle') {
                        if ($('.checkbox-inline').next().length == 0 || $('.checkbox-inline').next().attr('class').search('invalid-feedback') == -1) {
                            $('.checkbox-inline').after('<div class="invalid-feedback invalid-feedback-admin d-block">'+`${value}`+'</div>');
                        }
                    } else if (`${key}` == 'travel_po') {
                        if($('#'+`${key}`+'-select').next().next().length == 0) {
                            $('#'+`${key}`+'-select').next().after('<div class="invalid-feedback invalid-feedback-admin d-block">'+`${value}`+'</div>');
                        }
                    } else if (_keys == 'driver_name_' || _keys == 'driver_contact_' || _keys == 'vehicle_name_' || _keys == 'vehicle_plate_') {
                        if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                            $('input[name="'+`${key}`+'"]').addClass('is-invalid');
                            $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                        }
                    } else {
                        if($('[name="'+`${key}`+'"]').next().next().length == 0) {
                            $('[name="'+`${key}`+'"]').next().after('<div class="invalid-feedback invalid-feedback-admin d-block">'+`${value}`+'</div>');
                        }
                    }
                   
                };

                for (let i = 0; i < this.defaultNames.length; i++) {
                    if (this.defaultNames[i] == 'rp_vehicle' || this.defaultNames[i] == 'hired_vehicle') {
                        if (keys.indexOf(''+this.defaultNames[i]+'') == -1) {
                            if ($('.radio-inline').next().length != 0) {
                                $('.radio-inline').next('.invalid-feedback').remove();
                            }
                        } 
                    }
                }
                for (let i = 0; i < this.hiredNames.length; i++) {
                    if (this.hiredNames[i] == 'travel_po') {
                        if (keys.indexOf(''+this.hiredNames[i]+'') == -1) {
                            if ($('#'+this.hiredNames[i]+'-select').next().next().length != 0) {
                                $('#'+this.hiredNames[i]+'-select').next().next('.invalid-feedback').remove();
                            }
                        }
                    } else {
                        if (keys.indexOf(''+this.hiredNames[i]+'') == -1) {
                            $('[name="'+this.hiredNames[i]+'"]').removeClass('is-invalid');
                            $('[name="'+this.hiredNames[i]+'"]').next('.invalid-feedback').remove();
                        }
                    }
                }
                for (let i = 0; i < this.rpNames.length; i++) {
                    if (keys.indexOf(''+this.rpNames[i]+'') == -1) {
                        if ($('[name="'+this.rpNames[i]+'"]').next().next().length != 0) {
                            $('[name="'+this.rpNames[i]+'"]').next().next('.invalid-feedback').remove();
                        }
                    }
                }

                        
                    
                showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        }
    },
}
</script>