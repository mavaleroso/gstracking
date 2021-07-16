<template>
    <div id="fuel-charge-page" class="w-100 h-100">
        <div
            v-if="!fuel_request"
            class="card card-custom card-stretch gutter-b"
        >
            <div class="card-header">
                <div class="card-title"></div>
                <div class="card-toolbar">
                    <a
                        class="btn btn-primary font-weight-bolder"
                        @click="fuelRequest"
                    >
                        <span class="svg-icon svg-icon-md">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                version="1.1"
                            >
                                <g
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd"
                                >
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle
                                        fill="#000000"
                                        opacity="0.3"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                    />
                                    <path
                                        d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                        fill="#000000"
                                    />
                                </g>
                            </svg> </span
                        >Fuel Request</a
                    >
                </div>
            </div>
            <div class="card-body">
                <table
                    class="table table-separate table-head-custom"
                    id="fuel-charges-tbl"
                >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Vehicle Description</th>
                            <th>Plate No.</th>
                            <th>Gasoline Liters</th>
                            <th>Diesel Liters</th>
                            <th>Total KM travelled</th>
                            <th>KM/Liters</th>
                            <th>Date Requested</th>
                            <th>PO No.</th>
                            <th>PO Balance</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div
            v-else
            class="card card-custom card-stretch gutter-b animate__animated animate__fadeInRight"
        >
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label">
                        <span>Fuel Request</span>
                        <small>Form</small>
                    </h3>
                </div>
            </div>
            <div class="card-body p-20">
                <form class="form row" id="fuel-request-form">
                    <div class="col-lg-6">
                        <div class="form-group mb-0">
                            <label>Driver:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_driver"
                            >
                                <option label="Label"></option>
                                <option>Test</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Vehicle description:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_vehicle"
                            >
                                <option label="Label"></option>
                                <option>Test</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Plate No:</label>
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-0">
                            <label>Date:</label>
                            <input type="date" class="form-control" />
                        </div>
                        <div class="form-group mb-0">
                            <label>PO Number:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_po"
                            >
                                <option label="Label"></option>
                                <option>Test</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>PO Balance:</label>
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label>Purpose:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div>
                    <button
                        class="btn btn-light-primary btn-sm mx-1"
                        @click="fuel_request = false"
                    >
                        Cancel
                    </button>
                    <button
                        class="btn btn-primary btn-sm mx-1"
                        @click="fuel_request = false"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fuel_request: false
        };
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            $(() => {
                this.tdatatable();
            });
        },
        tdatatable() {
            var vm = this;
            var initTable = () => {
                var table = $("#fuel-charges-tbl");
                table.DataTable({
                    scrollY: "50vh",
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    // ajax: {
                    //     url: BASE_URL + "/transportation/driver",
                    //     type: "GET"
                    // },
                    columns: [
                        { data: "id" },
                        { data: "fullname" },
                        { data: "birthdate" },
                        { data: "sex" },
                        { data: "contact" },
                        { data: "status" },
                        { data: "updated_at" },
                        { data: "id" }
                    ],
                    columnDefs: [
                        {
                            targets: -1,
                            title: "Action",
                            orderable: false,
                            width: "125px",
                            render: data => {
                                return (
                                    '\
                                    <a href="javascript:;" data-id="' +
                                    data +
                                    '" class="btn-delete btn btn-sm btn-clean btn-icon" title="Delete">\
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
                                '
                                );
                            }
                        }
                    ]
                });
            };
            return {
                init: function() {
                    initTable();
                }
            };
        },
        fuelRequest() {
            this.fuel_request = true;
            setTimeout(() => {
                $("#kt_select_driver").select2({
                    placeholder: "Select a Driver",
                    allowClear: true
                });
                $("#kt_select_vehicle").select2({
                    placeholder: "Select a Vehicle",
                    allowClear: true
                });
                $("#kt_select_po").select2({
                    placeholder: "Select a PO",
                    allowClear: true
                });
            }, 100);
        }
    }
};
</script>
