<template>
    <div id="kt_datatable_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="min-height: 590px;">
                <div class="modal-header py-5">
                    <h5 class="modal-title">Sub Datatable in Modal Pop-up
                    <span class="d-block text-muted font-size-sm">sub datatable for the selected row is loaded from remote data source</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-5">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query_2" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status_2">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                            <select class="form-control" id="kt_datatable_search_type_2">
                                                <option value="">All</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_sub"></div>
                    <!--end: Datatable-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary font-weight-bold text-uppercase">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            
        }
    },
}
</script>