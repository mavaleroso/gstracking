<template>
    <div id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <mobile :app="this"></mobile>
        <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<sidebar :app="this"></sidebar>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<topheader></topheader>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
                            <subheader></subheader>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<router-view :app="this"></router-view>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
                        <navfooter></navfooter>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
        <rightpanel></rightpanel>
    </div>
</template>

<script>
import Navbar from './components/Layouts/Navbar';
import Sidebar from './components/Layouts/Sidebar';
import Mobile from './components/Layouts/Mobile';
import Topheader from './components/Layouts/Header';
import Subheader from './components/Layouts/Subheader';
import Navfooter from './components/Layouts/Footer';
import Rightpanel from './components/Layouts/Rightpanel';
export default {
    components: {
        Navbar,
        Mobile,
        Sidebar,
        Topheader,
        Subheader,
        Navfooter,
        Rightpanel
    }
}
</script>
