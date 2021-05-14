<template>
    <div id="vehicle-page">
        <div v-if="create == true || edit == true" class="card card-custom gutter-b animate__animated animate__fadeInRight">
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label"><span></span>
                    <i class="mr-2"></i>
                    <small class="">Form</small></h3>
                </div>
            </div>
            <div class="card-body">
                <form class="form" id="vehicle-form" @submit.prevent="saveEntry">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                <p>Image:</p>
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(storage/images/vehicle-photo-default.png)">
                                    <div class="image-input-wrapper"></div>

                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" id="vehicle-img" ref="file" name="vehicle_avatar" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden"/>
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">Status </label>
                                <div class="col-lg-6">
                                    <div class="checkbox-inline">
                                        <label class="radio mr-2">
                                            <input class="details-input" type="radio" name="status_radio"  value="1" v-model="formFields.status"/> Active
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input class="details-input" type="radio" name="status_radio" value="0" v-model="formFields.status"/> Inactive
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control required-field" name="vehicle_name" placeholder="Enter vehicle name" v-model="formFields.name" />
                                </div>
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control" name="vehicle_des" id="exampleTextarea" rows="3" v-model="formFields.description"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Template Number:</label>
                                    <input type="text" class="form-control required-field" name="vehicle_templateNumber" placeholder="Enter template number" v-model="formFields.templateNumber"/>
                                </div>
                                <div class="form-group">
                                    <label>Capacity Number:</label>
                                    <input type="number" class="form-control required-field" name="vehicle_capacityNumber" placeholder="Enter capacity number" v-model="formFields.capacityNumber"/>
                                </div>
                                    <div class="form-group">
                                    <label>Remarks:</label>
                                    <textarea class="form-control" name="vehicle_rem" id="exampleTextarea" rows="3" v-model="formFields.remarks"></textarea>
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
                    <a href="#" class="btn btn-primary font-weight-bolder" @click="newEntry">
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
                <table class="table table-separate table-head-custom table-checkable" id="vehicle-tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Capacity</th>
                            <th>Template No.</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Updated</th>
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
export default {
    data() {
        return {
            create: false,
            edit: false,
            drivers: [],
            formFields: {
                id: '',
                picture: '',
                pictureName: '',
                name: '',
                description: '',
                templateNumber: '',
                capacityNumber: '',
                status: 0,
                remarks: '',
                driver: ''
            },
            names: ['status_radio','name', 'templateNumber', 'capacityNumber']
        }
    },
    created() {
    },
    mounted() {
        this.ini();
    },
    methods:{
        ini(){
            $(()=>{
                this.tdatatable().init();
            }); 
        },
        newEntry() {
            this.create = true;
            let vm = this;

            $(() => {
                vm.formFields.id = '';
                vm.formFields.pictureName = '';
                vm.formFields.name = '';
                vm.formFields.description = '';
                vm.formFields.capacityNumber = '';
                vm.formFields.templateNumber = '';
                vm.formFields.status = '';
                vm.formFields.remarks = '';

                this.image();

                $('.card-label span').text('Create Vehicle');
            });
        },
        editEntry(id) {
            this.edit = true;
            let vm = this;
            $(() => {
                axios.get(BASE_URL + "/transportation/vehicle/"+id).then(response => {

                    vm.formFields.id = response.data.vehicles[0].id;
                    vm.formFields.pictureName = response.data.vehicles[0].image;
                    vm.formFields.name = response.data.vehicles[0].name;
                    vm.formFields.description = response.data.vehicles[0].description;
                    vm.formFields.capacityNumber = response.data.vehicles[0].capacity;
                    vm.formFields.templateNumber = response.data.vehicles[0].template;
                    vm.formFields.status = response.data.vehicles[0].status;
                    vm.formFields.remarks = response.data.vehicles[0].remarks;
                  
                    let img = (response.data.vehicles[0].image)? BASE_URL + '/storage/images/' + response.data.vehicles[0].image : BASE_URL + '/storage/images/vehicle-photo-default.png';
                    $('#kt_image_5').css('background-image', 'url('+img+')');
                });

                this.image();
            
                $('.card-label span').text('Edit Vehicle');
            });
        },
        cancelEntry() {
            this.create = false;
            this.edit = false;
            this.ini();
        },
        saveEntry() {
            let formD = new FormData();
            let method = null;
            let putParams = null;

            formD.append('id', this.formFields.id);
            formD.append('picture', this.formFields.picture);
            formD.append('pictureName', this.formFields.pictureName);
            formD.append('name', this.formFields.name);
            formD.append('description', this.formFields.description);
            formD.append('templateNumber', this.formFields.templateNumber);
            formD.append('capacityNumber', this.formFields.capacityNumber);
            formD.append('status', this.formFields.status);
            formD.append('remarks', this.formFields.remarks);
            method = (this.create)? 'POST':'PUT';
            putParams = (this.create)? '':'/' + this.formFields.id;


            axios({method: method, url: BASE_URL + '/transportation/vehicle' + putParams, data: formD, headers: {"Content-Type": "application/x-www-form-urlencoded"}}).then(response => {
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
                        if ($('[name="vehicle_'+`${key}`+'"]').next().length == 0 || $('[name="vehicle_'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                            $('[name="vehicle_'+`${key}`+'"]').addClass('is-invalid');
                            $('[name="vehicle_'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                        }
                    }
                    for (let i = 0; i < this.names.length; i++) {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            $('[name="vehicle_'+this.names[i]+'"]').removeClass('is-invalid');
                            $('[name="vehicle_'+this.names[i]+'"]').next('.invalid-feedback').remove();
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
                    axios.delete(BASE_URL + '/transportation/vehicle/'+id).then(response => {
                        Swal.fire(
                            'Deleted!',
                            response.data.message,
                            'success'
                        ); 
                        $("#vehicle-tbl").DataTable().ajax.reload();
                    });
                }
            });
        },
        tdatatable(){
            var vm = this;
            var initTable = () => {
            var table = $('#vehicle-tbl');
                table.DataTable({
                    scrollY: '50vh',
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: BASE_URL + '/transportation/vehicle',
                        type: 'GET'
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "image" },
                        { "data": "name" },
                        { "data": "description" },
                        { "data": "capacity" },
                        { "data": "template" },
                        { "data": "status" },
                        { "data": "remarks" },
                        { "data": "updated_at" },
                        { "data": "id" },
                        
                    ],
                    columnDefs: [
                        {
                            targets: [1, 4],
                            orderable: false
                        },
                        {
                            targets: -1,
                            title: 'Actions',
                            orderable: false,
                            width: '125px',
                            render: data => {
                                return '\
                                    <a href="javascript:;" data-id="'+ data +'" class="btn-edit btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
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
                            targets: 1,
                            render: data => {
                                var img_path = (data)? BASE_URL + '/storage/images/' + data : BASE_URL + '/storage/images/vehicle-photo-default.png';
                                return '<a class="vehicle-img-viewer" href="'+ img_path +'"><img class="img-fluid img-thumbnail vehicle-img" src="' + img_path +'"></a>';
                            }
                        },
                        {
                            targets: 6,
                            render: data => {
                                var status = {
                                    0: {
                                        'title': 'Inactive',
                                        'class': ' label-light-warning'
                                    },
                                    1: {
                                        'title': 'Active',
                                        'class': ' label-light-success'
                                    },
                                };
                                return '<span class="btn-details label label-lg font-weight-bold ' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                            }
                        },
                        {
                            targets: 8,
                            render: data => {
                                return dateTimeEng(data);
                            }
                        },
                    ],
                    drawCallback: () => {
                        $(".vehicle-img-viewer").fancybox();

                        $('.btn-edit').click(function() {
                            let id = $(this).data('id');
                            vm.editEntry(id);
                        });

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
        image() {
            var avatar5 = new KTImageInput('kt_image_5');
            var vm = this;

            avatar5.on('cancel', function(imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Awesome!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });

            avatar5.on('change', function(imageInput) {
                vm.formFields.picture = imageInput.input.files[0];
            });

            avatar5.on('remove', function(imageInput) {
                swal.fire({
                    title: 'Image successfully removed !',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: 'Got it!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });
        }
    }

}
</script>