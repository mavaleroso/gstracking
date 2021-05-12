<template>
    <div id="list-po-page">
        <div v-if="create == true || edit == true" class="card card-custom gutter-b animate__animated animate__fadeInRight">
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label"><span></span>
                    <i class="mr-2"></i>
                    <small class="">Form</small></h3>
                </div>
            </div>
            <div class="card-body">
                <form class="form" id="driver-form" @submit.prevent="saveEntry">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>PO #:</label>
                                    <input v-if="create == true" type="text" class="form-control required-field" name="po_no" placeholder="PO number" v-model="formFields.po_no"/>
                                    <input v-else type="text" class="form-control disabled bg-gray-400" name="po_no" placeholder="PO number" v-model="formFields.po_no" disabled/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Amount :</label>
                                     <input type="number" min="0" step="any" class="form-control required-field" name="po_amount" placeholder="Amount" v-model="formFields.po_amount"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Status:</label>
                                    <select class="form-control select2" id="status" name="status" v-model="formFields.status">
                                        <option label="Label"></option>
                                        <option value="1">Ongoing</option>
                                        <option value="2">Approved</option>
                                        <option value="3">Completed</option>
                                    </select>
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
                <table class="table table-separate table-head-custom table-checkable" id="po-list-tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PO Number</th>
                            <th>Amount</th>
                            <th>balance</th>
                            <th>status</th>
                            <th>Created At</th>
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
            formFields: {
                id: '',
                po_no: '',
                po_amount: '',
                status: '',
            },
            names: ['po_no', 'po_amount', 'status']
        }
    },
    mounted() {
        this.ini().init();
    },
    methods: {
        ini() {
            let vm = this;
            var datatbl = () => {
                $(()=>{
                    this.tdatatable().init();
                });
            }

            var select_ini = (lbl) => {
                $(() => {
                    $('#status').select2({
                        placeholder: "Select status",
                        minimumResultsForSearch: Infinity
                    });

                    $('#status').change(function() {
                        vm.formFields.status = $(this).val();
                    });

                    $('.card-label span').text(lbl);
                });
            }

            return {
                init: () => {
                    datatbl();
                },
                select_ini: (lbl) => {
                    select_ini(lbl);
                } 
            };
        },
        newEntry() {
            this.create = true;
            let vm = this;
            vm.ini().select_ini('Create PO');
        },
        cancelEntry() {

            this.formFields.id = '';
            this.formFields.po_no = '';
            this.formFields.po_amount =  '';
            this.formFields.status =  '';

            this.create = false;
            this.edit = false;
            this.ini().init();
        },
        saveEntry() {
            let formD = new FormData();
            let method = null;
            let putParams = null;

            formD.append('po_no', this.formFields.po_no);
            formD.append('po_amount', this.formFields.po_amount);
            formD.append('status', this.formFields.status);

            method = (this.create)? 'POST':'PUT';
            putParams = (this.create)? '':'/' + this.formFields.id;

            axios({method: method, url: BASE_URL + '/tracking/po' + putParams, data: formD, headers: {"Content-Type": "application/x-www-form-urlencoded"}}).then(response => {
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

                    $('.invalid-feedback').remove();
                    $('.is-invalid').removeClass('is-invalid');

                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if(key == 'status'){
                            if ($('#status').next().next().length == 0) {
                                $('#status').next().after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                            }
                        } else {
                            if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                                $('[name="'+`${key}`+'"]').addClass('is-invalid');
                                $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                            }
                        }
                    }
                    
                    for (let i = 0; i < this.names.length; i++) {
                        if (this.names[i] == 'status') {
                            if (keys.indexOf(''+this.names[i]+'') == -1) {
                                if ($('#status').next().next().length != 0) {
                                    $('#status').next().next('.invalid-feedback').remove();
                                }
                            }
                        } else {
                            if (keys.indexOf(''+this.names[i]+'') == -1) {
                                $('[name="'+this.names[i]+'"]').removeClass('is-invalid');
                                $('[name="'+this.names[i]+'"]').next('.invalid-feedback').remove();
                            }
                        }
                    }

                    showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });
        },
        show(id) {
            let vm = this;
            vm.edit = true;
            vm.ini().select_ini('Edit PO');

            axios.get(BASE_URL + "/tracking/po/" + id).then(response => {
                vm.formFields.id = response.data[0].id;
                vm.formFields.po_no = response.data[0].po_no;
                vm.formFields.po_amount = response.data[0].po_amount;
                vm.formFields.status = response.data[0].status;
                
                setTimeout(() => {
                    $('#status').val(vm.formFields.status);
                    $('#status').trigger('change');
                }, 500);

            });
        },
        delete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won"t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then(result => {
                if (result.value) {
                    axios.delete(BASE_URL + '/tracking/po/'+id).then(response => {
                        Swal.fire(
                            'Deleted!',
                            response.data.message,
                            'success'
                        );
                        
                        $("#po-list-tbl").DataTable().ajax.reload();
                    });
                }
            });
        },
        tdatatable() {
            var vm = this;
            var initTable = () => {
            var table = $('#po-list-tbl');
                table.DataTable({
                    scrollY: '50vh',
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: {
                        url: BASE_URL + '/tracking/po',
                        type: 'GET'
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "po_no" },
                        { "data": "po_amount" },
                        { "data": "totalBalance" },
                        { "data": "status" },
                        { "data": "created_at" },
                        { "data": "id" },
                    ],
                    columnDefs: [
                        {
                            targets: 2,
                            render: data => {
                                return toParseNum(data);
                            }
                        },
                        {
                            targets: 3,
                            render: data => {
                                return toParseNum(data);
                            }
                        },
                        {
                            targets: 4,
                            render: data => {
                                var status = {
                                    1: {
                                        'title': 'Pending',
                                        'class': ' label-light-warning'
                                    },
                                    2: {
                                        'title': 'Approved',
                                        'class': ' label-light-primary'
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
                                return '<span class="btn-details label label-lg font-weight-bold ' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                            }
                        },
                        {
                            targets: 5,
                            render: data => {
                                return dateTimeEng(data);
                            }
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
                    ],
                    drawCallback: () => {
                        $('.btn-edit').off().on('click', function() {
                            let id = $(this).data('id');
                            vm.show(id);
                        });

                        $('.btn-delete').off().on('click', function() {
                            let id = $(this).data('id');
                            vm.delete(id);
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