<template>
    <div id="list-travel-page" class="h-100 w-100">
        <div class="card card-custom card-stretch" id="kt_page_stretched_card">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title"></div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a
                        href="#"
                        class="btn btn-primary font-weight-bolder"
                        @click="dialog()"
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
                        >Advance Filter</a
                    >
                    <!--end::Button-->
                </div>
            </div>
            <div
                :class="
                    loading ? 'card-body overlay overlay-block' : 'card-body'
                "
            >
                <div v-if="loading" class="overlay-layer bg-dark-o-10">
                    <div class="spinner spinner-primary"></div>
                </div>
                <table
                    class="table table-responsive card-scroll"
                    id="list-travel-tbl"
                >
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Group</th>
                            <th class="text-center">Tracking No.</th>
                            <th class="text-center">Trip Ticket</th>
                            <th class="text-center">Vehicle Type</th>
                            <th class="text-center">Plate No</th>
                            <th class="text-center">Destination</th>
                            <th class="text-center">Purpose</th>
                            <th class="text-center">Date of Travel</th>
                            <th class="text-center">Date of Return</th>
                            <th class="text-center">Starting ODO</th>
                            <th class="text-center">Ending ODO</th>
                            <th class="text-center">
                                Date Submitted to Procurement
                            </th>
                            <th class="text-center">Distance Travelled</th>
                            <th class="text-center">PO Number</th>
                            <th class="text-center">PO Amount</th>
                            <th class="text-center">Rate per Km</th>
                            <th class="text-center">Fuel Charge</th>
                            <th class="text-center">Flat Rate</th>
                            <th class="text-center">Rate per night</th>
                            <th class="text-center">No. of Nights</th>
                            <th class="text-center">Total Cost</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Remarks</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(t, index) in travels"
                            :key="index"
                            :style="
                                t.results.group % 2
                                    ? 'background:' + row_color
                                    : null
                            "
                        >
                            <td>
                                <span class="mx-1">{{
                                    indexers(index + 1)
                                }}</span>
                            </td>
                            <td>
                                {{ t.results.type }}
                            </td>
                            <td>
                                {{ t.results.group }}
                            </td>
                            <td>
                                <span
                                    v-for="track in t.tracking_no"
                                    :key="track.id"
                                    class="label label-lg label-inline label-primary m-1 text-nowrap"
                                    >{{ track.tracking_no }}</span
                                >
                            </td>
                            <td>
                                <span
                                    class="label label-lg label-inline label-light-primary text-nowrap"
                                    >{{ t.results.trip_ticket }}</span
                                >
                            </td>
                            <td
                                v-for="vm in vehiclemodes.filter(
                                    i => i.id == t.results.vehicle_type
                                )"
                                :key="vm.id"
                            >
                                {{ vm.name }}
                            </td>
                            <td>{{ t.results.plate_no }}</td>
                            <td>
                                <span
                                    v-for="track in t.tracking_no"
                                    :key="track.id"
                                    class="label label-inline label-light-primary m-1 h-auto"
                                    >{{ track.place }}</span
                                >
                            </td>
                            <td>
                                <span
                                    v-for="track in t.tracking_no"
                                    :key="track.id"
                                    class="label label-inline label-light-primary m-1 h-auto"
                                    >{{ track.purpose }}</span
                                >
                            </td>
                            <td>
                                <span
                                    v-for="track in t.tracking_no"
                                    :key="track.id"
                                    class="label label-inline label-light-primary m-1 h-auto"
                                    >{{ dateEng(track.inclusive_from) }}</span
                                >
                            </td>
                            <td>
                                <span
                                    v-for="track in t.tracking_no"
                                    :key="track.id"
                                    class="label label-inline label-light-primary m-1 h-auto"
                                    >{{ dateEng(track.inclusive_to) }}</span
                                >
                            </td>
                            <td>{{ t.results.starting_odo }}</td>
                            <td>{{ t.results.ending_odo }}</td>
                            <td>
                                {{
                                    t.results.date_submit_proc
                                        ? dateEng(t.results.date_submit_proc)
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.travelled
                                        ? t.results.travelled + " KM"
                                        : ""
                                }}
                            </td>
                            <td>
                                <span
                                    v-if="t.results.po_no"
                                    class="label label-inline label-light-primary m-1 text-nowrap"
                                    >{{ t.results.po_no }}</span
                                >
                            </td>
                            <td>
                                {{
                                    t.results.po_amount
                                        ? $toParseNum(t.results.po_amount)
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.rate_per_km
                                        ? t.results.rate_per_km
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.rate_per_km
                                        ? t.results.rate_per_km
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.flat_rate
                                        ? t.results.flat_rate
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.rate_per_night
                                        ? t.results.rate_per_night
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.nights_count
                                        ? t.results.nights_count
                                        : ""
                                }}
                            </td>
                            <td>
                                {{
                                    t.results.total_cost
                                        ? $toParseNum(t.results.total_cost)
                                        : ""
                                }}
                            </td>
                            <td
                                v-html="
                                    $chkStatus(
                                        t.results.status == 2
                                            ? 'Approved'
                                            : 'Completed'
                                    )
                                "
                            ></td>
                            <td>{{ t.results.remarks }}</td>
                            <td>{{ dateEng(t.results.created_at, 1) }}</td>
                            <td>
                                <div class="d-flex">
                                    <a
                                        href="javascript:;"
                                        @click="show(t.results.id)"
                                        class="btn-edit btn btn-sm btn-clean btn-icon"
                                        title="Edit details"
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
                                                    <rect
                                                        x="0"
                                                        y="0"
                                                        width="24"
                                                        height="24"
                                                    />
                                                    <path
                                                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                        fill="#000000"
                                                        fill-rule="nonzero"
                                                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "
                                                    />
                                                    <rect
                                                        fill="#000000"
                                                        opacity="0.3"
                                                        x="5"
                                                        y="20"
                                                        width="15"
                                                        height="2"
                                                        rx="1"
                                                    />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                    <a
                                        :href="
                                            'print_trip_ticket?id=' +
                                                t.results.id
                                        "
                                        target="_blank"
                                        class="btn btn-sm btn-clean btn-icon"
                                        title="Print Trip Ticket"
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
                                                    <rect
                                                        x="0"
                                                        y="0"
                                                        width="24"
                                                        height="24"
                                                    />
                                                    <path
                                                        d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z"
                                                        fill="#000000"
                                                    />
                                                    <rect
                                                        fill="#000000"
                                                        opacity="0.3"
                                                        x="8"
                                                        y="2"
                                                        width="8"
                                                        height="2"
                                                        rx="1"
                                                    />
                                                </g></svg
                                        ></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <!--begin::Pagination-->
                <div
                    class="d-flex justify-content-between align-items-center flex-wrap"
                >
                    <div class="d-flex flex-wrap py-2 mr-3">
                        <a
                            href="#"
                            :class="
                                loading || this.pages.currentPage < 2
                                    ? 'btn btn-icon btn-sm btn-light mr-2 my-1 disabled'
                                    : 'btn btn-icon btn-sm btn-light mr-2 my-1'
                            "
                            @click="pageSet('prev')"
                            ><i class="ki ki-bold-arrow-back icon-xs"></i
                        ></a>

                        <a
                            v-if="pages.currentPage > 3"
                            href="#"
                            class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"
                            >...</a
                        >
                        <a
                            v-for="p in pagination"
                            :key="p"
                            href="#"
                            :class="
                                loading
                                    ? 'btn btn-icon btn-sm border-0 btn-light mr-2 my-1 disabled'
                                    : p == pages.currentPage
                                    ? 'btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1'
                                    : 'btn btn-icon btn-sm border-0 btn-light mr-2 my-1'
                            "
                            @click="pageSet('jump', p)"
                            :disabled="loading"
                            >{{ p }}</a
                        >
                        <a
                            v-if="
                                pages.currentPage != pages.totalPages &&
                                    pages.currentPage != pages.totalPages - 1 &&
                                    pages.currentPage != pages.totalPages - 2
                            "
                            href="#"
                            class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"
                            >...</a
                        >

                        <a
                            href="#"
                            :class="
                                loading ||
                                this.pages.currentPage == this.pages.totalPages
                                    ? 'btn btn-icon btn-sm btn-light mr-2 my-1 disabled'
                                    : 'btn btn-icon btn-sm btn-light mr-2 my-1'
                            "
                            @click="pageSet('next')"
                            ><i class="ki ki-bold-arrow-next icon-xs"></i
                        ></a>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div v-if="loading" class="d-flex align-items-center">
                            <div class="mr-2 text-muted">Loading...</div>
                            <div class="spinner mr-10"></div>
                        </div>
                        <span class="text-muted"
                            >Displaying {{ travels.length }} of
                            {{ total }} records</span
                        >
                    </div>
                </div>
                <!--end:: Pagination-->
            </div>
        </div>
        <modal>
            <template v-slot:header>
                <h5 id="modal-status" :class="status_class">{{ status }}</h5>
                <h5 class="modal-title">
                    <span class="m-title">{{ trip_ticket }}</span>
                    <span class="d-block text-muted font-size-sm"
                        >Trip Ticket</span
                    >
                </h5>
                <h5
                    :class="
                        finalStatus != 3
                            ? 'modal-title ml-auto'
                            : 'modal-title ml-auto d-none'
                    "
                >
                    <span
                        class="switch switch-outline switch-icon switch-success"
                    >
                        <label>
                            <input
                                id="is-completed"
                                type="checkbox"
                                checked="checked"
                                name="select"
                            />
                            <span class="ml-2 mb-n-10"></span>
                        </label>
                    </span>
                    <span class="d-block text-muted font-size-sm"
                        >Completed</span
                    >
                </h5>
                <h3 class="modal-date">
                    <span class="m-date">{{ created_at }}</span>
                    <span class="d-block text-muted font-size-sm"
                        >Date Created</span
                    >
                </h3>
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
                <form class="form">
                    <div class="card-body row pt-0">
                        <div class="col-lg-12 mb-3">
                            <h3
                                v-for="vm in vehiclemodes.filter(
                                    i => i.id == formFields.vehicle_type
                                )"
                                :key="vm.id"
                            >
                                {{ vm.name }}
                            </h3>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div
                                    class="col-lg-6"
                                    v-if="
                                        (formFields.vehicle_type == 2 ||
                                            formFields.vehicle_type == 3) &&
                                            vehicle_image
                                    "
                                >
                                    <div class="form-group">
                                        <p>Image:</p>
                                        <a
                                            class="vehicle-img-viewer"
                                            :href="
                                                vehicle_image
                                                    ? '/storage/images/' +
                                                      vehicle_image
                                                    : '/storage/images/vehicle-photo-default.jpg'
                                            "
                                        >
                                            <img
                                                v-if="vehicle_image != null"
                                                class="travel-vehicle-img img-fluid img-thumbnail"
                                                :src="
                                                    '/storage/images/' +
                                                        vehicle_image
                                                "
                                                alt=""
                                            />
                                            <img
                                                v-else
                                                class="travel-vehicle-img img-fluid img-thumbnail"
                                                src="/storage/images/vehicle-photo-default.jpg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-12"
                                    v-if="formFields.vehicle_type == 4"
                                >
                                    <div
                                        class="form-group d-flex jumbotron-mini"
                                    >
                                        <h4 class="ml-5 mt-3">Total Cost:</h4>
                                        <h2 class="ml-auto mt-2 mr-5">
                                            {{ totalCost }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Vehicle Plate</label>
                            <input
                                type="text"
                                name="vehicle_plate"
                                id="vehicle_plate"
                                v-model="formFields.plate_no"
                                class="form-control"
                                disabled="disabled"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Vehicle Name</label>
                            <input
                                type="text"
                                name="vehicle"
                                id="vehicle_name"
                                v-model="formFields.vehicle_name"
                                class="form-control"
                                disabled="disabled"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Starting ODO:</label>
                            <input
                                type="number"
                                name="starting_odo"
                                id="starting_odo"
                                class="form-control required-field"
                                placeholder="Enter starting ODO"
                                v-model="formFields.starting_odo"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Ending ODO:</label>
                            <input
                                type="number"
                                name="ending_odo"
                                id="ending_odo"
                                class="form-control required-field"
                                placeholder="Enter ending ODO"
                                v-model="formFields.ending_odo"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Distance Travelled</label>
                            <input
                                type="number"
                                class="form-control"
                                id="distance_travelled"
                                placeholder="Enter distance travelled"
                                v-model="distanceTravelled"
                                disabled="disabled"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Date submitted to procurement:</label>
                            <input
                                type="date"
                                name="date_submitted_proc"
                                id="date_submitted_proc"
                                class="form-control required-field"
                                placeholder="Enter date submitted to procurement"
                                v-model="formFields.date_submitted_proc"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div
                            v-if="formFields.vehicle_type == 4"
                            class="col-lg-6 form-group"
                        >
                            <label>{{
                                240 >= distanceTravelled
                                    ? "Fuel per KM"
                                    : "Rent per KM"
                            }}</label>
                            <input
                                type="number"
                                name="rate_per_km"
                                id="rate_per_km"
                                class="form-control required-field"
                                placeholder="Enter rate per kilometer"
                                v-model="formFields.rate_per_km"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Flat Rate:</label>
                            <input
                                type="number"
                                name="flat_rate"
                                id="flat_rate"
                                class="form-control"
                                placeholder="Enter flat rate"
                                v-model="formFields.flat_rate"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>No. of Nights:</label>
                            <input
                                type="number"
                                class="form-control"
                                id="no_of_nights"
                                placeholder="Enter number of nights"
                                v-model="formFields.no_nights"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div
                            class="col-lg-6 form-group"
                            v-if="formFields.vehicle_type == 4"
                        >
                            <label>Rate per Night:</label>
                            <input
                                type="number"
                                class="form-control"
                                id="rate_per_night"
                                placeholder="Enter rate per night"
                                v-model="formFields.rate_per_night"
                                :disabled="status == 'Completed'"
                            />
                        </div>
                        <div class="col-lg-12 form-group">
                            <label>Remarks:</label>
                            <textarea
                                class="form-control"
                                name=""
                                id="remarks"
                                cols="30"
                                rows="3"
                                v-model="formFields.remarks"
                                :disabled="status == 'Completed'"
                            ></textarea>
                        </div>
                    </div>
                </form>
            </template>
            <template v-if="finalStatus != 3" v-slot:footer>
                <button
                    @click="undo(id)"
                    type="button"
                    class="btn btn-sm btn-danger font-weight-bold text-uppercase mr-auto"
                >
                    Undo
                </button>
                <button
                    type="button"
                    class="btn btn-sm btn-light-primary font-weight-bold text-uppercase"
                    data-dismiss="modal"
                >
                    Close
                </button>
                <button
                    @click="update(id)"
                    type="button"
                    class="btn-save btn btn-sm btn-primary font-weight-bold text-uppercase"
                >
                    Save
                </button>
            </template>
        </modal>
        <filterdialog>
            <template v-slot:body v-if="dialogshow == true">
                <form id="request-form" class="form">
                    <div class="form-group row">
                        <label class="col-3">Division</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <select
                                    class="form-control select2 details-input"
                                    id="kt_select_division"
                                    name="division"
                                    v-model="filterActive.division"
                                >
                                    <option label="Label"></option>
                                    <option
                                        v-for="div in filterDropdown.division"
                                        :key="div.id"
                                        :value="div.id"
                                        >{{ div.division_name }}</option
                                    >
                                </select>
                            </div>
                        </div>
                        <label class="col-3">Section</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <select
                                    class="form-control select2 details-input"
                                    id="kt_select_section"
                                    name="section"
                                    v-model="filterActive.section"
                                >
                                    <option label="Label"></option>
                                    <option
                                        v-for="sec in filterDropdown.section"
                                        :key="sec.id"
                                        :value="sec.id"
                                        >{{ sec.section_name }}</option
                                    >
                                </select>
                            </div>
                        </div>
                        <label class="col-3">Trip ticket</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <select
                                    class="form-control select2 details-input"
                                    id="kt_select_trip_ticket"
                                    name="trp_ticket"
                                    v-model="filterActive.tripTicket"
                                >
                                    <option label="Label"></option>
                                    <option
                                        v-for="svc in filterDropdown.tripTicket"
                                        :key="svc.id"
                                        :value="svc.trip_ticket"
                                        >{{ svc.trip_ticket }}</option
                                    >
                                </select>
                            </div>
                        </div>
                        <label class="col-3">Vehicle Template</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="text"
                                    class="form-control required-field"
                                    id="vehicle-template"
                                    name="vehicle_template"
                                    placeholder="Template Number"
                                    v-model="filterActive.vehicleTemplate"
                                />
                            </div>
                        </div>
                        <label class="col-3">Date Travel</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="date"
                                    id="kt_date_travel"
                                    name="date_travel"
                                    class="form-control details-input"
                                    v-model="filterActive.dateTravel"
                                />
                            </div>
                        </div>
                        <label class="col-3">Procurement Date </label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="date"
                                    id="kt_procurement_sub"
                                    name="date_travel"
                                    class="form-control details-input"
                                    v-model="filterActive.procurementSub"
                                />
                            </div>
                        </div>
                        <label class="col-3">Distance Traveled</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="date"
                                    id="kt_distance_traveled"
                                    name="distance_traveled"
                                    class="form-control details-input"
                                    v-model="filterActive.distanceTravelled"
                                />
                            </div>
                        </div>
                        <label class="col-3">Po number</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <select
                                    class="form-control select2 details-input"
                                    id="kt_select_po_number"
                                    name="po_number"
                                    v-model="filterActive.poNumber"
                                >
                                    <option label="Label"></option>
                                    <option
                                        v-for="svc in filterDropdown.poNumber"
                                        :key="svc.id"
                                        :value="svc.po_no"
                                        >{{ svc.po_no }}</option
                                    >
                                </select>
                            </div>
                        </div>
                        <label class="col-3">Po amount</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="number"
                                    class="form-control required-field"
                                    id="kt_po_amount"
                                    name="svc_po_amount"
                                    placeholder="Po amount"
                                    v-model="filterActive.poAmount"
                                />
                            </div>
                        </div>
                        <label class="col-3">Rate per KM</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="number"
                                    class="form-control required-field"
                                    id="kt_rate_per_km"
                                    name="svc_rate_per_km"
                                    placeholder="Enter number"
                                    v-model="filterActive.rateperKm"
                                />
                            </div>
                        </div>
                        <label class="col-3">Flat Rate</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="number"
                                    class="form-control required-field"
                                    name="svc_flat_rate"
                                    placeholder="Enter number"
                                    v-model="filterActive.flatRate"
                                />
                            </div>
                        </div>
                        <label class="col-3">Rate per Night</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="number"
                                    class="form-control required-field"
                                    name="svc_rate_per_night"
                                    placeholder="Enter number"
                                    v-model="filterActive.rateperNight"
                                />
                            </div>
                        </div>
                        <label class="col-3">No of nights</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <input
                                    type="number"
                                    class="form-control required-field"
                                    name="svc_vehicleCount"
                                    placeholder="Enter number"
                                    v-model="filterActive.numberofNights"
                                />
                            </div>
                        </div>

                        <div class="card-footer">
                            <button
                                type="button"
                                class="btn btn-success mr-2"
                                @click="ini()"
                            >
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </template>
        </filterdialog>
    </div>
</template>

<style>
@media print {
    table,
    table tr,
    table td {
        border: #000 solid 1px;
    }
}
</style>

<script>
import Modal from "../../components/Layouts/Modal";
import Filterdialog from "../../components/Layouts/Dialog";
export default {
    data() {
        return {
            row_color: "#ECF0F3",
            travels: [],
            total: null,
            vehiclemodes: [],
            pages: {
                totalPages: null,
                prevPage: null,
                currentPage: 1,
                nextPage: 2,
                display: 5
            },
            loading: true,
            id: null,
            trip_ticket: null,
            created_at: null,
            status: null,
            status_class: null,
            vehicles: [],
            vehicle_image: null,
            finalStatus: null,
            formFields: {
                starting_odo: null,
                ending_odo: null,
                date_submitted_proc: null,
                distance_travelled: 0,
                rate_per_km: 0,
                flat_rate: 0,
                no_nights: 0,
                rate_per_night: 0,
                remarks: null,
                travel_date: null,
                travel_return: null,
                travel_time: null,
                vehicle_id: null,
                vehicle_name: null,
                vehicle_type: null,
                status: null,
                total_cost: 0,
                plate_no: null
            },
            filterDropdown: {
                tripTicket: [],
                division: [],
                section: [],
                poNumber: []
            },
            filterActive: {
                vehicleName: null,
                vehicelTemplate: null,
                driverName: null,
                driverContact: null,
                division: null,
                section: null,
                tripTicket: null,
                dateTravel: null,
                procurementSub: null,
                distanceTravelled: null,
                poNumber: null,
                poAmount: null,
                rateperKm: null,
                flatRate: null,
                rateperNight: null,
                numberofNights: null
            },
            dialogshow: false,
            names: [
                "starting_odo",
                "ending_odo",
                "date_submitted_proc",
                "rate_per_km"
            ]
        };
    },
    components: {
        Modal,
        Filterdialog
    },
    created() {
        this.getData();
        this.getPoNumber();
        this.getDivision();
        this.getVehiclemode();
    },
    mounted() {
        this.ini();
    },
    computed: {
        totalCost() {
            let result =
                this.formFields.distance_travelled *
                    this.formFields.rate_per_km +
                this.formFields.no_nights * this.formFields.rate_per_night +
                parseInt(this.formFields.flat_rate);
            this.formFields.total_cost = result;
            return result.toLocaleString(undefined, {
                minimumFractionDigits: 2
            });
        },
        distanceTravelled() {
            let result = (this.formFields.distance_travelled =
                this.formFields.ending_odo - this.formFields.starting_odo);
            return result;
        },
        pagination() {
            let result = null;
            let current = this.pages.currentPage;
            if (this.pages.totalPages < 5) {
                result = [...Array(this.pages.totalPages).keys()].map(x => ++x);
            } else {
                if (current <= 3) {
                    result = [...Array(this.pages.display).keys()].map(
                        x => ++x
                    );
                } else if (
                    current == this.pages.totalPages - 1 ||
                    current == this.pages.totalPages
                ) {
                    result = [
                        this.pages.totalPages - 4,
                        this.pages.totalPages - 3,
                        this.pages.totalPages - 2,
                        this.pages.totalPages - 1,
                        this.pages.totalPages
                    ];
                } else {
                    result = [
                        current - 2,
                        current - 1,
                        current,
                        current + 1,
                        current + 2
                    ];
                }
            }

            return result;
        }
    },
    methods: {
        ini() {
            $(() => {
                let vm = this;
                if (this.dialogshow == true) {
                    $("#list-travel-tbl")
                        .DataTable()
                        .destroy();
                    this.$showToast("Filtered successfully!", "success");
                }
            });
        },
        getData() {
            this.loading = true;
            axios
                .get(
                    BASE_URL +
                        "/tracking/vehicletravels?pages=" +
                        this.pages.currentPage
                )
                .then(res => {
                    this.travels = res.data.data;
                    this.total = res.data.count;
                    this.pages.totalPages = Math.ceil(res.data.count / 10);
                    this.loading = false;
                });
        },
        pageSet(type, page = null) {
            if (type == "jump") {
                this.pages.prevPage = page - 1;
                this.pages.currentPage = page;
                this.pages.nextPage = page + 1;
            } else if (type == "next" || type == "prev") {
                type == "next"
                    ? this.pages.currentPage++
                    : this.pages.currentPage--;
                this.pages.prevPage = this.pages.currentPage - 1;
                this.pages.nextPage = this.pages.currentPage + 1;
            }
            this.getData();
        },
        show(id) {
            this.reset();
            let vm = this;
            axios
                .get(BASE_URL + "/tracking/vehicletravels/" + id)
                .then(response => {
                    this.id = id;
                    this.created_at = this.$dateTimeEng(
                        response.data[0].created_at
                    );
                    this.trip_ticket = response.data[0].trip_ticket;
                    this.finalStatus = response.data[0].status;
                    this.status =
                        response.data[0].status == 2 ? "Approved" : "Completed";
                    this.status_class =
                        response.data[0].status == 2
                            ? "modal-status label label-primary label-inline mr-5"
                            : "modal-status label label-success label-inline mr-5";

                    // formFields
                    this.formFields.starting_odo =
                        response.data[0].starting_odo;
                    this.formFields.ending_odo = response.data[0].ending_odo;
                    this.formFields.date_submitted_proc =
                        response.data[0].date_submit_proc;
                    this.formFields.distance_travelled = parseInt(
                        response.data[0].travelled
                            ? response.data[0].travelled
                            : 0
                    );
                    this.formFields.rate_per_km = parseFloat(
                        response.data[0].rate_per_km
                            ? response.data[0].rate_per_km
                            : 0
                    );
                    this.formFields.flat_rate = parseFloat(
                        response.data[0].flat_rate
                            ? response.data[0].flat_rate
                            : 0
                    );
                    this.formFields.no_nights = parseInt(
                        response.data[0].nights_count
                            ? response.data[0].nights_count
                            : 0
                    );
                    this.formFields.rate_per_night = parseFloat(
                        response.data[0].rate_per_night
                            ? response.data[0].rate_per_night
                            : 0
                    );
                    this.formFields.remarks = response.data[0].remarks;
                    this.formFields.vehicle_id = response.data[0].vehicle_id;
                    this.formFields.vehicle_name = response.data[0].name;
                    this.formFields.plate_no = response.data[0].plate_no;
                    this.formFields.status = response.data[0].status;
                    this.formFields.vehicle_type = response.data[0].mot;
                    response.data[0].status == 3
                        ? $("#is-completed").prop("checked", true)
                        : $("#is-completed").prop("checked", false);

                    $("#is-completed").change(function() {
                        if (this.checked) {
                            $("#modal-status").removeClass("label-primary");
                            $("#modal-status").addClass("label-success");
                            vm.status = "Completed";
                            vm.formFields.status = 3;
                        } else {
                            $("#modal-status").removeClass("label-success");
                            $("#modal-status").addClass("label-primary");
                            vm.status = "Approved";
                            vm.formFields.status = 2;
                        }
                    });
                });
            $("#kt_datatable_modal").modal("show");
            $(".vehicle-img-viewer").fancybox();
        },
        update(id) {
            axios
                .put(
                    BASE_URL + "/tracking/vehicletravels/" + id,
                    this.formFields
                )
                .then(response => {
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    this.show(id);
                    this.getData();
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
                            $('[name="' + this.names[i] + '"]').removeClass(
                                "is-invalid"
                            );
                            $('[name="' + this.names[i] + '"]')
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
        reset() {
            this.id = null;
            this.trip_ticket = null;
            this.created_at = null;
            this.status = null;
            this.status_class = null;
            this.vehicle_image = null;
            this.formFields.starting_odo = null;
            this.formFields.ending_odo = null;
            this.formFields.date_submitted_proc = null;
            this.formFields.distance_travelled = null;
            this.formFields.rate_per_km = null;
            this.formFields.flat_rate = null;
            this.formFields.no_nights = null;
            this.formFields.rate_per_night = null;
            this.formFields.remarks = null;
            this.formFields.travel_date = null;
            this.formFields.travel_time = null;
            this.formFields.vehicle_id = null;
            this.formFields.vehicle_name = null;
            this.formFields.status = null;
        },
        undo(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "Undo Transaction",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Undo it!"
            }).then(function(result) {
                if (result.value) {
                    axios
                        .put(BASE_URL + "/tracking/vehicletravels/undo/" + id)
                        .then(response => {
                            Swal.fire(
                                "Good job!",
                                response.data.message,
                                "success"
                            );
                            this.$showToast(response.data.message, "success");
                            $("#kt_datatable_modal").modal("toggle");
                            $("#list-travel-tbl")
                                .DataTable()
                                .ajax.reload();
                        });
                }
            });
        },
        dialog() {
            let vm = this;
            vm.dialogshow = true;
            $("#dialog").dialog({ width: 600, height: 700 });
            setTimeout(() => {
                $("#kt_select_division").select2({
                    placeholder: "Division",
                    allowClear: true
                });
                $("#kt_select_section").select2({
                    placeholder: "Section",
                    allowClear: true
                });
                $("#kt_select_trip_ticket").select2({
                    placeholder: "Trip Ticket",
                    allowClear: true
                });
                $("#kt_select_po_number").select2({
                    placeholder: "Po number",
                    allowClear: true
                });
                $("#kt_select_division").change(function() {
                    let id = $(this).val();
                    vm.filterActive.division = id;
                    vm.getSection(id);
                });
                $("#kt_select_section").change(function() {
                    vm.filterActive.section = $(this).val();
                });
                $("#kt_select_trip_ticket").change(function() {
                    vm.filterActive.tripTicket = $(this).val();
                });
                $("#kt_select_po_number").change(function() {
                    vm.filterActive.poNumber = $(this).val();
                });
                $("#kt_date_travel").change(function() {
                    vm.filterActive.dateTravel = $(this).val();
                });
                $("#kt_procurement_sub").change(function() {
                    vm.filterActive.procurementSub = $(this).val();
                });
                $("#kt_distance_traveled").change(function() {
                    vm.filterActive.distanceTravelled = $(this).val();
                });
            }, 500);
        },
        getPoNumber() {
            axios.get(BASE_URL + "/api/v1/ponumber").then(response => {
                this.filterDropdown.poNumber = response.data;
            });
        },
        getDivision() {
            axios.get(BASE_URL + "/api/v1/division").then(response => {
                this.filterDropdown.division = response.data;
            });
        },
        getSection(id) {
            axios.get(BASE_URL + "/api/v1/section/" + id).then(response => {
                this.filterDropdown.section = response.data;
            });
        },
        indexers(idx) {
            return this.pages.currentPage == 1
                ? idx
                : (this.pages.currentPage - 1) * 10 + idx;
        },
        dateEng(dt, type = null) {
            return type ? this.$dateTimeEng(dt) : this.$dateEng(dt);
        },
        getVehiclemode() {
            this.vehiclemodes = this.$store.getters["mot/mot"];
        }
    }
};
</script>
