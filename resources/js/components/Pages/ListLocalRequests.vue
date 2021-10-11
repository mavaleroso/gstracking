<template>
    <div id="local-requests-page">
        <!--begin::Card-->
        <div
            class="card card-custom gutter-b animate__animated animate__fadeIn"
        >
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                        <span
                            class="d-block text-muted pt-2 font-size-sm"
                        ></span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <router-link
                        :to="{ name: 'requestTravel' }"
                        class="btn btn-primary font-weight-bolder"
                    >
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
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
                                        cx="9"
                                        cy="15"
                                        r="6"
                                    />
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000"
                                        opacity="0.3"
                                    />
                                </g>
                            </svg>
                            <!--end::Svg Icon--> </span
                        >New Request</router-link
                    >
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table
                    class="table table-separate table-head-custom table-checkable"
                    id="request-tbl"
                >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Serial Code</th>
                            <th>Department</th>
                            <th>Purpose</th>
                            <th>Travel Date</th>
                            <th>Depart Time</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Request By</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <modal :status="status">
            <template v-slot:header>
                <h5 :class="request_status_lbl">{{ request_status }}</h5>
                <h5 class="modal-title">
                    <span class="m-title">{{ request_title }}</span>
                    <span class="d-block text-muted font-size-sm"
                        >Reference Code</span
                    >
                </h5>
                <h3 class="modal-date">
                    <span class="m-date">{{ dateTimeEng }}</span>
                    <span class="d-block text-muted font-size-sm"
                        >Date Created</span
                    >
                </h3>
                <button
                    v-if="status == 1"
                    @click="edit"
                    type="button"
                    :disabled="employeeStats"
                    :class="
                        employeeStats
                            ? 'btn-edit btn btn-sm btn-primary mr-7 spinner spinner-white spinner-right'
                            : 'btn-edit btn btn-sm btn-primary mr-7'
                    "
                >
                    <i class="la la-edit icon-md"></i>
                    <span>Edit</span>
                </button>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <form id="request-form" class="form">
                    <input
                        name="request_id"
                        type="hidden"
                        v-model="current_id"
                    />
                    <div class="card-body row">
                        <h5 class="col-lg-12 text-dark font-weight-bold mb-10">
                            Requestor Details:
                        </h5>
                        <div class="col-lg-12"><h5>Info:</h5></div>
                        <div class="col-lg-6">
                            <input
                                type="hidden"
                                name="division"
                                v-model="division"
                            />
                            <input
                                type="hidden"
                                name="section"
                                v-model="section"
                            />
                            <div class="form-group">
                                <label>Program/Division/Section</label>
                                <input
                                    name="prog_div_sec"
                                    type="text"
                                    class="form-control"
                                    disabled="disabled"
                                    v-model="request_dept"
                                />
                            </div>
                            <div class="form-group mt-n7">
                                <label>Date of Travel</label>
                                <input
                                    id="date-travel"
                                    type="date"
                                    name="date_travel"
                                    class="form-control details-input date-limit"
                                    disabled="disabled"
                                    :min="maxDate"
                                    v-model="request_travelDate"
                                />
                            </div>
                            <div class="form-group mt-n7">
                                <label>Time of Departure</label>
                                <input
                                    type="time"
                                    name="time_depart"
                                    class="form-control details-input"
                                    disabled="disabled"
                                    v-model="request_departTime"
                                />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Purpose of Travel</label>
                                <input
                                    type="text"
                                    name="pur_travel"
                                    class="form-control details-input"
                                    disabled="disabled"
                                    v-model="request_travelPurpose"
                                />

                                <label>Date of Return</label>
                                <input
                                    id="date-return"
                                    type="date"
                                    name="date_return"
                                    class="form-control details-input date-limit"
                                    disabled="disabled"
                                    :min="maxDate"
                                    v-model="request_returnDate"
                                />

                                <label>Place</label>
                                <input
                                    type="text"
                                    name="destination_place"
                                    class="form-control details-input"
                                    disabled="disabled"
                                    v-model="place"
                                />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="separator separator-dashed my-10"></div>
                            <div
                                :class="
                                    employeeStats ? 'overlay overlay-block' : ''
                                "
                            >
                                <div
                                    v-if="employeeStats"
                                    class="overlay-layer bg-dark-o-10"
                                >
                                    <div class="spinner spinner-primary"></div>
                                </div>
                                <div class="d-flex">
                                    <input
                                        id="pax-total"
                                        type="hidden"
                                        name="pax_total"
                                        v-model="passengers.length"
                                    />
                                    <h5
                                        class="text-dark font-weight-bold mb-10"
                                    >
                                        Employee Passenger Details:
                                    </h5>
                                    <div class="ml-auto" v-if="request_edit">
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            @click="addPassengerRow"
                                        >
                                            <i
                                                class="fa fa-plus-square p-0"
                                            ></i>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            @click="removePassengerRow"
                                        >
                                            <i
                                                class="fa fa-minus-square p-0"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <table id="passenger-tbl" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                #
                                            </th>
                                            <th scope="col" class="text-center">
                                                Name of Passenger/s
                                            </th>
                                            <th scope="col" class="text-center">
                                                Position/Designation
                                            </th>
                                            <th
                                                scope="col"
                                                class="text-center w-15"
                                            >
                                                Sex
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(pax, index) in passengers"
                                            :key="index"
                                        >
                                            <td scope="row" class="text-center">
                                                {{ paxIndex(index) }}
                                            </td>

                                            <td>
                                                <select
                                                    class="details-input form-control select2"
                                                    :id="
                                                        'passenger-select-' +
                                                            paxIndex(index)
                                                    "
                                                    :name="
                                                        'pax_name_' +
                                                            paxIndex(index)
                                                    "
                                                    :disabled="
                                                        !request_edit
                                                            ? true
                                                            : false
                                                    "
                                                    :value="pax.name"
                                                >
                                                    <option
                                                        label="Label"
                                                    ></option>
                                                    <option
                                                        v-for="(result,
                                                        index) in employees"
                                                        :key="index"
                                                        :value="
                                                            result.first_name +
                                                                ' ' +
                                                                result.middle_name +
                                                                ' ' +
                                                                result.last_name
                                                        "
                                                    >
                                                        {{ result.first_name }}
                                                        {{ result.middle_name }}
                                                        {{ result.last_name }}
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <input
                                                    :name="
                                                        'pax_des_' +
                                                            paxIndex(index)
                                                    "
                                                    :id="
                                                        'pax_des_' +
                                                            paxIndex(index)
                                                    "
                                                    class="form-control"
                                                    type="text"
                                                    :value="pax.designation"
                                                    readonly
                                                />
                                            </td>
                                            <td>
                                                <input
                                                    :name="
                                                        'pax_gen_' +
                                                            paxIndex(index)
                                                    "
                                                    class="form-control details-input"
                                                    type="text"
                                                    :value="pax.gender"
                                                    readonly
                                                />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr />
                                <div class="d-flex">
                                    <input
                                        id="ext-pax-total"
                                        type="hidden"
                                        name="ext_pax_total"
                                        v-model="ext_pax.length"
                                    />
                                    <h5
                                        class="text-dark font-weight-bold mb-10"
                                    >
                                        External Passenger Details:
                                    </h5>
                                    <div class="ml-auto" v-if="request_edit">
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            @click="addExtPassengerRow"
                                        >
                                            <i
                                                class="fa fa-plus-square p-0"
                                            ></i>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            @click="removeExtPassengerRow"
                                        >
                                            <i
                                                class="fa fa-minus-square p-0"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <table
                                    v-if="ext_pax.length"
                                    id="ext-passenger-tbl"
                                    class="table w-100"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                #
                                            </th>
                                            <th scope="col" class="text-center">
                                                Name of Passenger/s
                                            </th>
                                            <th scope="col" class="text-center">
                                                Position/Designation
                                            </th>
                                            <th
                                                scope="col"
                                                class="text-center w-15"
                                            >
                                                Sex
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(ext, index) in ext_pax"
                                            :key="index"
                                        >
                                            <td scope="row" class="text-center">
                                                {{ index + 1 }}
                                            </td>
                                            <td>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    v-model="ext.name"
                                                    :name="'ext_name_' + index"
                                                    :readonly="!request_edit"
                                                />
                                            </td>
                                            <td>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    v-model="ext.designation"
                                                    :name="
                                                        'ext_designation_' +
                                                            index
                                                    "
                                                    :readonly="!request_edit"
                                                />
                                            </td>
                                            <td>
                                                <select
                                                    class="form-control"
                                                    v-model="ext.gender"
                                                    :name="
                                                        'ext_gender_' + index
                                                    "
                                                    :disabled="!request_edit"
                                                >
                                                    <option value=""></option>
                                                    <option value="Male"
                                                        >Male</option
                                                    >
                                                    <option value="Female"
                                                        >Female</option
                                                    >
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </template>
            <template v-slot:footer v-if="request_edit">
                <button
                    type="button"
                    class="btn btn-sm btn-light-primary font-weight-bold text-uppercase"
                    data-dismiss="modal"
                >
                    Close
                </button>
                <button
                    @click="save(current_id)"
                    type="button"
                    class="btn btn-sm btn-primary font-weight-bold text-uppercase"
                >
                    Save
                </button>
            </template>
            <template v-slot:adminbody>
                <form id="administrative-form" class="form">
                    <div class="card-body row">
                        <h5 class="col-lg-12 text-dark font-weight-bold mb-10">
                            Administrative Fill-in:
                        </h5>
                        <div class="col-lg-12 row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <input
                                        id="request-id"
                                        type="hidden"
                                        name="id"
                                        v-model="staff.id"
                                    />
                                    <label>Type of Motor Vehicle</label>
                                    <div class="checkbox-inline">
                                        <label
                                            class="radio radio-solid mx-2"
                                            v-for="(v, index) in vehiclemodes"
                                            :key="index"
                                        >
                                            <input
                                                type="radio"
                                                name="radio_vehicle"
                                                class="radio-vehicle"
                                                :value="v.id"
                                                v-model="vehicle_type"
                                            />
                                            {{ v.name }}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div
                                    v-if="vehicle_type == 4"
                                    class="form-group"
                                >
                                    <label>Travel Po Number</label>
                                    <select
                                        name="travel_po"
                                        class="form-control select2 staff-required"
                                        id="travel_po-select"
                                    >
                                        <option label="Label"></option>
                                        <option
                                            v-for="po in procurements.filter(
                                                i => i.type == 1
                                            )"
                                            :key="po.id"
                                            :value="po.id"
                                        >
                                            {{ po.po_no }} - ₱
                                            {{
                                                po.totalBalance
                                                    ? $toParseNum(
                                                          po.totalBalance
                                                      )
                                                    : $toParseNum(po.po_amount)
                                            }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div v-if="vehicle_type == 1" class="col-lg-12 row">
                            <label class="h5 col-lg-12">{{
                                vehiclemodes.filter(
                                    i => i.id == vehicle_type
                                )[0].name
                            }}</label>
                            <div class="form-group mb-1 col-lg-12">
                                <label for="remarks">Remarks</label>
                                <textarea
                                    name="remarks"
                                    class="form-control w-100"
                                    id="remarks"
                                    rows="3"
                                ></textarea>
                            </div>
                        </div>
                        <div
                            v-if="vehicle_type == 3 || vehicle_type == 2"
                            class="col-lg-12 row"
                        >
                            <div class="col-lg-12 d-flex">
                                <input
                                    id="office-vehicle-total"
                                    type="hidden"
                                    name="rp_total"
                                    v-model="staff.office.total"
                                />
                                <label class="h5">{{
                                    vehiclemodes.filter(
                                        i => i.id == vehicle_type
                                    )[0].name
                                }}</label>
                                <div class="ml-auto">
                                    <button
                                        class="btn btn-sm btn-outline-primary"
                                        @click="incrementOfficeVehicle"
                                    >
                                        <i class="fa fa-plus-square p-0"></i>
                                    </button>
                                    <button
                                        class="btn btn-sm btn-outline-primary"
                                        @click="decrementOfficeVehicle"
                                    >
                                        <i class="fa fa-minus-square p-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table
                                    id="vehicle-office-tbl"
                                    class="table w-100"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                #
                                            </th>
                                            <th scope="col" class="text-center">
                                                Vehicle Name
                                            </th>
                                            <th scope="col" class="text-center">
                                                Driver
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="index in staff.office.total"
                                            :key="index"
                                        >
                                            <td scope="row" class="text-center">
                                                {{ index }}
                                            </td>
                                            <td>
                                                <select
                                                    class="form-control select2 staff-required"
                                                    :id="
                                                        'vehicle-select-' +
                                                            index
                                                    "
                                                    :name="'vehicle_' + index"
                                                >
                                                    <option
                                                        label="Label"
                                                    ></option>
                                                    <option
                                                        v-for="vehicle in vehicles"
                                                        :key="vehicle.id"
                                                        :value="vehicle.id"
                                                    >
                                                        {{ vehicle.name }} -
                                                        {{ vehicle.plate_no }}
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select
                                                    :name="'driver_' + index"
                                                    class="form-control select2 staff-required"
                                                    :id="
                                                        'driver-select-' + index
                                                    "
                                                >
                                                    <option
                                                        label="Label"
                                                    ></option>
                                                    <option
                                                        v-for="driver in drivers.filter(
                                                            i =>
                                                                i.status !=
                                                                    'unavailable' &&
                                                                i.travel_status !=
                                                                    'approved'
                                                        )"
                                                        :key="driver.id"
                                                        :value="driver.id"
                                                    >
                                                        {{ driver.fullname }}
                                                        ({{
                                                            driver.travel_status
                                                        }})
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div v-if="vehicle_type == 4" class="col-lg-12 row">
                            <div class="col-lg-12 d-flex">
                                <input
                                    id="rental-vehicle-total"
                                    type="hidden"
                                    name="hired_total"
                                    v-model="staff.rental.total"
                                />
                                <label class="h5">{{
                                    vehiclemodes.filter(
                                        i => i.id == vehicle_type
                                    )[0].name
                                }}</label>
                                <div class="ml-auto">
                                    <button
                                        class="btn btn-sm btn-outline-primary"
                                        @click="incrementRentalVehicle"
                                    >
                                        <i class="fa fa-plus-square p-0"></i>
                                    </button>
                                    <button
                                        class="btn btn-sm btn-outline-primary"
                                        @click="decrementRentalVehicle"
                                    >
                                        <i class="fa fa-minus-square p-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table
                                    id="vehicle-rental-tbl"
                                    class="table w-100"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                #
                                            </th>
                                            <th scope="col" class="text-center">
                                                Plate #
                                            </th>
                                            <th scope="col" class="text-center">
                                                Vehicle Name
                                            </th>
                                            <th scope="col" class="text-center">
                                                Driver Name
                                            </th>
                                            <th scope="col" class="text-center">
                                                Contact #
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="index in staff.rental.total"
                                            :key="index"
                                        >
                                            <td scope="row" class="text-center">
                                                {{ index }}
                                            </td>
                                            <td>
                                                <input
                                                    type="text"
                                                    :name="
                                                        'vehicle_plate_' + index
                                                    "
                                                    class="select-remove form-control"
                                                    placeholder="Enter vehicle plate no."
                                                />
                                            </td>
                                            <td>
                                                <input
                                                    type="text"
                                                    :name="
                                                        'vehicle_name_' + index
                                                    "
                                                    class="select-remove form-control"
                                                    placeholder="Enter vehicle name"
                                                />
                                            </td>
                                            <td>
                                                <input
                                                    :name="
                                                        'driver_name_' + index
                                                    "
                                                    type="text"
                                                    class="select-remove form-control"
                                                    placeholder="Enter driver name"
                                                />
                                            </td>
                                            <td>
                                                <input
                                                    :name="
                                                        'driver_contact_' +
                                                            index
                                                    "
                                                    type="text"
                                                    class="select-remove form-control"
                                                    placeholder="Enter driver contact no."
                                                />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </template>
            <template v-slot:adminfooter>
                <button
                    @click="declined"
                    type="button"
                    class="btn btn-sm btn-danger font-weight-bold text-uppercase mr-auto"
                >
                    Decline
                </button>
                <button
                    type="button"
                    class="btn btn-sm btn-light-primary font-weight-bold text-uppercase"
                    data-dismiss="modal"
                >
                    Close
                </button>
                <button
                    @click="approved"
                    type="button"
                    class="btn btn-sm btn-primary font-weight-bold text-uppercase"
                >
                    Approved
                </button>
            </template>
        </modal>
        <div
            class="modal fade"
            id="rejectRemarks"
            data-backdrop="static"
            tabindex="-1"
            role="dialog"
            aria-labelledby="staticBackdrop"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Remarks <small class="">Declined request</small>
                        </h3>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea
                            class="form-control"
                            name="declined_remarks"
                            id="declined"
                            rows="5"
                            v-model="remarks"
                        ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal"
                        >
                            Close
                        </button>
                        <button
                            @click="declinedRequest"
                            type="button"
                            class="btn btn-primary font-weight-bold"
                        >
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->
    </div>
</template>

<script>
import Modal from "../../components/Layouts/Modal";
export default {
    data() {
        return {
            vehicle_type: null,
            current_id: null,
            status: null,
            request_status: null,
            request_status_lbl: null,
            request_title: null,
            request_createdAt: null,
            request_vehicle: null,
            request_travelPurpose: null,
            request_travelDate: null,
            request_returnDate: null,
            request_departTime: null,
            request_dept: null,
            division: null,
            section: null,
            brgys: [],
            place: null,
            destinations: [],
            passengers: [],
            request_edit: 0,
            dateTimeEng: null,
            vehicles: [],
            procurements: [],
            drivers: [],
            maxDate: null,
            vehiclemodes: [],
            staff: {
                id: null,
                office: {
                    total: 1,
                    data: []
                },
                rental: {
                    total: 1,
                    data: []
                }
            },
            names: [
                "travel_radio",
                "date_travel",
                "pax_des_1",
                "pax_name_1",
                "pax_gen_1",
                "prog_div_sec",
                "pur_travel",
                "time_depart"
            ],
            defaultNames: [],
            rpNames: ["vehicle_1", "driver_1"],
            hiredNames: [
                "travel_po",
                "vehicle_name_1",
                "vehicle_plate_1",
                "driver_name_1",
                "driver_contact_1"
            ],
            remarks: null,
            employees: [],
            pax_des: [],
            pax_gen: [],
            ext_pax: [],
            extNames: []
        };
    },
    components: {
        Modal
    },
    created() {
        this.getVehicle();
        this.getPo();
        this.getVehiclemode();
    },
    mounted() {
        this.ini();
    },
    computed: {
        employeeStats() {
            this.employees = this.$store.getters["employees/employee"];
            return this.$store.getters["employees/loadingStats"];
        }
    },
    methods: {
        ini() {
            let vm = this;
            $(() => {
                this.tdatatable().init();

                $(".menu-item").removeClass("menu-item-active");
                $(".router-link-active")
                    .parent()
                    .addClass("menu-item-active");

                $("#kt_datatable_modal").on("hidden.bs.modal", function(e) {
                    $(".details-input").attr("disabled", true);
                    vm.request_edit = 0;
                    $(".btn-edit span").text("Edit");
                });
            });
        },
        tdatatable() {
            let vm = this;
            var initTable = () => {
                var table = $("#request-tbl");
                table.DataTable({
                    scrollY: "50vh",
                    scrollX: true,
                    scrollCollapse: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: BASE_URL + "/travel/localrequest",
                        type: "GET"
                    },
                    columns: [
                        { data: "id" },
                        { data: "serial_code" },
                        { data: "department" },
                        { data: "purpose" },
                        { data: "travel_date" },
                        { data: "depart_time" },
                        { data: "is_status" },
                        { data: "created_at" },
                        { data: "fullname" },
                        { data: "remarks" },
                        { data: "id" }
                    ],
                    columnDefs: [
                        {
                            targets: 1,
                            render: data => {
                                return (
                                    '<span class="label label-outline-primary label-inline font-weight bold h-auto p-2">' +
                                    data +
                                    "</span>"
                                );
                            }
                        },
                        {
                            targets: 4,
                            render: data => {
                                return this.$dateEng(data);
                            }
                        },
                        {
                            targets: 5,
                            render: data => {
                                return this.$timeEng(data);
                            }
                        },
                        {
                            targets: 6,
                            render: data => {
                                var status = {
                                    1: {
                                        title: "Pending",
                                        class: " label-light-warning"
                                    },
                                    2: {
                                        title: "Approved",
                                        class: " label-light-primary"
                                    },
                                    3: {
                                        title: "Completed",
                                        class: " label-light-success"
                                    },
                                    4: {
                                        title: "Declined",
                                        class: " label-light-danger"
                                    }
                                };
                                return (
                                    '<span class="btn-details label label-lg font-weight-bold ' +
                                    status[data].class +
                                    ' label-inline">' +
                                    status[data].title +
                                    "</span>"
                                );
                            }
                        },
                        {
                            targets: 7,
                            render: data => {
                                return this.$dateTimeEng(data);
                            }
                        },
                        {
                            targets: -1,
                            sortable: false,
                            render: data => {
                                return (
                                    '<button data-record-id="' +
                                    data +
                                    '" class="btn btn-sm btn-clean btn-details" title="View records">\
                                            <i class="flaticon2-document"></i> \
                                        </button>' +
                                    '<a href="print_request?id=' +
                                    data +
                                    '&type=local" target="_blank"><button class="btn btn-sm btn-clean btn-details" title="View records">\
                                            <i class="flaticon2-printer"></i> \
                                        </button></a>'
                                );
                            }
                        }
                    ],
                    drawCallback: () => {
                        $(".btn-details")
                            .off()
                            .on("click", function() {
                                let id = $(this).data("record-id");
                                vm.current_id = id;
                                vm.staff.id = id;
                                vm.show(id);
                            });
                    }
                });
            };
            return {
                init: function() {
                    initTable();
                }
            };
        },
        show(id, app = null) {
            let vm = this;
            axios
                .get(BASE_URL + "/travel/localrequest/" + id)
                .then(response => {
                    switch (response.data[0].is_status) {
                        case 1:
                            vm.request_status = "Pending";
                            vm.request_status_lbl =
                                "modal-status label label-warning label-inline mr-5";
                            break;
                        case 2:
                            vm.request_status = "Approved";
                            vm.request_status_lbl =
                                "modal-status label label-primary label-inline mr-5";
                            break;
                        case 3:
                            vm.request_status = "Completed";
                            vm.request_status_lbl =
                                "modal-status label label-success label-inline mr-5";
                            break;
                        case 4:
                            vm.request_status = "Declined";
                            vm.request_status_lbl =
                                "modal-status label label-danger label-inline mr-5";
                            break;
                    }
                    vm.request_title = response.data[0].serial_code;
                    vm.request_createdAt = response.data[0].created_at;
                    vm.request_vehicle = response.data[0].type_vehicle;
                    vm.request_travelPurpose = response.data[0].purpose;
                    vm.request_travelDate = response.data[0].travel_date;
                    vm.request_returnDate = response.data[0].return_date;
                    vm.request_departTime = response.data[0].depart_time;
                    vm.request_dept = response.data[0].department;
                    vm.status = response.data[0].is_status;
                    vm.division = response.data[0].division_code;
                    vm.section = response.data[0].section_code;
                    vm.place = response.data[0].destination;
                    vm.dateTimeEng = this.$dateTimeEng(
                        response.data[0].created_at
                    );
                    vm.getPassengers(vm.current_id);
                    vm.getDriver();
                    !app ? $("#kt_datatable_modal").modal("show") : NULL;

                    setTimeout(() => {
                        let count = this.passengers.length;
                        $(".radio-vehicle").change(function() {
                            vm.staff.office.total = vm.staff.rental.total = 1;
                            if (vm.vehicle_type == 3 || vm.vehicle_type == 2) {
                                $("#vehicle-select-1").select2({
                                    placeholder: "Select a vehicle"
                                });

                                $("#driver-select-1").select2({
                                    placeholder: "Select a driver"
                                });
                            } else {
                                vm.rpNames = ["vehicle_1", "driver_1"];
                            }

                            if (vm.vehicle_type == 4) {
                                $("#travel_po-select").select2({
                                    placeholder: "Select a Travel PO"
                                });

                                $(".select-remove")
                                    .siblings(".select2")
                                    .remove();
                                $(".select-remove")
                                    .siblings(".select2")
                                    .remove();
                            } else {
                                vm.hiredNames = [
                                    "po",
                                    "vehicle_name_1",
                                    "vehicle_plate_1",
                                    "driver_name_1",
                                    "driver_contact_1"
                                ];
                            }
                        });

                        $(".radio-vehicle").on("change", () => {
                            $(".invalid-feedback-admin").remove();
                            $(".invalid-admin").removeClass("is-invalid");
                        });

                        for (let i = 1; i <= count; i++) {
                            $("#passenger-select-" + i).on(
                                "select2:select",
                                function(e) {
                                    let paxVal = $(
                                        `#passenger-select-${i} option:selected`
                                    ).index();
                                    paxVal = paxVal - 1;
                                    vm.getData(paxVal, i);
                                    let fullname =
                                        vm.employees[paxVal].first_name +
                                        " " +
                                        vm.employees[paxVal].middle_name +
                                        " " +
                                        vm.employees[paxVal].last_name;
                                    let data = {
                                        created_at: null,
                                        designation:
                                            vm.employees[paxVal].position,
                                        gender: vm.employees[paxVal].gender,
                                        id: 1,
                                        name: fullname,
                                        request_id: 1,
                                        updated_at: null
                                    };
                                    vm.passengers[i - 1] = data;
                                }
                            );

                            $(`#passenger-select-${i}`).on(
                                "select2:clear",
                                function(e) {
                                    let data = {
                                        created_at: null,
                                        designation: null,
                                        gender: null,
                                        id: null,
                                        name: null,
                                        request_id: null,
                                        updated_at: null
                                    };
                                    vm.passengers[i - 1] = data;
                                    $(`[name="pax_gen_${i}"]`).val(null);
                                    $(`[name="pax_des_${i}"]`).val(null);
                                }
                            );
                        }
                    }, 500);
                });
        },
        getData(id, index) {
            let vm = this;
            this.pax_des[index - 1] = vm.employees[id].position;
            this.pax_gen[index - 1] = vm.employees[id].gender;
            $(`[name="pax_gen_${index}"]`).val(vm.employees[id].gender);
            $(`[name="pax_des_${index}"]`).val(vm.employees[id].position);
        },
        getPassengers(id) {
            this.passengers = [];
            this.ext_pax = [];
            axios.get(BASE_URL + "/api/v1/passenger/" + id).then(response => {
                for (let i = 0; i < response.data.length; i++) {
                    if (response.data[i].type == 1) {
                        this.passengers.push(response.data[i]);
                    } else if (response.data[i].type == 2) {
                        this.ext_pax.push(response.data[i]);
                    }
                }
            });
        },
        paxIndex(index) {
            return index + 1;
        },
        edit() {
            let count = this.passengers.length;
            for (let i = 0; i <= count; i++) {
                $(`#passenger-select-${i}`).select2({
                    placeholder: "Select a fullname",
                    allowClear: true
                });
            }
            let btn_edit = $(".btn-edit span");
            if (btn_edit.text() == "Edit") {
                btn_edit.text("Cancel");
                $(".details-input").attr("disabled", false);
                this.request_edit = 1;
                this.$showToast("Can edit request now!", "info");
            } else {
                btn_edit.text("Edit");
                $(".details-input").attr("disabled", true);
                this.request_edit = 0;
                this.$showToast("Canceled edit request now!", "info");
            }
        },
        save(id) {
            let requestform = $("#request-form").serialize();
            axios
                .put(BASE_URL + "/travel/localrequest/" + id, requestform)
                .then(response => {
                    $(".new-row").remove();
                    $(".details-input").attr("disabled", true);
                    this.request_edit = 0;
                    $(".btn-edit span").text("Edit");
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    $("#request-tbl")
                        .DataTable()
                        .ajax.reload();
                    this.getPassengers(this.current_id);
                })
                .catch(error => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if (
                            $('[name="' + `${key}` + '"]').next().length == 0 ||
                            $('[name="' + `${key}` + '"]')
                                .next()
                                .attr("class")
                                .search("invalid-feedback") == -1
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
                    for (let i = 0; i < this.names.length; i++) {
                        if (keys.indexOf("" + this.names[i] + "") == -1) {
                            $(
                                'input[name="' + this.names[i] + '"]'
                            ).removeClass("is-invalid");
                            $('[name="' + this.names[i] + '"]')
                                .next(".invalid-feedback")
                                .remove();
                        }
                    }
                    for (let j = 0; j < this.extNames.length; j++) {
                        if (keys.indexOf("" + this.extNames[j] + "") == -1) {
                            $('[name="' + this.extNames[j] + '"]').removeClass(
                                "is-invalid"
                            );
                            $('[name="' + this.extNames[j] + '"]')
                                .next(".invalid-feedback")
                                .remove();
                        }
                    }
                    this.$showToast(
                        values.toString().replace(/,/g, "</br>"),
                        "error"
                    );
                });
        },
        approved() {
            let adminForm = $("#administrative-form").serialize();
            axios
                .post(BASE_URL + "/travel/listrequeststaff", adminForm)
                .then(response => {
                    $(".invalid-feedback-admin").remove();
                    $(".invalid-admin").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    $("#request-tbl")
                        .DataTable()
                        .ajax.reload();
                    setTimeout(() => {
                        this.show(this.current_id, 1);
                    }, 1000);
                })
                .catch(error => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        let _keys = `${key}`.replace(/[0-9]/g, "");
                        if (`${key}` == "radio_vehicle") {
                            if (
                                $(".checkbox-inline").next().length == 0 ||
                                $(".checkbox-inline")
                                    .next()
                                    .attr("class")
                                    .search("invalid-feedback") == -1
                            ) {
                                $(".checkbox-inline").after(
                                    '<div class="invalid-feedback invalid-feedback-admin d-block">' +
                                        `${value}` +
                                        "</div>"
                                );
                            }
                        } else if (`${key}` == "travel_po") {
                            if (
                                $("#" + `${key}` + "-select")
                                    .next()
                                    .next().length == 0
                            ) {
                                $("#" + `${key}` + "-select")
                                    .next()
                                    .after(
                                        '<div class="invalid-feedback invalid-feedback-admin d-block">' +
                                            `${value}` +
                                            "</div>"
                                    );
                            }
                        } else if (
                            _keys == "driver_name_" ||
                            _keys == "driver_contact_" ||
                            _keys == "vehicle_name_" ||
                            _keys == "vehicle_plate_" ||
                            `${key}` == "remarks"
                        ) {
                            if (
                                $('[name="' + `${key}` + '"]').next().length ==
                                    0 ||
                                $('[name="' + `${key}` + '"]')
                                    .next()
                                    .attr("class")
                                    .search("invalid-feedback") == -1
                            ) {
                                $('[name="' + `${key}` + '"]').addClass(
                                    "is-invalid"
                                );
                                $('[name="' + `${key}` + '"]').after(
                                    '<div class="invalid-feedback invalid-feedback-admin">' +
                                        `${value}` +
                                        "</div>"
                                );
                            }
                        } else {
                            if (
                                $('[name="' + `${key}` + '"]')
                                    .next()
                                    .next().length == 0
                            ) {
                                $('[name="' + `${key}` + '"]')
                                    .next()
                                    .after(
                                        '<div class="invalid-feedback invalid-feedback-admin d-block">' +
                                            `${value}` +
                                            "</div>"
                                    );
                            }
                        }
                    }

                    for (let i = 0; i < this.defaultNames.length; i++) {
                        if (
                            this.defaultNames[i] == "vehicle_office" ||
                            this.defaultNames[i] == "vehicle_rental"
                        ) {
                            if (
                                keys.indexOf("" + this.defaultNames[i] + "") ==
                                -1
                            ) {
                                if ($(".radio-inline").next().length != 0) {
                                    $(".radio-inline")
                                        .next(".invalid-feedback")
                                        .remove();
                                }
                            }
                        }
                    }
                    for (let i = 0; i < this.hiredNames.length; i++) {
                        if (this.hiredNames[i] == "travel_po") {
                            if (
                                keys.indexOf("" + this.hiredNames[i] + "") == -1
                            ) {
                                if (
                                    $("#" + this.hiredNames[i] + "-select")
                                        .next()
                                        .next().length != 0
                                ) {
                                    $("#" + this.hiredNames[i] + "-select")
                                        .next()
                                        .next(".invalid-feedback")
                                        .remove();
                                }
                            }
                        } else {
                            if (
                                keys.indexOf("" + this.hiredNames[i] + "") == -1
                            ) {
                                $(
                                    '[name="' + this.hiredNames[i] + '"]'
                                ).removeClass("is-invalid");
                                $('[name="' + this.hiredNames[i] + '"]')
                                    .next(".invalid-feedback")
                                    .remove();
                            }
                        }
                    }
                    for (let i = 0; i < this.rpNames.length; i++) {
                        if (keys.indexOf("" + this.rpNames[i] + "") == -1) {
                            if (
                                $('[name="' + this.rpNames[i] + '"]')
                                    .next()
                                    .next().length != 0
                            ) {
                                $('[name="' + this.rpNames[i] + '"]')
                                    .next()
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
        addPassengerRow(event) {
            event.preventDefault();
            let vm = this;
            let ndata = {
                created_at: null,
                designation: null,
                gender: null,
                id: null,
                name: null,
                request_id: null,
                updated_at: null
            };
            vm.passengers.push(ndata);
            let count = vm.passengers.length;

            setTimeout(() => {
                $(`#passenger-select-${count}`).select2({
                    placeholder: "Select a fullname",
                    allowClear: true
                });
                for (let i = 1; i <= count; i++) {
                    $("#passenger-select-" + i).on("select2:select", function(
                        e
                    ) {
                        let paxVal = $(
                            `#passenger-select-${i} option:selected`
                        ).index();
                        paxVal = paxVal - 1;
                        vm.getData(paxVal, i);
                        let fullname =
                            vm.employees[paxVal].first_name +
                            " " +
                            vm.employees[paxVal].middle_name +
                            " " +
                            vm.employees[paxVal].last_name;
                        let data = {
                            created_at: null,
                            designation: vm.employees[paxVal].position,
                            gender: vm.employees[paxVal].gender,
                            id: 1,
                            name: fullname,
                            request_id: 1,
                            updated_at: null
                        };
                        vm.passengers[i - 1] = data;

                        $(`#passenger-select-${i}`).on(
                            "select2:clear",
                            function(e) {
                                let data = {
                                    created_at: null,
                                    designation: null,
                                    gender: null,
                                    id: null,
                                    name: null,
                                    request_id: null,
                                    updated_at: null
                                };
                                vm.passengers[i - 1] = data;
                                $(`[name="pax_gen_${i}"]`).val(null);
                                $(`[name="pax_des_${i}"]`).val(null);
                            }
                        );
                    });
                }
            }, 100);
        },
        removePassengerRow(event) {
            event.preventDefault();
            let lastTr = $("#passenger-tbl tbody tr:eq(-1)");
            let count = this.passengers.length;
            if (lastTr.find("td:eq(0)").text() != "1") {
                let aliasNames = this.names;
                let paxName = aliasNames.indexOf(
                    "pax_name_" + lastTr.find("td:eq(0)").text()
                );
                let paxDes = aliasNames.indexOf(
                    "pax_des_" + lastTr.find("td:eq(0)").text()
                );
                let paxSex = aliasNames.indexOf(
                    "pax_gen_" + lastTr.find("td:eq(0)").text()
                );
                if (paxName > -1) {
                    aliasNames.splice(paxName, 1);
                }
                if (paxDes > -1) {
                    aliasNames.splice(paxDes, 1);
                }
                if (paxSex > -1) {
                    aliasNames.splice(paxSex, 1);
                }
                this.names = aliasNames;
                lastTr.remove();
                var parsedobj_passenger = JSON.parse(
                    JSON.stringify(this.passengers)
                );
                parsedobj_passenger.splice(count - 1, 1);
                this.passengers = parsedobj_passenger;
            }
            $("#pax-total").val(
                parseInt($("#passenger-tbl tbody tr:eq(-1) td:eq(0)").text())
            );
        },
        addExtPassengerRow(event) {
            event.preventDefault();
            this.ext_pax.push({ name: null, designation: null, gender: null });
            this.extNames.push("ext_name_" + (this.ext_pax.length - 1));
            this.extNames.push("ext_designation_" + (this.ext_pax.length - 1));
            this.extNames.push("ext_gender_" + (this.ext_pax.length - 1));
        },
        removeExtPassengerRow(event) {
            event.preventDefault();
            this.ext_pax.pop();
            this.extNames.pop();
            this.extNames.pop();
            this.extNames.pop();
        },
        incrementOfficeVehicle(event) {
            event.preventDefault();
            let vm = this;
            let count = (this.staff.office.total += 1);
            setTimeout(() => {
                $(`#vehicle-select-${count}`).select2({
                    placeholder: "Select a vehicle"
                });

                $(`#driver-select-${count}`).select2({
                    placeholder: "Select a driver"
                });
            }, 100);

            this.rpNames.push(`vehicle_${count}`);
            this.rpNames.push(`driver_${count}`);
        },
        decrementOfficeVehicle(event) {
            event.preventDefault();
            if (this.staff.office.total != 1) {
                this.rpNames.pop();
                this.rpNames.pop();

                this.staff.office.total -= 1;
            }
        },
        incrementRentalVehicle(event) {
            event.preventDefault();
            let count = (this.staff.rental.total += 1);
            this.hiredNames.push("vehicle_name_" + count);
            this.hiredNames.push("vehicle_plate_" + count);
            this.hiredNames.push("driver_name_" + count);
            this.hiredNames.push("driver_contact_" + count);
        },
        decrementRentalVehicle(event) {
            event.preventDefault();
            if (this.staff.rental.total != 1) {
                this.hiredNames.pop();
                this.hiredNames.pop();
                this.hiredNames.pop();
                this.hiredNames.pop();

                this.staff.rental.total -= 1;
            }
        },
        getVehicle() {
            axios.get(BASE_URL + "/api/v1/vehicle").then(response => {
                this.vehicles = response.data;
            });
        },
        getPo() {
            axios.get(BASE_URL + "/api/v1/po").then(response => {
                this.procurements = response.data;
            });
        },
        getDriver() {
            axios
                .get(
                    BASE_URL +
                        "/api/v1/driver?date_from=" +
                        this.request_travelDate +
                        "&date_to=" +
                        this.request_returnDate
                )
                .then(response => {
                    this.drivers = response.data;
                });
        },
        declined() {
            this.remarks = "";
            $(".invalid-feedback").remove();
            $(".is-invalid").removeClass("is-invalid");
            $("#kt_datatable_modal").modal("toggle");
            $("#rejectRemarks").modal("show");
        },
        declinedRequest() {
            axios
                .post(BASE_URL + "/travel/listrequeststaff/declined", {
                    id: this.current_id,
                    remarks: this.remarks
                })
                .then(response => {
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    $("#rejectRemarks").modal("toggle");
                    $("#request-tbl")
                        .DataTable()
                        .ajax.reload();
                })
                .catch(error => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if (
                            $('[name="declined_' + `${key}` + '"]').next()
                                .length == 0 ||
                            $('[name="remarks_' + `${key}` + '"]')
                                .next()
                                .attr("class")
                                .search("invalid-feedback") == -1
                        ) {
                            $('[name="declined_' + `${key}` + '"]').addClass(
                                "is-invalid"
                            );
                            $('[name="declined_' + `${key}` + '"]').after(
                                '<div class="invalid-feedback">' +
                                    `${value}` +
                                    "</div>"
                            );
                        }
                    }
                });
        },
        dateConf() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10) month = "0" + month.toString();
            if (day < 10) day = "0" + day.toString();

            var maxDate = year + "-" + month + "-" + day;

            this.maxDate = maxDate;
        },
        getVehiclemode() {
            setTimeout(() => {
                this.vehiclemodes = this.$store.getters["mot/mot"];
            }, 3000);
        }
    }
};
</script>
