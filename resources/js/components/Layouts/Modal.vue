<template>
    <div id="kt_datatable_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="min-height: 590px;">
                <div class="modal-header py-5">
                    <h5 class="modal-status label label-inline mr-5"></h5>
                    <h5 class="modal-title"><span class="m-title"></span>
                    <span class="d-block text-muted font-size-sm"></span></h5>
                    <h3 class="modal-date"><span class="m-date"></span>
                    <span class="d-block text-muted font-size-sm"></span></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                   
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