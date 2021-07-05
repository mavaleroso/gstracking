<template>
    <div id="rito-requests-page" class="h-100 v-100">
        <!--begin::Card-->
        <div class="card card-custom card-stretch animate__animated animate__fadeIn" id="kt_page_stretched_card">
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
                    </span>Assign Vehicle</button>
                    <!--end::Button-->
                </div>
            </div>
            <div :class="(loading) ? 'card-body overlay overlay-block table-responsive' : 'card-body table-responsive'">
                <div v-if="loading" class="overlay-layer bg-dark-o-10">
                    <div class="spinner spinner-primary"></div>
                </div>
                <table class="table " id="rito-tbl card-scroll">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tracking No.</th>
                            <th>Destination</th>
                            <th>Travel Date</th>
                            <th>Return Date</th>
                            <th>Purpose</th>
                            <th>Portal Status</th>
                            <th>Tracking Status</th>
                            <th>Passengers</th>
                            <th>Requested By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(r,index) in rito" :key="index">
                            <td>
                                <label class="checkbox checkbox-single ml-4">
                                    <input type="checkbox" :id="'checkable_' + r.id" :value="r.id" class="checkable"/>
                                    <span></span>
                                </label>
                            </td>
                            <td><span class="label label-lg label-inline label-light-primary text-nowrap">{{ r.tracking_no }}</span></td>
                            <td>{{ r.place }}</td>
                            <td>{{ $dateEng(r.inclusive_from) }}</td>
                            <td>{{ $dateEng(r.inclusive_to) }}</td>
                            <td>{{ r.purpose }}</td>
                            <td v-html="$chkStatus(r.status)"></td>
                            <td v-html="$chkAssigned((requesttrans.filter(i => i.request_id == r.id)[0]) ? requesttrans.filter(x => x.request_id == r.id)[0].mot : null, r.id)"></td>
                            <td><button @click="getPassengers(r.id, r.tracking_no)" class="btn btn-sm btn-light-primary px-2 py-1">{{ r.passenger_count }}</button></td>
                            <td>{{ r.requested_by }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-wrap py-2 mr-3">
                        <a href="#" :class="(loading || this.pages.currentPage < 2) ? 'btn btn-icon btn-sm btn-light mr-2 my-1 disabled' : 'btn btn-icon btn-sm btn-light mr-2 my-1'" @click="pageSet('prev')"><i class="ki ki-bold-arrow-back icon-xs"></i></a>

                        <a v-if="pages.currentPage > 3" href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
                        <a v-for="p in pagination" :key="p" href="#" :class="(loading) ? 'btn btn-icon btn-sm border-0 btn-light mr-2 my-1 disabled':(p == pages.currentPage) ? 'btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1':'btn btn-icon btn-sm border-0 btn-light mr-2 my-1'" @click="pageSet('jump', p)" :disabled="loading">{{ p }}</a>
                        <a v-if="pages.currentPage != pages.totalPages && pages.currentPage != (pages.totalPages-1) && pages.currentPage != (pages.totalPages-2)" href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>

                        <a href="#" :class="(loading || this.pages.currentPage == this.pages.totalPages) ? 'btn btn-icon btn-sm btn-light mr-2 my-1 disabled' : 'btn btn-icon btn-sm btn-light mr-2 my-1'" @click="pageSet('next')"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div v-if="loading" class="d-flex align-items-center">
                            <div class="mr-2 text-muted">Loading...</div>
                            <div class="spinner mr-10"></div>
                        </div>
                        <span class="text-muted">Displaying {{ rito.length }} of {{ total }} records</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card-->
        <modal :size="modal.size" :id="modal.passengers_id">
            <template v-slot:header>
                <h5 class="modal-title"><span class="m-title">{{ (passengers.length)?current_to:null }}</span>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn font-weight-bold btn-primary mr-2">Request <span class="label label-sm label-white ml-2">{{ selected.length }}</span></div>
                            <div class="btn font-weight-bold btn-primary mr-2">Passengers <span class="label label-sm label-white ml-2">{{ passengers_count }}</span></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Type of Motor Vehicle</label>
                                <div class="checkbox-inline">
                                    <label class="radio radio-solid mx-2" v-for="(v, index) in vehiclemodes" :key='index'>
                                        <input type="radio" name="radio_vehicle" class="radio-vehicle" :value="v.id" v-model="vehicle_type"/> {{ v.name }}
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div v-if="vehicle_type == 4" class="form-group">
                                <label>Travel Po Number</label>
                                <select name="travel_po" class="form-control select2 staff-required" id="travel_po-select">
                                    <option label="Label"></option>
                                    <option v-for="po in pos.filter(i => i.type == 1)" :key="po.id" :value="po.id">{{ po.po_no }} - ₱ {{ (po.totalBalance)? $toParseNum(po.totalBalance) : $toParseNum(po.po_amount) }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div v-if="vehicle_type == 1" class="row">
                        <label class="h5 col-lg-12">{{ vehiclemodes.filter(i => i.id == vehicle_type)[0].name }}</label>
                        <div class="form-group mb-1 col-lg-12">
                            <label for="remarks">Remarks</label>
                            <textarea name="remarks" class="form-control w-100" id="remarks" rows="3"></textarea>
                        </div>
                    </div>
                    <div v-if="vehicle_type == 3 || vehicle_type == 2" class="col-lg-12 row">
                        <div class="col-lg-12 d-flex">
                            <label class="h5">{{ vehiclemodes.filter(i => i.id == vehicle_type)[0].name }}</label>
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
                    <div v-if="vehicle_type == 4" class="col-lg-12 row">
                        <div class="col-lg-12 d-flex">
                            <label class="h5">{{ vehiclemodes.filter(i => i.id == vehicle_type)[0].name }}</label>
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
                                            <input type="text" class="select-remove form-control" placeholder="Enter vehicle name" :name="'vehicle_name_'+index"/>
                                        </td>
                                        <td>
                                            <input type="text" class="select-remove form-control" placeholder="Enter driver name" :name="'driver_name_'+index"/>
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
            <template v-if="vehicle_type" v-slot:footer>
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
            vehicle_type: null,
            rito: [],
            total: null,
            vehiclemodes: [],
            pages: {
                totalPages: null,
                prevPage: null,
                currentPage: 1,
                nextPage: 2,
                display: 5,
            },
            loading: true,
            searchData: null,
            modal: {
                passengers_id: 'modal-passengers',
                approved_id: 'modal-approved',
                size: 'modal-lg',
            },
            current_to: null,
            selected: [],
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
            puvNames: ['remarks'],
            rpNames: ['vehicle_1', 'driver_1'],
            hiredNames: ['travel_po', 'vehicle_name_1', 'vehicle_plate_1','driver_name_1','driver_contact_1'],
            requesttrans: []
        }
    },  
    components: {
        Modal
    },
    computed: {
        pagination() {
            let result = null;
            let current = this.pages.currentPage;
            if (this.pages.totalPages < 5) {
                result = [...Array(this.pages.totalPages).keys()].map(x => ++x);
            } else {
                if (current <= 3) {
                    result = [...Array(this.pages.display).keys()].map(x => ++x);
                } else if (current == (this.pages.totalPages - 1) || current == this.pages.totalPages) {
                    result = [(this.pages.totalPages - 4), (this.pages.totalPages - 3), (this.pages.totalPages - 2), (this.pages.totalPages - 1), this.pages.totalPages];
                }
                else {
                    result = [current - 2, current -1, current, current + 1, current + 2];
                }
            }
            
            return result;
        },
    },
    created() {
        this.getRITO();
        this.getPos();
        this.getVehicles();
        this.getDrivers();
        this.getVehicleModes();
        this.getRequestTrans();
    },
    methods: {
        async getRITO() {
            this.loading = true;
            await axios.get(BASE_URL + '/travel/ritorequest?pages='+this.pages.currentPage).then(res => {
                this.rito = res.data.data;
                this.total = res.data.count;
                this.pages.totalPages = Math.ceil(res.data.count / 10);
                this.loading = false;

                $(() => {
                    $('input.checkable:checkbox').change(function() {
                        if ($(this).is(":checked")) {
                            $(this).closest('tr').addClass('bg-gray');
                        } else {
                            $(this).closest('tr').removeClass('bg-gray');
                        }
                    });
                });
            });

        },
        indexers(idx) {
            return (this.pages.currentPage == 1) ? idx : ((this.pages.currentPage - 1) * 10) + idx;
        },
        pageSet(type, page = null) {
            $('input.checkable:checkbox:checked').click();
            $('input.checkable:checkbox').closest('tr').removeClass('bg-gray');
            if (type == 'jump') {
                this.pages.prevPage = page - 1;
                this.pages.currentPage = page;
                this.pages.nextPage = page + 1;
            } else if (type == 'next' || type == 'prev') {
                (type == 'next')?this.pages.currentPage++:this.pages.currentPage--;
                this.pages.prevPage = this.pages.currentPage - 1;
                this.pages.nextPage = this.pages.currentPage + 1;
            } 
            this.getRITO();
        },
        getPassengers(id, TO) {
            axios.get(BASE_URL + `/travel/ritorequest/${id}`).then(res=>{
                this.passengers = res.data;
                this.current_to = TO;
                $('#modal-passengers').modal('show');
            });
        },
        assignVehicle() {
            let vm = this;
            let arr = [];
            vm.selected = [];
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

                $('.radio-vehicle').change(function() {
                    vm.rp.total = vm.hired.total = 1;
                    if(vm.vehicle_type == 3 || vm.vehicle_type == 2) {
                        $('#vehicle-select-1').select2({
                            placeholder: "Select a vehicle",
                        });

                        $('#driver-select-1').select2({
                            placeholder: "Select a driver",
                        });
                    } else {
                        vm.rpNames = ['vehicle_1', 'driver_1'];
                    }
                    
                    if (vm.vehicle_type == 4) {
                        $('#travel_po-select').select2({
                            placeholder: "Select a Travel PO",
                        });

                        $('.select-remove').siblings('.select2').remove();
                        $('.select-remove').siblings('.select2').remove();
                    } else {
                        vm.hiredNames = ['po', 'vehicle_name_1', 'vehicle_plate_1','driver_name_1','driver_contact_1'];
                    }

                });

                $('.radio-vehicle').on('change', () => {
                    $('.invalid-feedback').remove();
                    $('.invalid').removeClass('is-invalid');
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
        approved() {
            let ritoData = $('#rito-form').serialize();
            axios.post(BASE_URL + '/travel/ritorequest', ritoData).then(response => {
                $('.invalid-feedback').remove();
                $('.invalid').removeClass('is-invalid');
                Swal.fire("Good job!", response.data.message, "success");
                this.$showToast(response.data.message, 'success');
                $('#modal-approved').modal('toggle');
                $('input.checkable:checkbox:checked').click();
                this.getRITO();
                this.getRequestTrans();
            }).catch(error => {
                let data = error.response.data.errors;
                let keys = [];
                let values = [];
                for (const [key, value] of Object.entries(data)) {
                    keys.push(`${key}`);
                    values.push(`${value}`);
                    let _keys = `${key}`.replace(/[0-9]/g, '');
                    if (`${key}` == 'travel_po') {
                        if ($('#'+`${key}`+'-select').next().next().length == 0) {
                            $('#'+`${key}`+'-select').next().after('<div class="invalid-feedback invalid-feedback-admin d-block">'+`${value}`+'</div>');
                        }
                    } else if (_keys == 'driver_name_' || _keys == 'driver_contact_' || _keys == 'vehicle_name_' || _keys == 'vehicle_plate_' || `${key}` == 'remarks') {
                        if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                            $('[name="'+`${key}`+'"]').addClass('is-invalid');
                            $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                        }
                    } else {
                        if ($('[name="'+`${key}`+'"]').next().next().length == 0) {
                            $('[name="'+`${key}`+'"]').next().after('<div class="invalid-feedback invalid-feedback-admin d-block">'+`${value}`+'</div>');
                        }
                    }
                   
                };

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

                        
                    
                this.$showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        },
        getVehicleModes() {
            axios.get(BASE_URL + '/api/v1/vehiclemode').then(res => {
                this.vehiclemodes = res.data.results;
            });
        },
        getRequestTrans() {
            axios.get(BASE_URL + '/api/v1/requesttrans').then(res => {
                this.requesttrans = res.data;
            });
        }
    },
}
</script>