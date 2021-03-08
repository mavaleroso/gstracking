<template>
    <div id="kt_datatable_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="min-height: 590px;">
                <div class="modal-header py-5">
                    <slot name="header"></slot>
                </div>
                <div class="modal-body">
                    <slot name="body"></slot>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary font-weight-bold text-uppercase" @click="details">Submit</button>
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
            // $('#kt_datatable_modal').modal('show');
        },
        details() {
            alert('123');
        }
    },
}
</script>