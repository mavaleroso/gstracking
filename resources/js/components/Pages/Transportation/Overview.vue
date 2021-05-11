<template>
    <div class="card card-custom gutter-b" id="transportation-page">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="transportation-tbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Template No.</th>
                        <th>Driver</th>
                        <th>Updated</th>
                    </tr>
                </thead>
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
            var initTable = () => {
            var table = $('#transportation-tbl');
                table.DataTable({
                    scrollY: '50vh',
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: BASE_URL + '/transportation/overview',
                        type: 'GET'
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "image" },
                        { "data": "type" },
                        { "data": "description" },
                        { "data": "template" },
                        { "data": "fullname" },
                        { "data": "updated_at" }
                    ],
                    columnDefs: [
                        {
                            targets: 1,
                            render: data => {
                                var img_path = (data)? BASE_URL + '/storage/images/' + data : BASE_URL + '/storage/images/vehicle-photo-default.jpg';
                                return '<a class="vehicle-img-viewer" href="'+ img_path +'"><img class="img-fluid img-thumbnail vehicle-img" src="' + img_path +'"></a>';
                            }
                        },
                        {
                            targets: 6,
                            render: data => {
                                return dateTimeEng(data);
                            }
                        },
                    ],
                    drawCallback: () => {
                        $(".vehicle-img-viewer").fancybox();
                    }
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