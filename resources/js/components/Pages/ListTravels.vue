<template>
    <div class="card card-custom gutter-b" id="transportation-page">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="list-travels-tbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trip Ticket</th>
                        <th>Service Provider</th>
                        <th>Date of Travel</th>
                        <th>Starting ODO</th>
                        <th>Ending Odo</th>
                        <th>Date Submitted to Procurement</th>
                        <th>Distance Travelled</th>
                        <th>PO Number</th>
                        <th>PO Amount</th>
                        <th>Rate per Km</th>
                        <th>No. of Nights</th>
                        <th>Total Cost</th>
                        <th>Action</th>
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
       ini() {
            
       },

    }

}
</script>