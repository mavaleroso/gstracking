<template>
    <div id="driver-page">
        <div v-if="create == true" class="card card-custom gutter-b animate__animated animate__fadeInRight">
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label"><span></span>
                    <i class="mr-2"></i>
                    <small class="">Form</small></h3>
                </div>
            </div>
            <div :class="(loadingStats) ? 'card-body overlay overlay-block' : 'card-body'">
                <div v-if="loadingStats" class="overlay-layer bg-dark-o-10">
                    <div class="spinner spinner-primary"></div>
                </div>
                <form class="form" id="driver-form" @submit.prevent="saveEntry">
                    <div class="card-body">
                        <div class="row">
                            <div v-if="formFields.image!=''" class="col-lg-12" id="images">
                                 <div class="form-group">
                                    <label>Image: </label> <br>
                                    
                                    <img :src="formFields.image" style="width:100px;height:100px;" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                               
                                <div class="form-group">
                                    <label>Fullname:</label>
                                    <select v-if="$store.getters['currentUser/loadingStats']" class="details-input form-control select2" id="kt_select_fullname" name="fullname" v-model="formFields.fullname" disabled>
                                        <option label="Label"></option>
                                        <option v-for="(result,index) in formFields.results" :key="index" :value="index">{{result.first_name}} {{result.middle_name}} {{result.last_name}}</option>
                                    </select>
                                    <select v-else class="details-input form-control select2" id="kt_select_fullname" name="fullname" v-model="formFields.fullname">
                                        <option label="Label"></option>
                                        <option v-for="(result,index) in formFields.results" :key="index" :value="index">{{result.first_name}} {{result.middle_name}} {{result.last_name}}</option>
                                    </select>
                                  </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input type="text" class="form-control required-field" name="driver_gender" placeholder="Gender" v-model="formFields.gender" disabled/>
                                </div>
                                <div class="form-group">
                                    <label>Status:</label>
                                    <input type="text" class="form-control required-field" name="driver_status" placeholder="Status" v-model="formFields.status" disabled/>
                                    <!-- <input v-else type="text" class="form-control required-field" name="driver_status" placeholder="Status" value="Inactive" disabled/> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Birthdate:</label>
                                    <input type="text" class="form-control required-field" name="driver_birthdate" placeholder="Birthdate" v-model="formFields.birthdate" disabled/>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-mobile-phone icon-lg"></i></span></div>
                                        <input type="number" class="form-control required-field" name="driver_contactNumber" placeholder="Enter contact number" v-model="formFields.contactNumber" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button @click="cancelEntry" type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div v-else class="card card-custom gutter-b animate__animated animate__fadeIn" >
            <div class="card-header flex-wrap">
                <div class="card-title"></div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a class="btn btn-primary font-weight-bolder" @click="newEntry">
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
                    </span>New Entry</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable" id="driver-tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Sex</th>
                            <th>Contact No.</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>      
</template>
<script>
import Dialog from '../../Layouts/Dialog.vue';
export default {
  components: { Dialog },
    data() {
        return {
            create: false,
            formFields: {
                id: '',
                fullname: '',
                birthdate: '',
                gender: '',
                contactNumber: '',
                status: '',
                results: [],
                image:''
            },
            loadingStatus: 'true',
            listdata:[],
            states:[],
            names: ['fullname', 'birthdate', 'gender', 'contactNumber', 'status']
        }
    },
    created() {
        
    },
    mounted() {
        this.ini();
        this.EmployeeList();
    },
    computed: {
        loadingStats() {
            let res = this.$store.getters['currentUser/loadingStats'];
            if(!res) {
                this.formFields.results = JSON.parse(localStorage.getItem('ListEmployee'));
            }
            return res;
        }
    },
    methods: {
        ini() {
            $(()=>{
                this.tdatatable().init();   
            });
        },
        EmployeeList(){
            this.formFields.results = JSON.parse(localStorage.getItem('ListEmployee'));
            this.loadingStatus = this.$store.getters['currentUser/loadingStats'];
        },
        newEntry() { 
            this.create = true;
            let vm = this;
            $(() => {
                $('#images').hide();
                $('#kt_select_fullname').on('change', () => {
                    vm.getData();
                    $('#images').show();
                });
                $('.card-label span').text('Create Driver');
                $('#kt_select_fullname').select2({
                    placeholder: "Select fullname",
                    allowClear: true
                });
            });
        },
        getData(){
            let vm = this;
            let id  = $('#kt_select_fullname').val();
            let fullname = vm.formFields.results[id].first_name +' '+vm.formFields.results[id].middle_name+' '+vm.formFields.results[id].last_name;
            vm.formFields.contactNumber = vm.formFields.results[id].contact;
            vm.formFields.gender = vm.formFields.results[id].gender;    
            vm.formFields.status = vm.formFields.results[id].status;
            vm.formFields.birthdate = vm.formFields.results[id].birthdate;
            vm.formFields.fullname = fullname;
            vm.formFields.image = vm.formFields.results[id].image_path;
        },
        cancelEntry() {
            this.formFields.id = '';
            this.formFields.fullname = '';
            this.formFields.birthdate = '';
            this.formFields.gender = '';
            this.formFields.contactNumber = '';
            this.formFields.status = '';
            this.create = false;
            this.ini();
        },
        saveEntry() {
            let formD = new FormData();
            let method = null;
            let putParams = null;
            formD.append('id', this.formFields.id);
            formD.append('fullname', this.formFields.fullname);
            formD.append('birthdate', this.formFields.birthdate);
            formD.append('gender', this.formFields.gender);
            formD.append('contactNumber', this.formFields.contactNumber);
            formD.append('status', this.formFields.status);
            method = (this.create)? 'POST':'PUT';
            putParams = (this.create)? '':'/' + this.formFields.id;
            axios({method: method,url: BASE_URL + '/transportation/driver' + putParams, data: formD, headers: {"Content-Type": "application/x-www-form-urlencoded"}}).then(response => {
                    $('.invalid-feedback').remove();
                    $('.is-invalid').removeClass('is-invalid');
                    Swal.fire("Good job!", response.data.message, "success");
                    showToast(response.data.message, 'success');
                    setTimeout(() => {
                        this.cancelEntry();
                    }, 1000);
                })
                .catch((error) => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if(`${key}` == 'fullname'){
                            if ($('#kt_select_'+`${key}`).next().next().length == 0) {
                                $('#kt_select_'+`${key}`).next().after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                                
                            }
                        } else {
                            if ($('[name="driver_'+`${key}`+'"]').next().length == 0 || $('[name="driver_'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                                $('[name="driver_'+`${key}`+'"]').addClass('is-invalid');
                                $('[name="driver_'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                            }
                        }
                    }
                    for (let i = 0; i < this.names.length; i++) {
                        if (this.names[i] == 'fullname') {
                            if (keys.indexOf(''+this.names[i]+'') == -1) {
                                if ($('#kt_select_'+ this.names[i]).next().next().length != 0) {
                                    $('#kt_select_'+ this.names[i]).next().next('.invalid-feedback').remove();
                                }
                            }
                        } else {
                            if (keys.indexOf(''+this.names[i]+'') == -1) {
                                $('[name="driver_'+this.names[i]+'"]').removeClass('is-invalid');
                                $('[name="driver_'+this.names[i]+'"]').next('.invalid-feedback').remove();
                            }
                        }
                    }
                    
                showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        },
        deleteEntry(id) {
             Swal.fire({
                title: 'Are you sure?',
                text: 'You won"t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then(result => {
                if (result.value) {
                    axios.delete(BASE_URL + '/transportation/driver/'+id).then(response => {
                        Swal.fire(
                            'Deleted!',
                            response.data.message,
                            'success'
                        );
                        
                        $("#driver-tbl").DataTable().ajax.reload();
                    });
                }
            });
        },
        tdatatable() {
            var vm = this;
            var initTable = () => {
            var table = $('#driver-tbl');
                table.DataTable({
                    scrollY: '50vh',
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: BASE_URL + '/transportation/driver',
                        type: 'GET'
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "fullname" },
                        { "data": "birthdate" },
                        { "data": "sex" },
                        { "data": "contact" },
                        { "data": "status" },
                        { "data": "updated_at" },
                        { "data": "id" }
                    ],
                    columnDefs: [
                        {
                            targets: 5,
                            render: data => {
                                var status = {
                                    'Inactive': {
                                        'title': 'Inactive',
                                        'class': ' label-light-warning'
                                    },
                                    'Active': {
                                        'title': 'Active',
                                        'class': ' label-light-primary'
                                    }
                                };
                                return '<span class="btn-details label label-lg font-weight-bold ' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                            }
                        },
                        {
                            targets: -1,
                            title: 'Action',
                            orderable: false,
                            width: '125px',
                            render: data => {
                                return '\
                                    <a href="javascript:;" data-id="'+ data +'" class="btn-delete btn btn-sm btn-clean btn-icon" title="Delete">\
                                        <span class="svg-icon svg-icon-md">\
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                    <rect x="0" y="0" width="24" height="24"/>\
                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                                </g>\
                                            </svg>\
                                        </span>\
                                    </a>\
                                ';
                            },
                        },
                        {
                            targets: 6,
                            render: data => {
                                return dateTimeEng(data);
                            }
                        }
                    ],
                    drawCallback: () => {
                        $('.btn-delete').click(function() {
                            let id = $(this).data('id');
                            vm.deleteEntry(id);
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
    },
}
</script>