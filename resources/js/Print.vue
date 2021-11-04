<template>
    <div>
        <div id="kt_header" class="header">
            <!--begin::Container-->
            <div class="container d-flex align-items-stretch justify-content-between">
                <!--begin::Header Menu Wrapper-->
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                    <!--begin::Header Menu-->
                    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                        <div id="kt_brand" class="brand flex-column-auto" kt-hidden-height="65" style="">
                            <a href="#" class="brand-logo">
                                <img alt="Logo" src="assets/media/logos/logo-inverse.png">
                            </a> 
                        </div>
                        <!--begin::Header Nav-->
                        <ul class="menu-nav">
                            
                        </ul>
                        <!--end::Header Nav-->
                    </div>
                    <!--end::Header Menu-->
                </div>
                <!--end::Header Menu Wrapper-->
                <!-- <h3 class="label label-outline-primary label-inline m-0 p-0 mt-6 h5 p-4">REQUEST TRAVEL</h3> -->
                <!--begin::Topbar-->
                <div class="topbar">
                    <!--begin::Search-->
                    <div class="dropdown" id="kt_quick_search_toggle">
                        <!--begin::Toggle-->
                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                            <div class="btn btn-sm btn-clean mr-3" @click="close">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                Cancel
                            </div>
                            <div class="btn btn-sm btn-clean btn-print">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Printer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
                                        <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                Print
                            </div>
                        </div>
                        <!--end::Toggle-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Topbar-->
            </div>
            <!--end::Container-->
        </div>
        <div class="print-content">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        close() {
            close();
        }
    },
}
</script>