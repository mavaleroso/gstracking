<template>
    <div :id="(!id) ? 'kt_datatable_modal' : id" class="modal fade" role="dialog" aria-hidden="true">
        <div :class="(!size) ? 'modal-dialog modal-xl modal-dialog-centered':'modal-dialog modal-dialog-centered '+size">
            <div class="modal-content" style="min-height: 100px; !important">
                <div class="modal-header py-5">
                    <slot name="header"></slot>
                </div>
                <div class="modal-body">
                    <slot name="body"></slot>
                </div>
                <div class="modal-footer">
                    <slot name="footer"></slot>
                </div>
                <hr v-if="status == 1" class="dashed-border">
                <div v-if="status == 1" class="modal-body">
                    <slot name="adminbody"></slot>
                </div>
                <div v-if="status == 1" class="modal-footer">
                    <slot name="adminfooter"></slot>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: [
        'id',
        'status',
        'size'
    ],
}
</script>
