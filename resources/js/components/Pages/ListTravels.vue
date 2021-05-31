<template>
    <div id="list-travel-page">
        <div class="card card-custom gutter-b" >
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title"></div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-primary font-weight-bolder" @click="dialog()">
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
                    </span>Advance Filter</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="list-travel-tbl" style="width:500px !important">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Request Code</th>
                            <th>Trip Ticket</th>
                            <th>Vehicle Type</th>
                            <th>Plate No</th>
                            <th>Destination</th>
                            <th>Purpose</th>
                            <th>Date of Travel</th>
                            <th>Date of Return</th>
                            <th>Starting ODO</th>
                            <th>Ending Odo</th>
                            <th>Date Submitted to Procurement</th>
                            <th>Distance Travelled</th>
                            <th>PO Number</th>
                            <th>PO Amount</th>
                            <th>Rate per Km</th>
                            <th>Fuel per Km</th>
                            <th>Fuel Charge</th>
                            <th>Fuel Liters</th>
                            <th>Flat Rate</th>
                            <th>Rate per night</th>
                            <th>No. of Nights</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <modal>
            <template v-slot:header>
                <h5 id="modal-status" :class="status_class">{{ status }}</h5>
                <h5 class="modal-title"><span class="m-title">{{ trip_ticket }}</span>
                <span class="d-block text-muted font-size-sm">Trip Ticket</span></h5>
                <h5 :class="(finalStatus != 3) ? 'modal-title ml-auto':'modal-title ml-auto d-none'"><span class="switch switch-outline switch-icon switch-success">
                    <label>
                        <input id="is-completed" type="checkbox" checked="checked" name="select"/>
                        <span class="ml-2 mb-n-10"></span>
                    </label>
                </span>
                <span class="d-block text-muted font-size-sm">Completed</span></h5>
                <h3 class="modal-date"><span class="m-date">{{ created_at }}</span>
                <span class="d-block text-muted font-size-sm">Date Created</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <form class="form">
                    <div class="card-body row pt-0">
                        <div class="col-lg-12 mb-3">
                            <h2>{{ (formFields.vehicle_type == 1)?'Office':'Rental' }}</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Image:</p>
                                        <a class="vehicle-img-viewer" :href="(vehicle_image)? '/storage/images/' +  vehicle_image:'/storage/images/vehicle-photo-default.jpg'">
                                            <img v-if="vehicle_image != null" class="travel-vehicle-img img-fluid img-thumbnail" :src="'/storage/images/' + vehicle_image" alt="">
                                            <img v-else class="travel-vehicle-img img-fluid img-thumbnail" src="/storage/images/vehicle-photo-default.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group d-flex jumbotron-mini">
                                        <h4 class="ml-5 mt-3">Total Cost:</h4>
                                        <h2 class="ml-auto mt-2 mr-5">{{ totalCost }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Vehicle Plate</label>
                                <input type="text" name="vehicle_plate" id="vehicle_plate" v-model="formFields.plate_no" class="form-control" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Vehicle Name</label>
                                <input type="text" name="vehicle" id="vehicle_name" v-model="formFields.vehicle_name" class="form-control" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Starting ODO:</label>
                                <input type="number" name="starting_odo" id="starting_odo" class="form-control required-field" placeholder="Enter starting ODO" v-model="formFields.starting_odo" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>Ending ODO:</label>
                                <input type="number" name="ending_odo" id="ending_odo" class="form-control required-field" placeholder="Enter ending ODO" v-model="formFields.ending_odo" :disabled="status=='Completed'" />
                            </div>
                            <div class="form-group">
                                <label>Distance Travelled</label>
                                <input type="number" class="form-control" id="distance_travelled" placeholder="Enter distance travelled" v-model="distanceTravelled" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Travel Date:</label>
                                <input type="date" name="travel_date" id="travel_date" class="form-control required-field" placeholder="Enter travel date" v-model="formFields.travel_date" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>Travel Return:</label>
                                <input type="date" name="travel_return" id="travel_return" class="form-control required-field" placeholder="Enter travel date" v-model="formFields.travel_return" :disabled="status=='Completed'"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Date submitted to procurement:</label>
                                <input type="date" name="date_submitted_proc" id="date_submitted_proc" class="form-control required-field" placeholder="Enter date submitted to procurement" v-model="formFields.date_submitted_proc" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>Travel Time:</label>
                                <input type="time" class="form-control" id="travel_time" placeholder="Enter travel time" v-model="formFields.travel_time" :disabled="status=='Completed'"/>
                            </div>
                            <div v-if="formFields.vehicle_type == 2" class="form-group">
                                <label>{{ (240 >= distanceTravelled)? 'Fuel per KM':'Rent per KM' }}</label>
                                <input type="number" name="rate_per_km" id="rate_per_km" class="form-control required-field" placeholder="Enter rate per kilometer" v-model="formFields.rate_per_km" :disabled="status=='Completed'"/>
                            </div>
                            <div v-if="formFields.vehicle_type == 1" class="form-group">
                                <label>Fuel Charge</label>
                                <input type="number" name="fuel_charge" id="fuel_charge" class="form-control required-field" placeholder="Enter fuel charge" v-model="formFields.fuel_charge" :disabled="status=='Completed'"/>
                            </div>
                            <div v-if="formFields.vehicle_type == 1" class="form-group">
                                <label>Fuel Liters</label>
                                <input type="number" name="fuel_liters" id="fuel_liters" class="form-control required-field" placeholder="Enter fuel liters" v-model="formFields.fuel_liters" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>Flat Rate:</label>
                                <input type="number" name="flat_rate" id="flat_rate" class="form-control" placeholder="Enter flat rate" v-model="formFields.flat_rate" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>No. of Nights:</label>
                                <input type="number" class="form-control" id="no_of_nights" placeholder="Enter number of nights" v-model="formFields.no_nights" :disabled="status=='Completed'"/>
                            </div>
                            <div class="form-group">
                                <label>Rate per Night:</label>
                                <input type="number" class="form-control" id="rate_per_night" placeholder="Enter rate per night" v-model="formFields.rate_per_night" :disabled="status=='Completed'"/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Remarks:</label>
                                <textarea class="form-control" name="" id="remarks" cols="30" rows="3" v-model="formFields.remarks" :disabled="status=='Completed'"></textarea>
                            </div>
                        </div>
                     </div>
                </form>
            </template>
            <template v-if="finalStatus != 3" v-slot:footer>
                <button  @click="undo(id)" type="button" class="btn btn-sm btn-danger font-weight-bold text-uppercase mr-auto">Undo</button>
                <button  type="button" class="btn btn-sm btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                <button  @click="update(id)" type="button" class="btn-save btn btn-sm btn-primary font-weight-bold text-uppercase">Save</button>
                
            </template>
        </modal>
        <filterdialog>
            <template v-slot:body v-if="dialogshow == true">
                <form id="request-form" class="form">
                    <div class="form-group row">
                    <label class="col-3">Division</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <select class="form-control select2 details-input" id="kt_select_division" name="division" v-model="filterActive.division">
                                <option label="Label"></option>
                                <option v-for="div in filterDropdown.division" :key="div.id" :value="div.id">{{ div.division_name }}</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-3">Section</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <select class="form-control select2 details-input" id="kt_select_section" name="section" v-model="filterActive.section">
                                <option label="Label"></option>
                                <option v-for="sec in filterDropdown.section" :key="sec.id" :value="sec.id">{{ sec.section_name }}</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-3">Trip ticket</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <select class="form-control select2 details-input" id="kt_select_trip_ticket" name="trp_ticket" v-model="filterActive.tripTicket">
                                <option label="Label"></option>
                                <option v-for="svc in filterDropdown.tripTicket" :key="svc.id" :value="svc.trip_ticket">{{ svc.trip_ticket }}</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-3">Service Provider</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <select class="form-control select2 details-input" id="kt_select_service_provider" name="service_provider" v-model="filterActive.serviceProviders" >
                                <option label="Label"></option>
                                <option v-for="svc in filterDropdown.serviceProvider" :key="svc.id" :value="svc.type">{{ (svc.type == 1)?'Office':'Rental' }}</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-3">Vehicle Template</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="text" class="form-control required-field"  id="vehicle-template" name="vehicle_template" placeholder="Template Number" v-model="filterActive.vehicleTemplate"/>
                        </div>
                    </div>
                    <label class="col-3">Date Travel</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="date" id="kt_date_travel" name="date_travel" class="form-control details-input"  v-model="filterActive.dateTravel" />
                        </div>
                    </div>
                    <label class="col-3">Procurement Date </label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="date" id="kt_procurement_sub" name="date_travel" class="form-control details-input"  v-model="filterActive.procurementSub" />
                        </div>
                    </div>
                    <label class="col-3">Distance Traveled</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="date" id="kt_distance_traveled" name="distance_traveled" class="form-control details-input"  v-model="filterActive.distanceTravelled"  />
                        </div>
                    </div>
                    <label class="col-3">Po number</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <select class="form-control select2 details-input" id="kt_select_po_number" name="po_number" v-model="filterActive.poNumber">
                                <option label="Label"></option>
                                <option v-for="svc in filterDropdown.poNumber" :key="svc.id" :value="svc.po_no">{{ svc.po_no }}</option>
                            </select>
                        </div>
                    </div>
                    <label class="col-3">Po amount</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="number" class="form-control required-field"  id="kt_po_amount" name="svc_po_amount" placeholder="Po amount" v-model="filterActive.poAmount"/>
                        </div>
                    </div>
                    <label class="col-3">Rate per KM</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="number" class="form-control required-field"  id="kt_rate_per_km" name="svc_rate_per_km" placeholder="Enter number" v-model="filterActive.rateperKm"/>
                        </div>
                    </div>
                    <label class="col-3">Flat Rate</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="number" class="form-control required-field" name="svc_flat_rate" placeholder="Enter number" v-model="filterActive.flatRate"/>
                        </div>
                    </div>
                    <label class="col-3">Rate per Night</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="number" class="form-control required-field" name="svc_rate_per_night" placeholder="Enter number" v-model="filterActive.rateperNight"/>
                        </div>
                    </div>
                    <label class="col-3">No of nights</label>
                    <div class="col-9">
                        <div class="checkbox-inline">
                            <input type="number" class="form-control required-field" name="svc_vehicleCount" placeholder="Enter number" v-model="filterActive.numberofNights"/>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="button" class="btn btn-success mr-2" @click="ini()">Search</button>
                    </div>
                    </div>
                </form>
            </template>
        </filterdialog>
    </div>
</template>

<style>
    @media print {
        table, table tr, table td {
            border: #000 solid 1px;
        }
    } 
</style>


<script>
import Modal from '../../components/Layouts/Modal';
import Filterdialog from '../../components/Layouts/Dialog';
export default {
    data() {
        return {
            id: null,
            trip_ticket: null,
            created_at: null,
            status: null,
            status_class: null,
            vehicles: [],
            vehicle_image: null,
            finalStatus: null,
            formFields: {
                starting_odo: null,
                ending_odo: null,
                date_submitted_proc: null,
                distance_travelled: 0,
                rate_per_km: 0,
                flat_rate: 0,
                no_nights: 0,
                rate_per_night: 0,
                remarks: null,
                travel_date: null,
                travel_return: null,
                travel_time: null,
                vehicle_id: null,
                vehicle_name: null,
                vehicle_type: null,
                status: null,
                total_cost: 0,
                fuel_charge: null,
                fuel_liters: null,
                plate_no: null,
            },
            filterDropdown: {
                tripTicket : [],
                serviceProvider: [],
                division: [],
                section: [],
                poNumber: [],
            },
            filterActive: {
                vehicleName: null,
                vehicelTemplate: null,
                driverName: null,
                driverContact: null,
                division: null,
                section: null,
                tripTicket: null,
                serviceProviders: null,
                dateTravel:null,
                procurementSub:null,
                distanceTravelled: null,
                poNumber: null,
                poAmount: null,
                rateperKm: null,
                flatRate: null,
                rateperNight: null,
                numberofNights: null,
            },
            dialogshow: false,
            names: ['starting_odo', 'starting_odo', 'date_submitted_proc', 'rate_per_km', 'travel_date','travel_date','fuel_charge', 'fuel_liters']
        }
    },
    components: {
        Modal,
        Filterdialog
    },
    created() {
        this.getTripTicket();
        this.getServiceProviders();
        this.getPoNumber();
        this.getDivision();
    },
    mounted() {
        this.ini();
    },
    computed: {
        totalCost() {
            let result = 0;
            if (this.formFields.vehicle_type == 1) {
                result = ((this.formFields.fuel_liters * this.formFields.fuel_charge) + (this.formFields.no_nights * this.formFields.rate_per_night)) + parseInt(this.formFields.flat_rate);
            } else {
                result = ((this.formFields.distance_travelled * this.formFields.rate_per_km) + (this.formFields.no_nights * this.formFields.rate_per_night)) + parseInt(this.formFields.flat_rate);
            }
            this.formFields.total_cost = result;
            // let cost = (this.formFields.distance_travelled * this.formFields.rate_per_km);
            return result.toLocaleString(undefined, {minimumFractionDigits: 2});
        },
        distanceTravelled() {
            let result = this.formFields.distance_travelled = this.formFields.ending_odo - this.formFields.starting_odo;
            return result;
        },
    },
    methods:{
        ini() {
            $(()=>{
                if (this.dialogshow ==true){
                    $("#list-travel-tbl").DataTable().destroy();
                    showToast('Filtered successfully!', 'success');
                }
                this.tdatatable().init();
            });
        },
        tdatatable() {
            let vm = this;
            var initTable = () => {
            var table = $('#list-travel-tbl');
                table.DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'copy',
                            exportOptions: {
                                columns: ':not(:last-child)',
                            }
                        },
                        {
                            extend: 'csv',
                            exportOptions: {
                                columns: ':not(:last-child)',
                            }
                        },
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: ':not(:last-child)',
                            }
                        },
                        {
                            extend: 'pdfHtml5', 
                            orientation: 'landscape', 
                            pageSize: 'Legal',
                            exportOptions: {
                                columns: ':not(:last-child)',
                            }
                        }, 
                        {
                            extend: "print",
                            exportOptions: {
                                columns: ':not(:last-child)',
                            },
                            customize: function(win)
                            {
                
                                var last = null;
                                var current = null;
                                var bod = [];
                
                                var css = '@page { size: landscape; }',
                                    head = win.document.head || win.document.getElementsByTagName('head')[0],
                                    style = win.document.createElement('style');
                
                                style.type = 'text/css';
                                style.media = 'print';
                
                                if (style.styleSheet)
                                {
                                style.styleSheet.cssText = css;
                                }
                                else
                                {
                                style.appendChild(win.document.createTextNode(css));
                                }
                
                                head.appendChild(style);
                            }
                        }
                    ],
                    searchDelay: 500,
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    fixedColumns:   {
        				leftColumns: false,
                        rightColumns: 1,
                    },
                    ajax: {
                        url: BASE_URL + '/tracking/listtravel',
                        type: 'GET',
                        data: vm.filterActive
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "serial_code" },
                        { "data": "trip_ticket" },
                        { "data": "vehicle_type" },
                        { "data": "plate_no" },
                        { "data": "destined" },
                        { "data": "purpose" },
                        { "data": "travel_date" },
                        { "data": "return_date" },
                        { "data": "starting_odo" },
                        { "data": "ending_odo" },
                        { "data": "date_submit_proc" },
                        { "data": "travelled" },
                        { "data": "po_no" },
                        { "data": "po_amount" },
                        { "data": "rate_per_km" },
                        { "data": "rate_per_km" },
                        { "data": "fuel_charge" },
                        { "data": "fuel_liters" },
                        { "data": "flat_rate" },
                        { "data": "rate_per_night" },
                        { "data": "nights_count" },
                        { "data": "total_cost" },
                        { "data": "status" },
                        { "data": "remarks" },
                        { "data": "created_at" },
                        { "data": "id" }
                        
                    ],
                    columnDefs: [
                        {
                            targets: [1,2],
                            render: data => {
                                return '<span class="text-nowrap label label-lg font-weight-bold label-light-primary label-inline">'+data+'</span>';
                            }
                        },
                        {
                            targets: 3,
                            render: data => {
                                var type = {
                                    1: {'title': 'Office', 'class': ' label-light-primary'},
                                    2: {'title': 'Rental', 'class': ' label-light-warning'}
                                }
                                return '<span class="label text-nowrap label-lg font-weight-bold ' + type[data].class + ' label-inline">' + type[data].title + '</span>';
                            }
                        },
                        {
                            targets: [7,8,11],
                            render: data => {
                                return dateEng(data);
                            }
                        },
                        {
                            targets: [14, 15, 16, 17, 19, 21, 22, 24],
                            render: data => {
                                let values = (data)? toParseNum(data):'';
                                return values;
                            }
                        },
                        {
                            targets: [14, 22],
                            render: data => {
                                let values = (data)? data:'';
                                return values;
                            }
                        },
                        {
                            targets: [22, 24],
                            orderable: false,
                        },
                        {
                            targets: 25,
                            orderable: false,
                            render: data => {
                                return dateTimeEng(data);
                            }
                        },
                        {
                            targets: 23,
                            render: data => {
                                var status = {
                                    1: {'title': 'Pending', 'class': ' label-light-warning'},
                                    2: {'title': 'Approved', 'class': ' label-light-primary'},
                                    3: {'title': 'Completed', 'class': ' label-light-success'},
                                    4: {'title': 'Declined', 'class': ' label-light-danger'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="label text-nowrap label-lg font-weight-bold ' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                            },
                        },
                        {
                            targets: -1,
                            orderable: false,
                            render: data => {
                                let id = parseInt(data);
                                return '\
                                    <div class="d-flex">\
                                        <a href="javascript:;" data-id="'+ data +'" class="btn-edit btn btn-sm btn-clean btn-icon" title="Edit details">\
                                            <span class="svg-icon svg-icon-md">\
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                        <rect x="0" y="0" width="24" height="24"/>\
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                                                    </g>\
                                                </svg>\
                                            </span>\
                                        </a>\
                                        <a href="print_request?id='+id+'" target="_blank" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
                                            <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Printer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> \
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> \
                                                    <rect x="0" y="0" width="24" height="24"/> \
                                                    <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/> \
                                                    <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/> \
                                                </g> \
                                            </svg><!--end::Svg Icon--></span> \
                                        </a> \
                                    </div> \
                                ';
                            }
                        }
                    ],
                    drawCallback: () => {
                        $('.btn-edit').off().on('click', function() {
                            let id = $(this).data('id');
                            vm.show(id);
                        });
                    }
                });
            };
            return {
                init: function() {
                    initTable();
                },
            };
        },
        show(id) {
            this.reset();
            let vm = this;
            axios.get(BASE_URL + "/tracking/listtravel/" + id).then(response => {

                this.id = id;
                this.created_at = dateTimeEng(response.data[0].created_at);
                this.trip_ticket = response.data[0].trip_ticket;
                this.vehicle_image = response.data[0].image;
                this.finalStatus = response.data[0].status;
                this.status = (response.data[0].status == 2)? 'Approved':'Completed';
                this.status_class = (response.data[0].status == 2)? 'modal-status label label-primary label-inline mr-5':'modal-status label label-success label-inline mr-5';

                // formFields
                this.formFields.starting_odo = response.data[0].starting_odo;
                this.formFields.ending_odo = response.data[0].ending_odo;
                this.formFields.date_submitted_proc = response.data[0].date_submit_proc;
                this.formFields.distance_travelled = parseInt((response.data[0].travelled)? response.data[0].travelled:0);
                this.formFields.rate_per_km = parseFloat((response.data[0].rate_per_km)? response.data[0].rate_per_km:0);
                this.formFields.fuel_charge = parseFloat((response.data[0].fuel_charge)? response.data[0].fuel_charge:0);
                this.formFields.fuel_liters = parseFloat((response.data[0].fuel_liters)? response.data[0].fuel_liters:0);
                this.formFields.flat_rate = parseFloat((response.data[0].flat_rate)? response.data[0].flat_rate:0);
                this.formFields.no_nights = parseInt((response.data[0].nights_count)? response.data[0].nights_count:0);
                this.formFields.rate_per_night = parseFloat((response.data[0].rate_per_night)? response.data[0].rate_per_night:0);
                this.formFields.remarks = response.data[0].remarks;
                this.formFields.travel_date = response.data[0].travel_date;
                this.formFields.travel_return = response.data[0].return_date;
                this.formFields.travel_time = response.data[0].depart_time;
                this.formFields.vehicle_id = response.data[0].vehicle_id;
                this.formFields.vehicle_name = response.data[0].name;
                this.formFields.plate_no = response.data[0].plate_no;
                this.formFields.status = response.data[0].status;
                this.formFields.vehicle_type = response.data[0].vehicle_type;
                (response.data[0].status == 3)? $('#is-completed').prop('checked', true):$('#is-completed').prop('checked', false);

                $('#is-completed').change(function() {
                    if (this.checked) {
                        $('#modal-status').removeClass('label-primary');
                        $('#modal-status').addClass('label-success');
                        vm.status = 'Completed';
                        vm.formFields.status = 3;
                    } else {
                        $('#modal-status').removeClass('label-success');
                        $('#modal-status').addClass('label-primary');
                        vm.status = 'Approved';
                        vm.formFields.status = 2;
                    }
                })

            });
            $('#kt_datatable_modal').modal('show');
            $(".vehicle-img-viewer").fancybox();
        },
        update(id) {
            axios.put(BASE_URL + '/tracking/listtravel/' + id, this.formFields).then(response => {
                $('.invalid-feedback').remove();
                $('.is-invalid').removeClass('is-invalid');
                Swal.fire("Good job!", response.data.message, "success");
                showToast(response.data.message, 'success');
                this.show(id);
                $('#list-travel-tbl').DataTable().ajax.reload();
            }).catch(error => {
                let data = error.response.data.errors;
                let keys = [];
                let values = [];
                for (const [key, value] of Object.entries(data)) {
                    keys.push(`${key}`);
                    values.push(`${value}`);
                    if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                        $('[name="'+`${key}`+'"]').addClass('is-invalid');
                        $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                    }
                }
                for (let i = 0; i < this.names.length; i++) {
                    if (keys.indexOf(''+this.names[i]+'') == -1) {
                        $('[name="'+this.names[i]+'"]').removeClass('is-invalid');
                        $('[name="'+this.names[i]+'"]').next('.invalid-feedback').remove();
                    }
                }
                showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        },
        reset() {
            this.id = null;
            this.trip_ticket = null;
            this.created_at = null;
            this.status = null;
            this.status_class = null;
            this.vehicle_image = null;
            this.formFields.starting_odo = null;
            this.formFields.ending_odo = null;
            this.formFields.date_submitted_proc = null;
            this.formFields.distance_travelled = null;
            this.formFields.rate_per_km = null;
            this.formFields.flat_rate = null;
            this.formFields.no_nights = null;
            this.formFields.rate_per_night = null;
            this.formFields.remarks = null;
            this.formFields.travel_date = null;
            this.formFields.travel_time = null;
            this.formFields.vehicle_id = null;
            this.formFields.vehicle_name = null;
            this.formFields.status = null;
        },
        undo(id){
                 Swal.fire({
                    title: "Are you sure?",
                    text: "Undo Transaction",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Undo it!"
                }).then(function(result) {
                    if (result.value) {
                        axios.put(BASE_URL + '/tracking/listtravel/undo/' + id).then(response => {
                        Swal.fire(
                            "Good job!",
                            response.data.message,
                            "success" 
                        )
                            showToast(response.data.message, 'success');
                            $('#kt_datatable_modal').modal('toggle');
                            $('#list-travel-tbl').DataTable().ajax.reload();
                        });
                    }
                });
            
        },
        dialog(){
            let vm = this;
            vm.dialogshow = true;
            $( "#dialog" ).dialog({ width: 600, height: 700 });
            setTimeout(()=>{
                $('#kt_select_division').select2({
                    placeholder: "Division",
                    allowClear: true
                });
                $('#kt_select_section').select2({
                    placeholder: "Section",
                    allowClear: true
                });
                $('#kt_select_trip_ticket').select2({
                    placeholder: "Trip Ticket",
                    allowClear: true
                });
                $('#kt_select_service_provider').select2({
                    placeholder: "Service provider",
                    allowClear: true
                });
                $('#kt_select_po_number').select2({
                    placeholder: "Po number",
                    allowClear: true
                });
                $('#kt_select_service_provider').change(function() {
                    vm.filterActive.serviceProviders = $(this).val();
                });
                $('#kt_select_division').change(function() {
                    let id = $(this).val();
                    vm.filterActive.division = id;
                    vm.getSection(id);
                });
                $('#kt_select_section').change(function() {
                    vm.filterActive.section = $(this).val();
                });
                $('#kt_select_trip_ticket').change(function() {
                    vm.filterActive.tripTicket = $(this).val();
                });
                $('#kt_select_po_number').change(function() {
                    vm.filterActive.poNumber = $(this).val();
                });
                $('#kt_date_travel').change(function() {
                    vm.filterActive.dateTravel = $(this).val();
                });
                $('#kt_procurement_sub').change(function() {
                    vm.filterActive.procurementSub = $(this).val();
                });
                $('#kt_distance_traveled').change(function() {
                    vm.filterActive.distanceTravelled = $(this).val();
                });
            },500);
        },
        getTripTicket() {
            axios.get(BASE_URL + "/api/v1/tripticket").then(response => {
                this.filterDropdown.tripTicket = response.data;
            });
        },
        getServiceProviders() {
            axios.get(BASE_URL + "/api/v1/serviceprovider").then(response => {
                this.filterDropdown.serviceProvider = response.data;
            });
        },
        getPoNumber() {
            axios.get(BASE_URL + "/api/v1/ponumber").then(response => {
                this.filterDropdown.poNumber = response.data;
            });
        },
        getDivision() {
            axios.get(BASE_URL + "/api/v1/division").then(response => {
                this.filterDropdown.division = response.data;
            });
        },
        getSection(id) {
            axios.get(BASE_URL + "/api/v1/section/"+id).then(response => {
                this.filterDropdown.section = response.data;
            });
        },
    }

}
</script>