<template>
    <div class="card card-custom gutter-b" id="transportation-page">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
            
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
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
                </span>New Record</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="transportation-tbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company</th>
                        <th>Provider</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Template No.</th>
                        <th>Drivers</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>1</td>
                       <td>DSWD</td>
                       <td>Office</td>
                       <td>SUV</td>
                       <td>SUV 123</td>
                       <td>PS 12345</td>
                       <td>Show Driver</td>
                       <td>03/12/2020</td>
                       <td>2/19/2021</td>
                       <td>Edit</td>
                    </tr>
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        this.ini();
    },
    methods:{
        ini(){
            $(()=>{
                this.tdatatable().init();
            });
        },
        tdatatable(){
            var initTable = ()=> {
            var table = $('#transportation-tbl');

            // begin first table
                table.DataTable({
                    scrollY: '50vh',
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    columnDefs: [],
                });
            };
            return {
                init: function() {
                    initTable();
                },
            };
        }
    }

}
</script>