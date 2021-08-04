<template>
    <div id="fuel-charge-page" class="w-100 h-100">
        <div
            v-if="!fuel_request && !fuel_request_update"
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
                            <th>Unit Price</th>
                            <th>Amount</th>
                            <th>Purpose</th>
                            <th>Date Requested</th>
                            <th>PO No.</th>
                            <th>PO Balance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div
            v-if="fuel_request"
            class="
                card card-custom card-stretch
                gutter-b
                animate__animated animate__fadeInRight
            "
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
                                name="driver_id"
                            >
                                <option label="Label"></option>
                                <option
                                    v-for="driver in drivers"
                                    :key="driver.id"
                                    :value="driver.id"
                                >
                                    {{ driver.fullname }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Vehicle:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_vehicle"
                                name="vehicle_id"
                            >
                                <option label="Label"></option>
                                <option
                                    v-for="vehicle in vehicles"
                                    :key="vehicle.id"
                                    :value="vehicle.id"
                                >
                                    {{ vehicle.name }} - {{ vehicle.plate_no }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Plate No:</label>
                            <input
                                type="text"
                                class="form-control"
                                :value="
                                    form_fields.vehicle_id
                                        ? vehicles.filter(
                                              i =>
                                                  i.id == form_fields.vehicle_id
                                          )[0].plate_no
                                        : null
                                "
                                disabled
                            />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-0">
                            <label>PO Number:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_po"
                                name="po_id"
                            >
                                <option label="Label"></option>
                                <option
                                    v-for="po in pos.filter(i => i.type == 1)"
                                    :key="po.id"
                                    :value="po.id"
                                >
                                    {{ po.po_no }} - ₱
                                    {{
                                        po.totalBalance
                                            ? $toParseNum(po.totalBalance)
                                            : $toParseNum(po.po_amount)
                                    }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>PO Balance:</label>
                            <input
                                type="text"
                                class="form-control"
                                :value="
                                    form_fields.po_id
                                        ? pos.filter(
                                              i => i.id == form_fields.po_id
                                          )[0].totalBalance
                                        : null
                                "
                                disabled
                            />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label>Purpose:</label>
                            <textarea
                                class="form-control"
                                rows="3"
                                v-model="form_fields.purpose"
                                name="purpose"
                            ></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div>
                    <button
                        class="btn btn-light-primary btn-sm mx-1"
                        @click="cancelEntry"
                    >
                        Cancel
                    </button>
                    <button
                        class="btn btn-primary btn-sm mx-1"
                        @click="saveEntry"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
        <div
            v-if="fuel_request_update == true"
            class="
                card card-custom
                gutter-b
                animate__animated animate__fadeInRight
            "
        >
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label">
                        <span>Fuel Request Update</span>
                        <small>Form</small>
                    </h3>
                </div>
            </div>
            <div class="card-body p-20">
                <form class="form row" id="fuel-request-form">
                    <div class="col-lg-12 alert alert-secondary p-5 d-flex">
                        <h4 class="m-0 p-0 font-weight-bold">Total Cost:</h4>
                        <h4 class="m-0 p-0 font-weight-bold ml-auto">
                            {{ $toParseNum(cost) }}
                        </h4>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <label>Particulars:</label>
                            <select
                                class="form-control select2"
                                id="kt_select_particulars"
                                name="particulars"
                            >
                                <option label="Label"></option>
                                <option value="Gasoline">Gasoline</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <label>No. of Liters:</label>
                            <input
                                type="number"
                                class="form-control"
                                name="no_liters"
                                v-model="form_fields_update.no_liters"
                            />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-0">
                            <label>Unit Price:</label>
                            <input
                                type="number"
                                class="form-control"
                                name="unit_price"
                                v-model="form_fields_update.unit_price"
                            />
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div>
                    <button
                        class="btn btn-light-primary btn-sm mx-1"
                        @click="cancelEntry"
                    >
                        Cancel
                    </button>
                    <button
                        class="btn btn-primary btn-sm mx-1"
                        @click="updateEntry"
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
            fuel_request: false,
            fuel_request_update: false,
            form_fields: {
                driver_id: "",
                vehicle_id: "",
                po_id: "",
                purpose: ""
            },
            form_fields_update: {
                id: null,
                particulars: null,
                amount: 0,
                no_liters: 0,
                unit_price: 0
            },
            drivers: [
                {
                    birthdate: "1998-03-08",
                    contact: "09489571604",
                    created_at: "2021-07-05T06:16:20.000000Z",
                    deleted_at: null,
                    fullname: "Marwen ASPE Valeroso",
                    id: 10,
                    sex: "Male",
                    status: "Active",
                    type: "1",
                    updated_at: "2021-07-05T06:16:20.00,0000Z"
                },
                {
                    birthdate: "1998-03-08",
                    contact: "09489571604",
                    created_at: "2021-07-16T02:43:16.000000Z",
                    deleted_at: null,
                    fullname: "Marwen ASPE Valeroso",
                    id: 12,
                    sex: "Male",
                    status: "Active",
                    type: "1",
                    updated_at: "2021-07-16T02:43:16.000000Z"
                },
                {
                    birthdate: "1993-01-29",
                    contact: "09469151992",
                    created_at: "2021-07-16T02:43:27.000000Z",
                    deleted_at: null,
                    fullname: "Scott Owen SANCHEZ Amadeo",
                    id: 13,
                    sex: "Male",
                    status: "Active",
                    type: "1",
                    updated_at: "2021-07-16T02:43:27.000000Z"
                }
            ],
            vehicles: [
                {
                    capacity: 7,
                    created_at: "2021-07-05T06:16:11.000000Z",
                    deleted_at: null,
                    description: null,
                    id: 10,
                    image: null,
                    name: "UV Express",
                    plate_no: "ZKR 250",
                    remarks: null,
                    status: 1,
                    type: "1",
                    updated_at: "2021-07-05T06:16:11.000000Z"
                }
            ],
            pos: [
                {
                    created_at: "2021-07-05T00:53:57.000000Z",
                    deleted_at: null,
                    id: 1,
                    po_amount: 25454621,
                    po_no: "20-01-0001",
                    status: 1,
                    totalBalance: 25441885,
                    type: 1,
                    updated_at: "2021-07-05T00:53:57.000000Z"
                }
            ],
            names: ["driver_id", "vehicle_id", "po_id", "purpose"],
            update_names: ["particulars", "no_liters", "unit_price"]
        };
    },
    mounted() {
        this.ini();
    },
    computed: {
        cost() {
            let result =
                this.form_fields_update.no_liters *
                this.form_fields_update.unit_price;
            this.form_fields_update.amount = result;
            return result;
        }
    },
    methods: {
        ini() {
            $(() => {
                this.fuel_request = false;
                this.tdatatable().init();
            });
        },
        tdatatable() {
            let vm = this;
            var initTable = () => {
                var table = $("#fuel-charges-tbl");
                table.DataTable({
                    scrollY: "50vh",
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: BASE_URL + "/tracking/fuelcharges",
                        type: "GET"
                    },
                    columns: [
                        { data: "id" },
                        { data: "code" },
                        { data: "name" },
                        { data: "plate_no" },
                        { data: "gasoline_liters" },
                        { data: "diesel_liters" },
                        { data: "unit_price" },
                        { data: "amount" },
                        { data: "purpose" },
                        { data: "created_at" },
                        { data: "po_no" },
                        { data: "totalBalance" },
                        { data: "status" },
                        { data: "id" }
                    ],
                    columnDefs: [
                        {
                            targets: 1,
                            render: data => {
                                return this.$label(data);
                            }
                        },
                        {
                            targets: 9,
                            render: data => {
                                return this.$dateEng(data);
                            }
                        },
                        {
                            targets: 11,
                            render: data => {
                                return this.$toParseNum(data);
                            }
                        },
                        {
                            targets: 12,
                            render: data => {
                                var status = {
                                    0: {
                                        title: "On-going",
                                        class: " label-light-warning"
                                    },
                                    1: {
                                        title: "Approved",
                                        class: " label-light-primary"
                                    },
                                    2: {
                                        title: "Completed",
                                        class: " label-light-primary"
                                    }
                                };
                                return (
                                    '<span class="btn-details label label-lg font-weight-bold text-nowrap' +
                                    status[data].class +
                                    ' label-inline">' +
                                    status[data].title +
                                    "</span>"
                                );
                            }
                        },
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
                                    '"class="btn-edit btn btn-sm btn-clean btn-icon" title="Edit details">\
                                        <span class="svg-icon svg-icon-md">\
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" >\
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" >\
                                                    <rect x="0" y="0" width="24" height="24" />\
                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />\
                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />\
                                                </g>\
                                            </svg>\
                                        </span>\
                                    </a>\
                                    <a href="javascript:;" class="btn-print btn btn-sm btn-clean btn-icon" title="Print request">\
                                        <span class="svg-icon svg-icon-md">\
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                    <rect x="0" y="0" width="24" height="24"/>\
                                                    <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>\
                                                    <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>\
                                                </g>\
                                            </svg>\
                                        </span>\
                                    </a>\
                                    <a href="javascript:;" data-id="" class="btn-delete btn btn-sm btn-clean btn-icon" title="Delete">\
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
                    ],
                    drawCallback: () => {
                        $(".btn-edit").click(function() {
                            let id = $(this).data("id");
                            vm.form_fields_update.id = id;
                            vm.showEntry();
                        });

                        $(".btn-delete").click(function() {});
                    }
                });
            };
            return {
                init: function() {
                    initTable();
                }
            };
        },
        fuelRequest() {
            let vm = this;
            this.fuel_request = true;
            this.reset();
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

                $("#kt_select_driver").on("select2:select", function() {
                    vm.form_fields.driver_id = $(this).val();
                });
                $("#kt_select_vehicle").on("select2:select", function() {
                    vm.form_fields.vehicle_id = $(this).val();
                });
                $("#kt_select_po").on("select2:select", function() {
                    vm.form_fields.po_id = $(this).val();
                });
            }, 100);
        },
        saveEntry() {
            let formD = new FormData();
            formD.append("vehicle_id", this.form_fields.vehicle_id);
            formD.append("driver_id", this.form_fields.driver_id);
            formD.append("po_id", this.form_fields.po_id);
            formD.append("purpose", this.form_fields.purpose);

            axios
                .post(BASE_URL + "/tracking/fuelcharges", formD)
                .then(response => {
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    setTimeout(() => {
                        this.ini();
                        this.fuel_request = false;
                    }, 1000);
                })
                .catch(error => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);

                        if (
                            `${key}` == "vehicle_id" ||
                            `${key}` == "driver_id" ||
                            `${key}` == "po_id"
                        ) {
                            if (
                                $("[name=" + `${key}` + "]")
                                    .next()
                                    .next().length == 0
                            ) {
                                $("[name=" + `${key}` + "]")
                                    .next()
                                    .after(
                                        '<div class="invalid-feedback d-block">' +
                                            `${value}` +
                                            "</div>"
                                    );
                            }
                        } else {
                            if (
                                $('[name="' + `${key}` + '"]').next().length ==
                                0
                            ) {
                                $('[name="' + `${key}` + '"]').addClass(
                                    "is-invalid"
                                );
                                $('[name="' + `${key}` + '"]').after(
                                    '<div class="invalid-feedback">' +
                                        `${value}` +
                                        "</div>"
                                );
                            }
                        }
                    }
                    for (let i = 0; i < this.names.length; i++) {
                        if (
                            this.names[i] == "vehicle_id" ||
                            this.names[i] == "driver_id" ||
                            this.names[i] == "po_id"
                        ) {
                            if (keys.indexOf("" + this.names[i] + "") == -1) {
                                if (
                                    $("[name=" + this.names[i] + "]")
                                        .next()
                                        .next().length == 1
                                ) {
                                    $("[name=" + this.names[i] + "]")
                                        .next()
                                        .next(".invalid-feedback")
                                        .remove();
                                }
                            }
                        } else {
                            if (keys.indexOf("" + this.names[i] + "") == -1) {
                                $('[name="' + this.names[i] + '"]').removeClass(
                                    "is-invalid"
                                );
                                $('[name="' + this.names[i] + '"]')
                                    .next(".invalid-feedback")
                                    .remove();
                            }
                        }
                    }
                    this.$showToast(
                        values.toString().replace(/,/g, "</br>"),
                        "error"
                    );
                });
        },
        showEntry() {
            this.fuel_request_update = true;
            let vm = this;
            setTimeout(() => {
                $("#kt_select_particulars").select2({
                    placeholder: "Select a particulars",
                    allowClear: true
                });
                $("#kt_select_particulars").on("select2:select", function() {
                    vm.form_fields_update.particulars = $(this).val();
                });
            }, 100);
        },
        updateEntry() {
            axios
                .put(
                    BASE_URL +
                        "/tracking/fuelcharges/" +
                        this.form_fields_update.id,
                    this.form_fields_update
                )
                .then(res => {
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", res.data.message, "success");
                    this.$showToast(res.data.message, "success");
                    setTimeout(() => {
                        this.ini();
                        this.fuel_request_update = false;
                    }, 1000);
                })
                .catch(err => {
                    let data = err.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if (`${key}` == "particulars") {
                            if (
                                $("[name=" + `${key}` + "]")
                                    .next()
                                    .next().length == 0
                            ) {
                                $("[name=" + `${key}` + "]")
                                    .next()
                                    .after(
                                        '<div class="invalid-feedback d-block">' +
                                            `${value}` +
                                            "</div>"
                                    );
                            }
                        } else {
                            if (
                                $('[name="' + `${key}` + '"]').next().length ==
                                0
                            ) {
                                $('[name="' + `${key}` + '"]').addClass(
                                    "is-invalid"
                                );
                                $('[name="' + `${key}` + '"]').after(
                                    '<div class="invalid-feedback">' +
                                        `${value}` +
                                        "</div>"
                                );
                            }
                        }
                    }
                    for (let i = 0; i < this.update_names.length; i++) {
                        if (this.update_names[i] == "particulars") {
                            if (
                                keys.indexOf("" + this.update_names[i] + "") ==
                                -1
                            ) {
                                if (
                                    $("[name=" + this.update_names[i] + "]")
                                        .next()
                                        .next().length == 1
                                ) {
                                    $("[name=" + this.update_names[i] + "]")
                                        .next()
                                        .next(".invalid-feedback")
                                        .remove();
                                }
                            }
                        } else {
                            if (
                                keys.indexOf("" + this.update_names[i] + "") ==
                                -1
                            ) {
                                $(
                                    '[name="' + this.update_names[i] + '"]'
                                ).removeClass("is-invalid");
                                $('[name="' + this.update_names[i] + '"]')
                                    .next(".invalid-feedback")
                                    .remove();
                            }
                        }
                    }
                    this.$showToast(
                        values.toString().replace(/,/g, "</br>"),
                        "error"
                    );
                });
        },
        cancelEntry() {
            this.fuel_request = false;
            this.fuel_request_update = false;
            this.reset();
            this.ini();
        },
        reset() {
            this.form_fields.vehicle_id = "";
            this.form_fields.driver_id = "";
            this.form_fields.po_id = "";
            this.form_fields.purpose = "";
        }
    }
};
</script>
