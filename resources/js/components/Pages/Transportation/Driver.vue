<template>
    <div id="driver-page">
        <div
            v-if="create == true"
            class="card card-custom gutter-b animate__animated animate__fadeInRight"
        >
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <h3 class="card-label">
                        <span></span>
                        <i class="mr-2"></i>
                        <small class="">Form</small>
                    </h3>
                </div>
            </div>
            <div
                :class="
                    loadingStats
                        ? 'card-body overlay overlay-block'
                        : 'card-body'
                "
            >
                <div v-if="loadingStats" class="overlay-layer bg-dark-o-10">
                    <div class="spinner spinner-primary"></div>
                </div>
                <form class="form" id="driver-form" @submit.prevent="saveEntry">
                    <div class="card-body">
                        <input
                            type="hidden"
                            name="emp_id"
                            v-model="formFields.emp_id"
                        />
                        <div class="row">
                            <div
                                v-if="formFields.image != ''"
                                class="col-lg-12"
                                id="images"
                            >
                                <div class="form-group">
                                    <label>Image: </label> <br />

                                    <img
                                        :src="formFields.image"
                                        style="width:100px;height:100px;"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fullname:</label>
                                    <select
                                        v-if="
                                            $store.getters[
                                                'currentUser/loadingStats'
                                            ]
                                        "
                                        class="details-input form-control select2"
                                        id="kt_select_fullname"
                                        name="fullname"
                                        v-model="formFields.fullname"
                                        disabled
                                    >
                                        <option label="Label"></option>
                                        <option
                                            v-for="(result,
                                            index) in formFields.results"
                                            :key="index"
                                            :value="index"
                                            >{{ result.first_name }}
                                            {{ result.middle_name }}
                                            {{ result.last_name }}</option
                                        >
                                    </select>
                                    <select
                                        v-else
                                        class="details-input form-control select2"
                                        id="kt_select_fullname"
                                        name="fullname"
                                        v-model="formFields.fullname"
                                    >
                                        <option label="Label"></option>
                                        <option
                                            v-for="(result,
                                            index) in formFields.results"
                                            :key="index"
                                            :value="index"
                                            >{{ result.first_name }}
                                            {{ result.middle_name }}
                                            {{ result.last_name }}</option
                                        >
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input
                                        type="text"
                                        class="form-control required-field"
                                        name="driver_gender"
                                        placeholder="Gender"
                                        v-model="formFields.gender"
                                        disabled
                                    />
                                </div>
                                <div class="form-group">
                                    <label>Status:</label>
                                    <input
                                        type="text"
                                        class="form-control required-field"
                                        name="driver_status"
                                        placeholder="Status"
                                        v-model="formFields.status"
                                        disabled
                                    />
                                    <!-- <input v-else type="text" class="form-control required-field" name="driver_status" placeholder="Status" value="Inactive" disabled/> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Birthdate:</label>
                                    <input
                                        type="text"
                                        class="form-control required-field"
                                        name="driver_birthdate"
                                        placeholder="Birthdate"
                                        v-model="formFields.birthdate"
                                        disabled
                                    />
                                </div>
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                ><i
                                                    class="la la-mobile-phone icon-lg"
                                                ></i
                                            ></span>
                                        </div>
                                        <input
                                            type="number"
                                            class="form-control required-field"
                                            name="driver_contactNumber"
                                            placeholder="Enter contact number"
                                            v-model="formFields.contactNumber"
                                            disabled
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button
                                    type="submit"
                                    class="btn btn-primary mr-2"
                                >
                                    Save
                                </button>
                                <button
                                    @click="cancelEntry"
                                    type="reset"
                                    class="btn btn-secondary"
                                >
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div
            v-else
            class="card card-custom card-stretch"
            id="kt_page_stretched_card"
        >
            <div class="card-header flex-wrap">
                <div class="card-title">
                    <a href="#" class="mr-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span
                                    class="input-group-text svg-icon svg-icon-md svg-icon-primary"
                                >
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
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"
                                                opacity="0.3"
                                            />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"
                                            />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                placeholder="Search"
                                v-model="searchData"
                                @keyup="search"
                            />
                        </div>
                    </a>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a
                        class="btn btn-primary font-weight-bolder"
                        @click="newEntry"
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
                        >New Entry</a
                    >
                    <!--end::Button-->
                </div>
            </div>
            <div
                :class="
                    loading ? 'card-body overlay overlay-block' : 'card-body'
                "
            >
                <div
                    v-if="drivers == null"
                    class="alert alert-custom alert-warning fade show mb-5 px-5 py-0"
                    role="alert"
                >
                    <div class="alert-icon">
                        <i class="flaticon-warning"></i>
                    </div>
                    <div class="alert-text">No data available!</div>
                    <div class="alert-close">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="alert"
                            aria-label="Close"
                        >
                            <span aria-hidden="true"
                                ><i class="ki ki-close"></i
                            ></span>
                        </button>
                    </div>
                </div>
                <div v-if="loading" class="overlay-layer bg-dark-o-10">
                    <div class="spinner spinner-primary"></div>
                </div>
                <table
                    class="table table-separate table-head-custom table-checkable"
                    id="driver-tbl"
                >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Action</th>
                            <th>Employee ID</th>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Sex</th>
                            <th>Contact No.</th>
                            <th>Status</th>
                            <th>Reasons</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody v-if="drivers">
                        <tr v-for="(d, index) in drivers" :key="index">
                            <td>{{ indexers(index + 1) }}</td>
                            <td>
                                <button
                                    @click="deleteEntry(d.id)"
                                    class="btn-delete btn btn-sm btn-clean btn-icon"
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
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000"
                                                    fill-rule="nonzero"
                                                />

                                                <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000"
                                                    opacity="0.3"
                                                />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                            </td>
                            <td>
                                <span
                                    class="label label-inline label-light-primary"
                                    >{{ d.emp_id }}</span
                                >
                            </td>
                            <td>{{ d.fullname }}</td>
                            <td>{{ $dateEng(d.birthdate) }}</td>
                            <td>{{ d.sex }}</td>
                            <td>{{ d.contact }}</td>
                            <td v-html="$chkStatus2(d.status)"></td>
                            <td>{{ d.reasons }}</td>
                            <td>{{ $dateEng(d.created_at) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <!--begin::Pagination-->
                <div
                    class="d-flex justify-content-between align-items-center flex-wrap"
                    v-if="drivers"
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
                            >Displaying {{ drivers.length }} of
                            {{ total }} records</span
                        >
                    </div>
                </div>
                <!--end:: Pagination-->
            </div>
        </div>
    </div>
</template>
<script>
import Dialog from "../../Layouts/Dialog.vue";
export default {
    components: { Dialog },
    data() {
        return {
            create: false,
            formFields: {
                id: "",
                emp_id: "",
                fullname: "",
                birthdate: "",
                gender: "",
                contactNumber: "",
                status: "",
                results: [],
                image: ""
            },
            names: [
                "fullname",
                "birthdate",
                "gender",
                "contactNumber",
                "status"
            ],
            drivers: [],
            total: null,
            searchData: "",
            timer: null,
            pages: {
                totalPages: null,
                prevPage: null,
                currentPage: 1,
                nextPage: 2,
                display: 5
            },
            loading: true
        };
    },
    created() {
        this.getDriversList();
    },
    mounted() {
        this.ini();
    },
    computed: {
        loadingStats() {
            let res = this.$store.getters["employees/loadingStats"];
            if (!res) {
                this.formFields.results = this.$store.getters[
                    "employees/employee"
                ];
            }
            return res;
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
            $(() => {});
        },
        indexers(idx) {
            return this.pages.currentPage == 1
                ? idx
                : (this.pages.currentPage - 1) * 10 + idx;
        },
        search() {
            clearTimeout(this.timer);
            this.timer = setTimeout(() => {
                this.getDriversList();
            }, 2000);
        },
        getDriversList() {
            this.loading = true;
            axios
                .get(
                    BASE_URL +
                        "/transportation/driver?page=" +
                        this.pages.currentPage +
                        "&search=" +
                        this.searchData
                )
                .then(res => {
                    this.loading = false;
                    this.drivers = res.data.data ? res.data.data : null;
                    this.total = res.data.count;
                    this.pages.totalPages = Math.ceil(res.data.count / 10);
                });
        },
        newEntry() {
            this.create = true;
            let vm = this;
            $(() => {
                $("#images").hide();
                $(`#kt_select_fullname`).on("select2:select", function(e) {
                    vm.getData();
                    $("#images").show();
                });

                $(`#kt_select_fullname`).on("select2:clear", function(e) {
                    setTimeout(() => {
                        $("#images").hide();
                    }, 100);
                    vm.formFields.contactNumber = "";
                    vm.formFields.gender = "";
                    vm.formFields.status = "";
                    vm.formFields.birthdate = "";
                });
                $(".card-label span").text("Create Driver");
                $("#kt_select_fullname").select2({
                    placeholder: "Select fullname",
                    allowClear: true
                });
            });
        },
        getData() {
            let vm = this;
            let id = $("#kt_select_fullname").val();
            let fullname =
                vm.formFields.results[id].first_name +
                " " +
                vm.formFields.results[id].middle_name +
                " " +
                vm.formFields.results[id].last_name;
            vm.formFields.contactNumber = vm.formFields.results[id].contact;
            vm.formFields.gender = vm.formFields.results[id].gender;
            vm.formFields.status = vm.formFields.results[id].status;
            vm.formFields.birthdate = vm.formFields.results[id].birthdate;
            vm.formFields.fullname = fullname;
            vm.formFields.image = vm.formFields.results[id].image_path;
            vm.formFields.emp_id = vm.formFields.results[id].id_number;
        },
        cancelEntry() {
            this.formFields.id = "";
            this.formFields.fullname = "";
            this.formFields.birthdate = "";
            this.formFields.gender = "";
            this.formFields.contactNumber = "";
            this.formFields.status = "";
            this.formFields.emp_id = "";
            this.create = false;
            this.getDriversList();
        },
        saveEntry() {
            let formD = new FormData();
            let method = null;
            let putParams = null;
            formD.append("id", this.formFields.id);
            formD.append("fullname", this.formFields.fullname);
            formD.append("birthdate", this.formFields.birthdate);
            formD.append("gender", this.formFields.gender);
            formD.append("contactNumber", this.formFields.contactNumber);
            formD.append("status", this.formFields.status);
            formD.append("emp_id", this.formFields.emp_id);
            method = this.create ? "POST" : "PUT";
            putParams = this.create ? "" : "/" + this.formFields.id;
            axios({
                method: method,
                url: BASE_URL + "/transportation/driver" + putParams,
                data: formD,
                headers: { "Content-Type": "application/x-www-form-urlencoded" }
            })
                .then(response => {
                    $(".invalid-feedback").remove();
                    $(".is-invalid").removeClass("is-invalid");
                    Swal.fire("Good job!", response.data.message, "success");
                    this.$showToast(response.data.message, "success");
                    setTimeout(() => {
                        this.cancelEntry();
                    }, 1000);
                })
                .catch(error => {
                    let data = error.response.data.errors;
                    let keys = [];
                    let values = [];
                    for (const [key, value] of Object.entries(data)) {
                        keys.push(`${key}`);
                        values.push(`${value}`);
                        if (`${key}` == "fullname") {
                            if (
                                $("#kt_select_" + `${key}`)
                                    .next()
                                    .next().length == 0
                            ) {
                                $("#kt_select_" + `${key}`)
                                    .next()
                                    .after(
                                        '<div class="invalid-feedback d-block">' +
                                            `${value}` +
                                            "</div>"
                                    );
                            }
                        } else {
                            if (
                                $('[name="driver_' + `${key}` + '"]').next()
                                    .length == 0 ||
                                $('[name="driver_' + `${key}` + '"]')
                                    .next()
                                    .attr("class")
                                    .search("invalid-feedback") == -1
                            ) {
                                $('[name="driver_' + `${key}` + '"]').addClass(
                                    "is-invalid"
                                );
                                $('[name="driver_' + `${key}` + '"]').after(
                                    '<div class="invalid-feedback">' +
                                        `${value}` +
                                        "</div>"
                                );
                            }
                        }
                    }
                    for (let i = 0; i < this.names.length; i++) {
                        if (this.names[i] == "fullname") {
                            if (keys.indexOf("" + this.names[i] + "") == -1) {
                                if (
                                    $("#kt_select_" + this.names[i])
                                        .next()
                                        .next().length != 0
                                ) {
                                    $("#kt_select_" + this.names[i])
                                        .next()
                                        .next(".invalid-feedback")
                                        .remove();
                                }
                            }
                        } else {
                            if (keys.indexOf("" + this.names[i] + "") == -1) {
                                $(
                                    '[name="driver_' + this.names[i] + '"]'
                                ).removeClass("is-invalid");
                                $('[name="driver_' + this.names[i] + '"]')
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
        deleteEntry(id) {
            Swal.fire({
                title: "Are you sure?",
                text: 'You won"t be able to revert this!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                if (result.value) {
                    axios
                        .delete(BASE_URL + "/transportation/driver/" + id)
                        .then(response => {
                            Swal.fire(
                                "Deleted!",
                                response.data.message,
                                "success"
                            );
                            this.drivers = [];
                            this.getDriversList();
                        });
                }
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
            this.getDriversList();
        }
    }
};
</script>
