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
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <modal :size="size">
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
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </template>
        </modal>
    </div>
</template>

<script>
import Modal from '../../components/Layouts/Modal';
export default {
    data() {
        return {
            size: 'modal-lg',
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
                                    <input type="checkbox" value="" class="checkable"/>
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
                                            <i class="flaticon2-document"></i> Passengers\
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
                                $('#kt_datatable_modal').modal('show');
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
    },
}
</script>