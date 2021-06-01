<template>
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ $route.meta.title }}</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<!--end::Actions-->
			</div>
			<div class="d-flex align-items-center">
				<div :class="($route.meta.title == 'Dashboard')? 'input-group':'d-none'">
					<div class="input-group-prepend"><span class="input-group-text"><i class="la la-calendar-alt"></i></span></div>
					<select id="year" class="form-control">
						<option v-for="year in years" :key="year.id" :value="year.travel_year">{{ year.travel_year }}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			years:[],
			system:[],
		}
	},
	created() {
		this.getYear();
		this.getSystem();
	},
	mounted() {
		this.ini();
	},
	methods: {
		ini() {
			var year = () => {
				$(() => {
					let system = JSON.parse(JSON.stringify(this.system));
					$('#year').val(system[4].value)
				});
			}

			return {
				init: () => {
				},
				setYear: () => {
					year();
				}
			}
			
		},
		getYear() {
			axios.get(BASE_URL + '/api/v1/config/year').then(res => {
				this.years = res.data;
				this.ini().setYear();
			});
		},
		getSystem() {
			axios.get(BASE_URL + '/api/v1/config/system').then(res => {
				this.system = res.data;

				
			});

			
		}
	},
}
</script>