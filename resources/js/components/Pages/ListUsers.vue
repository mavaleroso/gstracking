<template>
    <div id="list-users-page">
        <modal>
            <template v-slot:header>
                <h6><span class="d-block text-muted  bold h5">Roles update</span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </template>
            <template v-slot:body>
                <form class="form">
                    <div class="card-body row">
                  
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                <select class="form-control select2 details-input" id="kt_select_svc_name" name="name"  v-model="formFields.roles_id">
                                    <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.name }}</option>
                                </select>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Status:</label>
                                <select class="form-control select2 details-input" id="kt_select_svc_status" name="status"  v-model="formFields.status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                </div>
                            </div>
                     </div>
                </form>
            </template>
            <template v-slot:footer>
                <button type="button" class="btn btn-sm btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                <button @click="update(formFields.id)" type="button" class="btn-save btn btn-sm btn-primary font-weight-bold text-uppercase">Save</button>
            </template>
        </modal>
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Employees</span>
                </h3>
            </div>
            <div class="card-body py-0">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_3">
                        <thead>
                            <tr class="text-left text-uppercase">
                                <th class="px-0" style="width: 50px">Fullname</th>
                                <th style="min-width: 120px"></th>
                                <th style="min-width: 120px">Roles</th>
                                <th style="min-width: 120px">Gender</th>
                                <th class="text-info" style="min-width: 150px">Division</th>
                                <th style="min-width: 120px">Section</th>
                                <th style="min-width: 120px">Status</th>
                                <th class="pr-0" style="min-width: 90px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users" :key="user.id" :value="user.id">   
                                <td class="pl-0">
                                    <div class="symbol symbol-50 symbol-light mt-1">
                                        <span v-if="user.gender=='Male'" class="symbol-label">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                        </span>
                                        <span v-else-if="user.gender=='Female'" class="symbol-label">
                                            <img src="assets/media/svg/avatars/002-girl.svg" class="h-75 align-self-end" alt="" />
                                        </span>
                                        <span v-else class="symbol-label">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                        </span>
                                    </div>
                                </td> 
                             
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ user.first_name }} {{ user.last_name }}</a>
                                    <span class="text-muted font-weight-bold text-muted d-block">{{ user.position }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ user.role_name }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ user.gender }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ user.division }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ user.section }}</span>
                                </td>
                                <td >
									<span v-if="user.is_active=='1'" class="label label-xl label-inline label-light-success ">Active</span>
                                    <span v-else class="label label-xl label-inline label-light-danger ">Inactive</span>
                                </td>
                                <td class="text-left pr-0">
                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" @click="handleActionButton(user.id)">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Modal from '../../components/Layouts/Modal';
export default {
    data() {
        return {
            users: [],
            roles: [],
            edit: false,
             formFields: {
                id: '',
                roles_id: '',
                user_id: '',
                name: '',
                status: '',
                active: '',
            },
        }
    },  
    components: {
        Modal
    },
    created() {
        this.getUsers();
        this.getRoles ();
    },
    mounted() {
    },
    methods: {
        handleActionButton(id) {
            $('.modal-dialog').removeClass('modal-xl');
            $('.modal-dialog').addClass('modal-sm');
            let vm = this;
            $('#kt_datatable_modal').modal('show');''
            $('#kt_select_svc_name').select2({
                placeholder: "Select roles",
                minimumResultsForSearch: Infinity
            });
            $('#kt_select_svc_name').change(function() {
                vm.formFields.roles_id = $(this).val();
            });
            $('#kt_select_svc_status').select2({
                placeholder: "Select Status",
                minimumResultsForSearch: Infinity
            });
        
            $('#kt_select_svc_status').change(function() {
                vm.formFields.status = $(this).val();
            });
            this.editEntry(id);
        },
        getUsers() {
            axios.get(BASE_URL + "/users/listUsers").then(response => {
                this.users = response.data;
            });
        },
        getRoles() {
            axios.get(BASE_URL + "/api/v1/role").then(response => {
                this.roles = response.data;
            });
        },
        editEntry(id) {
            this.edit = true;
            let vm = this;
            $(() => {
                axios.get(BASE_URL + "/users/listUsers/"+id).then(response => {
                    vm.formFields.id = response.data[0].id;
                    vm.formFields.roles_id = response.data[0].roles_id;
                    vm.formFields.active = response.data[0].is_active;
                });
                $('#kt_select_svc_name').select2({
                    placeholder: "Select roles",
                    minimumResultsForSearch: Infinity
                });

                setTimeout(() => {
                    $('#kt_select_svc_name').val(vm.formFields.roles_id);
                    $('#kt_select_svc_name').trigger('change');
                    $('#kt_select_svc_status').val(vm.formFields.active);
                    $('#kt_select_svc_status').trigger('change');
                }, 500);
            });
        },
        update(id){
             axios.put(BASE_URL + "/users/listUsers/"+id,this.formFields).then(response => {
                Swal.fire("Good job!", response.data.message, "success");
                this.$showToast(response.data.message, 'success');
                this.getUsers();
            });
        }
    },
}
</script>

