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
                <!--begin: Datatable-->
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
                            <th>Requested By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
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
                <div class="w-100 row">
                    <div class="col-lg-12">
                        <button class="btn font-weight-bold btn-primary mr-2">Request <span class="label label-sm label-white ml-2">5</span></button>
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
                                    <input type="checkbox" name="vehicle_office" id="checkbox-office" class="checkbox-vehicle" value="office"/> RP
                                    <span></span>
                                </label>
                                <label class="checkbox checkbox-solid">
                                    <input type="checkbox" name="vehicle_rental" id="checkbox-rental" class="checkbox-vehicle" value="rental"/> Hired
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Travel Po Number</label>
                            <select name="travel_po" class="form-control select2 staff-required" id="travel_po-select">
                                <option label="Label"></option>
                                <option ></option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="col-lg-12">
                <div class="col-lg-12 row">
                    <div class="col-lg-12 d-flex">
                        <input id="office-vehicle-total" type="hidden" name="office_vehicle_total" >
                        <label class="h5">RP Vehicle</label>
                        <div class="ml-auto">
                            <button class="btn btn-sm btn-outline-primary" ><i class="fa fa-plus-square p-0"></i></button>
                            <button class="btn btn-sm btn-outline-primary" ><i class="fa fa-minus-square p-0"></i></button>
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
                                <tr>
                                    <td scope="row" class="text-center"></td>
                                    <td>
                                        <select class="form-control select2 staff-required" >
                                            <option label="Label"></option>
                                            <option></option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control select2 staff-required">
                                            <option label="Label"></option>
                                            <option></option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="col-lg-12">
                <div class="col-lg-12 row">
                    <div class="col-lg-12 d-flex">
                        <input id="rental-vehicle-total" type="hidden" name="rental_vehicle_total">
                        <label class="h5">Hired Vehicle</label>
                        <div class="ml-auto">
                            <button class="btn btn-sm btn-outline-primary"><i class="fa fa-plus-square p-0"></i></button>
                            <button class="btn btn-sm btn-outline-primary"><i class="fa fa-minus-square p-0"></i></button>
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
                                <tr>
                                    <td scope="row" class="text-center"></td>
                                    <td>
                                        <input type="text" class="select-remove form-control" placeholder="Enter vehicle plate no."/>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Enter vehicle name"/>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Enter driver name"/>
                                    </td>
                                    <td>
                                        <input type="text" class="select-remove form-control" placeholder="Enter driver contact no."/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
            data:[],
            passengers:[]
        }
    },  
    components: {
        Modal
    },
    created() {
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            $(()=>{
                axios.get(BASE_URL + '/travel/ritorequest').then(res=>{
                    this.data = res.data.results;                    
                    this.tdatatable().init();
                });
                
            });
        },
        tdatatable() {
            let vm = this;
            var initTable = () => {
            var table = $('#rito-tbl');
                table.DataTable({
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    language: {
                        processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
                    },
                    data: vm.data,
                    columns: [
                        { "data": "id" },
                        { "data": "tracking_no" },
                        { "data": "place" },
                        { "data": "inclusive_from" },
                        { "data": "inclusive_to" },
                        { "data": "purpose" },
                        { "data": "means_of_transportation" },
                        { "data": "id" },
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
                init: function() {
                    initTable();
                },
            };
        },
        assignVehicle() {
            let arr = [];
            $('input.checkable:checkbox:checked').each(function () {
                arr.push($(this).val());
            });
            
            if (arr.length > 0) {
                $('#modal-approved').modal('show');
            }
        }
    },
}
</script>