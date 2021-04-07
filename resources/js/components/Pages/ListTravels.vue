<template>
    <div class="card card-custom gutter-b" id="transportation-page">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="list-travel-tbl" style="width:500px !important">
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
                        <th>Flat Rate</th>
                        <th>Rate per night</th>
                        <th>No. of Nights</th>
                        <th>Total Cost</th>
                        <th>Created at</th>
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
            $(()=>{
                this.tdatatable().init();
            });
        },
        tdatatable() {
            var initTable = () => {
            var table = $('#list-travel-tbl');
                table.DataTable({
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
                        type: 'GET'
                    },
                    columns: [
                        { "data": "id" },
                        { "data": "trip_ticket" },
                        { "data": "company_name" },
                        { "data": "travel_date" },
                        { "data": "starting_odo" },
                        { "data": "ending_odo" },
                        { "data": "date_submit_proc" },
                        { "data": "travelled" },
                        { "data": "po_no" },
                        { "data": "po_amount" },
                        { "data": "rate_per_km" },
                        { "data": "flat_rate" },
                        { "data": "rate_per_night" },
                        { "data": "nights_count" },
                        { "data": "total_cost" },
                        { "data": "created_at" },
                        { "data": "id" }
                        
                    ],
                    columnDefs: [
                        {
                            targets: 1,
                            render: data => {
                                return '<span class="text-nowrap label label-lg font-weight-bold label-light-warning label-inline">'+data+'</span>';
                            }
                        },
                        {
                            targets: [9, 10, 11, 12, 14],
                            render: data => {
                                return toParseNum(data);
                            }
                        },
                        {
                            targets: 13,
                            orderable: false,
                        },
                        {
                            targets: 15,
                            orderable: false,
                            render: data => {
                                return dateTimeEng(data);
                            }
                        },
                        {
                            targets: -1,
                            orderable: false,
                            render: data => {
                                return '\
                                    <a href="javascript:;" data-id="'+ data +'" class="ml-5 btn-edit btn btn-sm btn-clean btn-icon" title="Edit details">\
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
                                ';
                            }
                        }
                    ],
                    drawCallback: () => {
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