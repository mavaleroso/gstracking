<template>
    <div class="card card-custom card-stretch" id="kt_page_stretched_card">
        <div class="card-header">
            <div class="card-title">
                <a href="#" class="mr-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text svg-icon svg-icon-md svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="" placeholder="Search"/>
                    </div>
                </a>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                Advance Filter</a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-scroll">
                <table id="pending-travels-tbl" class="table rounded table-sm table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tracking Number</th>
                            <th>Destination</th>
                            <th>Passengers</th>
                            <th>Vehicles</th>
                            <th>Travel Date</th>
                            <th>Return Date</th>
                            <th style="width: 120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TO-2020-01-0001, TO-2020-01-0002</td>
                            <td>Cantilan SDS</td>
                            <td>9</td>
                            <td>2</td>
                            <td>July 12, 2021</td>
                            <td>July 13, 2021</td>
                            <td>
                                <button class="btn btn-sm btn-clean">
                                    <i class="flaticon2-check-mark"></i> Approved
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <!--begin::Pagination-->
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex flex-wrap py-2 mr-3">
                    <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                    <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>

                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">23</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1">24</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">25</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">26</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">27</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">28</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">...</a>

                    <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                    <a href="#" class="btn btn-icon btn-sm btn-light mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
                </div>
                <div class="d-flex align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <div class="mr-2 text-muted">Loading...</div>
                        <div class="spinner mr-10"></div>
                    </div>
                    <span class="text-muted">Displaying 10 of 230 records</span>
                </div>
            </div>
            <!--end:: Pagination-->
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            travels: []
        }
    },
    created() {
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            $(() => {
                this.getTravels();
            }); 
        },
        getTravels() {
            axios.get(BASE_URL + '').then(res => {

            });
        }
    },
}
</script>