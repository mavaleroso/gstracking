<template>
    <div class="request-travel card card-custom animate__animated animate__fadeIn" id="kt_page_sticky_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Motor Vehicle
                <i class="mr-2"></i>
                <small class="">Request Form</small></h3>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Form-->
            <form class="form" id="kt_form">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div v-if="complete" class="jumbotron">
                            <p class="lead">Your request has successfully completed!</p>
                            <hr class="my-4">
                            <p>{{ createdAt }}</p>
                            <p class="lead">
                                <router-link :to="{name: 'listLocalRequests'}" class="btn btn-success btn-sm" href="#" role="button">Update request</router-link>
                                
                                <a class="btn btn-primary btn-sm" href="#" @click="newRequest" role="button">New request</a>
                            </p>
                        </div>
                        <div class="my-5">
                            <input name="request_id" type="hidden" value=""/>
                            <h3 class="text-dark font-weight-bold mb-10">Requestor Info:</h3>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Division</label>
                                <div class="col-9">
                                    <select class="details-input form-control select2" id="kt_select_division" name="division">
                                        <option label="Label"></option>
                                        <option v-for="division in divisions" :key="division.id" :value="division.id">{{ division.division_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Section</label>
                                <div class="col-9">
                                    <select class="details-input form-control select2" id="kt_select_section" name="section" >
                                        <option label="Label"></option>
                                        <option v-for="section in sections.filter(i=>i.division_id == activeDivision)" :key="section.id" :value="section.id">{{ section.section_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Purpose of travel</label>
                                <div class="col-9">
                                    <input name="pur_travel" type="text" class="details-input form-control" placeholder="Enter purpose here"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Destination</label>
                                <div class="col-9">
                                    <select class="details-input form-control select2" id="kt_select_region" name="region">
                                        <option label="Label"></option>
                                        <option v-for="region in regions" :key="region.id" :value="region.id">{{ region.region_name }}</option>
                                    </select>
                                    <select class="details-input form-control select2 kt_select2_3" id="kt_select_province" name="province[]" multiple="multiple">
                                        <option v-for="province in provinces.filter(i=>i.region_id == activeRegion)" :key="province.id" :value="province.id">{{ province.province_name }}</option>
                                    </select>

                                    <select class="details-input form-control select2 kt_select2_3" id="kt_select_city" name="city[]" multiple="multiple">
                                        <optgroup v-for="activeProv in currentlySelectedProvince" :key="activeProv.id" :label="activeProv.province_name">

                                            <option v-for="city in currentlySelectedCities.filter(i=>i.province_id == activeProv.id)" :key="city.id" :value="city.id">{{ city.city_name }}</option>
                                            
                                        </optgroup>
                                    </select>                                  
                                    <select class="details-input form-control select2 kt_select2_3" id="kt_select_brgy" name="brgy[]" multiple="multiple">
                                          <optgroup v-for="activeBrgy in currentCities" :key="activeBrgy.id" :label="activeBrgy.city_name">

                                            <option v-for="barangays in currentlySelectedBarangays.filter(i=>i.city_id == activeBrgy.id)" :key="barangays.id" :value="barangays.id">{{ barangays.brgy_name }}</option>
                                            
                                        </optgroup>
                                        
                                        <!-- <optgroup v-for="activeCity in activeCities" :key="activeCity.id" :label="activeCity.city_name">
                                            <option v-for="brgy in brgys.filter(i=>i.city_id == activeCity.id)" :key="brgy.id" :value="brgy.id">{{ brgy.brgy_name }}</option>
                                        </optgroup> -->
                                    </select>
                                    <input name="destination_place" id="destination_place" type="text" class="details-input form-control" placeholder="Enter place here"/>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Date of Travel</label>
                                <div class="col-9">
                                    <input id="date-travel" name="date_travel" class="details-input form-control" :min="maxDate" type="date" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Date of Return</label>
                                <div class="col-9">
                                    <input id="date-return" name="date_return" class="details-input form-control" :min="maxDate" type="date" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 mt-3">Time of Departure</label>
                                <div class="col-9">
                                    <input name="time_depart" class="details-input form-control" type="time" />
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="my-5">
                            <div class="d-flex">
                                <h3 class="text-dark font-weight-bold mb-10">Passenger Details:</h3>
                                <div v-if="complete == false" class="ml-auto">
                                    <button class="btn btn-sm btn-outline-primary" @click="addRow"><i class="fa fa-plus-square p-0"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" @click="removeRow"><i class="fa fa-minus-square p-0"></i></button>
                                </div>
                            </div>
                            <input type="text" id="pax-total" name="pax_total" v-model="total">

                            <table id="passenger-tbl" class="table w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Name of Passenger/s</th>
                                        <th scope="col" class="text-center">Position/Designation</th>
                                        <th scope="col" class="text-center w-15">Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="index in total" :key="index">
                                        <td scope="row" class="text-center">{{index}}</td>
                                        <!-- <td><input name="pax_name_1" class="details-input form-control" type="text"/></td> -->
                                            <td>
                                                <select  class="details-input form-control select2" :id="'passenger-select-'+index" :name="'pax_name_'+index">
                                                    <option label="Label"></option>
                                                    <option v-for="(result,index) in results" :key="index" :value="index">{{result.first_name}} {{result.middle_name}} {{result.last_name}}</option>
                                                </select>
                                            </td>
                                        <td><input name="pax_des_1" class="details-input form-control" type="text"/></td>
                                        <td>
                                            <select name="pax_gen_1" class="details-input form-control">
                                                <option value=""></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <div class="card-footer">
            <div v-if="complete == false" class="save-form-btn">
                <button type="button" class="btn btn-primary font-weight-bolder" @click="saveForm">
                <i class="ki ki-check icon-sm"></i>Save Form</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            divisions: [],
            sections:[],
            regions: [],
            provinces: [],
            cities: [],
            brgys: [],
            activeProvinces: '',
            activeSections: [],
            activeCities: [],
            names: ['region', 'province', 'city', 'brgy', 'date_travel', 'pax_des_1', 'pax_name_1','pax_gen_1', 'division','section', 'pur_travel', 'time_depart', 'date_return', 'destination_place'],
            complete: false,
            createdAt: null,
            maxDate: null,
            travelDate: null,
            returnDate: null,
            activeDivision: null,
            activeRegion: null,
            activeProvince: null,
            activeBarangay: null,
            selectedProvinces: null,
            selectedBarangays: null,
            selectedCities: null,
            currentlySelectedCities: [],
            currentlySelectedProvince: [],
            currentlySelectedBarangays: [],
            currentCities: [],
            results: [],
            total: 1
        }
    },
    created() {
        this.getRegion();
        this.getDivision();
        this.getSection();
        this.getProvince();
        this.getCity();
        this.getBrgy();
        this.EmployeeList();
    },
    mounted() {
        this.ini();
        this.dateConf();
        
    },
    methods: {
        ini() {
            let vm = this;
            $(() => { 
                $('#kt_select_province').select2({
                    placeholder: "Select a Province",
                });

                // multi select
                $('#kt_select_city').select2({
                    placeholder: "Select a City",
                });

                // multi select
                $('#kt_select_brgy').select2({
                    placeholder: "Select a Barangay",
                });

                // basic
                $('#kt_select_region').select2({
                    placeholder: "Select a Region",
                    allowClear: true
                });

                $('#kt_select_division').select2({
                    placeholder: "Select a Division",
                    allowClear: true
                });
                $('#kt_select_section').select2({
                    placeholder: "Select a Section",
                    allowClear: true
                });
                $('#passenger-select-1').select2({
                    placeholder: "Select fullname",
                    allowClear: true
                });

                $('.menu-item').removeClass('menu-item-active');
                $('.router-link-active').parent().addClass('menu-item-active');

                $('#kt_select_division').on('change', function() {
                    vm.activeDivision = $(this).val();
                });
                
                $('#kt_select_section').on('change', () => {
                    let id  = $('#kt_select_section').val();
                    this.section = id;
                });

                $('#kt_select_region').on('change', function() {
                    vm.activeRegion = $(this).val();
                });

                $('#kt_select_province').on('change', function() {
                    let data_arr, data_int, res, prov;
                    vm.activeProvince = $(this).val();
                    console.log("active province");
                    console.log($(this).val());
                    data_arr = Object.values(vm.activeProvince);
                    data_int = data_arr.map(i=>Number(i));
                    vm.selectedProvinces = data_int;
                    res = vm.cities.filter(item => vm.selectedProvinces.includes(item.province_id));
                    prov = vm.provinces.filter(item => vm.selectedProvinces.includes(item.id));    
                    vm.currentlySelectedCities = res;
                    vm.currentlySelectedProvince = prov;
                });

                $('#kt_select_city').on('change', function() {
                    let data_arr, data_int, res, city;
                    vm.activeBarangay = $(this).val();
                    data_arr = Object.values(vm.activeBarangay);
                    data_int = data_arr.map(i=>Number(i));
                    vm.selectedCities = data_int;
                    res = vm.brgys.filter(item => vm.selectedCities.includes(item.city_id));
                    city = vm.cities.filter(item => vm.selectedCities.includes(item.id));
                    vm.currentlySelectedBarangays = res;
                    vm.currentCities = city;
                });
            });
        },
        EmployeeList(){
            this.results = JSON.parse(localStorage.getItem('ListEmployee'));
        },
        convertToInt(data){
            console.log("Called");
            console.log(data);
            return false;
        },
        addRow(event) {
            event.preventDefault();
            let count = this.total += 1;

            setTimeout(() => {
                $(`#passenger-select-${count}`).select2({
                    placeholder: "Select a fullname",
                    allowClear: true
                });
            }, 100);

            $('#pax_name_1').select2({
                    placeholder: "Select fullname",
                    allowClear: true
            });

            
            this.names.push(`pax_name_${count}`);
            this.names.push(`pax_des_${count}`);


            // let lastTr = parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text());
            // lastTr += 1;
            // $('#passenger-tbl tbody').append('<tr><td scope="row" class="text-center">'+lastTr+'</td><td><input name="pax_name_'+lastTr+'" class="details-input form-control" type="text" /></td><td><input name="pax_des_'+lastTr+'" class="details-input form-control" type="text" /></td><td><select name="pax_gen_'+lastTr+'" class="details-input form-control"><option value=""></option><option value="Male">Male</option><option value="Female">Female</option></select></td></tr>');
            // $('#pax-total').val(lastTr);
            // this.names.push('pax_name_'+lastTr);
            // this.names.push('pax_des_'+lastTr);
        },
        removeRow(event) {
            event.preventDefault();
            let lastTr = $('#passenger-tbl tbody tr:eq(-1)');
            if(lastTr.find('td:eq(0)').text() != '1') {
                let aliasNames = this.names;
                let paxName = aliasNames.indexOf('pax_name_'+lastTr.find('td:eq(0)').text());
                let paxDes = aliasNames.indexOf('pax_name_'+lastTr.find('td:eq(0)').text());
                if (paxName > -1) {
                    aliasNames.splice(paxName, 1);
                }
                if (paxDes > -1) {
                    aliasNames.splice(paxDes, 1);
                }
                this.names = aliasNames;

                lastTr.remove();
            }
            $('#pax-total').val(parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text()));
        },  
        saveForm() {
            let requestform = $('#kt_form').serialize();
            axios.post(BASE_URL + "/travel/request", requestform).then(response => {
                $('.invalid-feedback').remove();
                $('.is-invalid').removeClass('is-invalid');
                Swal.fire("Good job!", response.data.message, "success");
                this.$showToast(response.data.message, 'success');
                $('.details-input').attr('disabled', true);
                this.complete = true;
                this.createdAt = this.$dateTimeEng(response.data.result.created_at);
            }).catch((error) => {
                let data = error.response.data.errors;
                let keys = [];
                let values = [];
                for (const [key, value] of Object.entries(data)) {
                    keys.push(`${key}`);
                    values.push(`${value}`);
                    if (`${key}` == 'region' || `${key}` == 'province' || `${key}` == 'city' || `${key}` == 'division'|| `${key}` == 'section'){
                        if ($('#kt_select_'+`${key}`).next().next().length == 0 || $('#kt_select_'+`${key}`).next().next().attr('class').search('invalid-feedback') == -1) {
                                $('#kt_select_'+`${key}`).next().after('<div class="invalid-feedback d-block">'+`${value}`+'</div>');
                        }
                    } else {
                        if ($('[name="'+`${key}`+'"]').next().length == 0 || $('[name="'+`${key}`+'"]').next().attr('class').search('invalid-feedback') == -1) {
                            $('[name="'+`${key}`+'"]').addClass('is-invalid');
                            $('[name="'+`${key}`+'"]').after('<div class="invalid-feedback">'+`${value}`+'</div>');
                        }
                    }
                }
                for (let i = 0; i < this.names.length; i++) {
                    if (this.names[i] == 'region' || this.names[i] == 'province' || this.names[i] == 'city' || this.names[i] == 'division' || this.names[i] == 'section') {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            if ($('#kt_select_'+this.names[i]).next().next().length != 0) {
                                $('#kt_select_'+this.names[i]).next().next('.invalid-feedback').remove();
                            }
                        }
                    } else {
                        if (keys.indexOf(''+this.names[i]+'') == -1) {
                            $('[name="'+this.names[i]+'"]').removeClass('is-invalid');
                            $('[name="'+this.names[i]+'"]').next('.invalid-feedback').remove();
                        }
                    }
                }
                this.$showToast(values.toString().replace(/,/g,'</br>'), 'error');
            });

        },

        getDivision() {
            this.divisions = JSON.parse(localStorage.getItem('division'));
        },
        getSection(){
            this.sections = JSON.parse(localStorage.getItem('section'));
        },
        getRegion() {
            this.regions = JSON.parse(localStorage.getItem('region'));
        },
        getProvince() {
            this.provinces = JSON.parse(localStorage.getItem('province'));
        },
        getCity() { 
            this.cities = JSON.parse(localStorage.getItem('city'));
        },
        getBrgy() {
            this.brgys = JSON.parse(localStorage.getItem('barangay'));
        },
        currentProv() {
            this.activeProvinces = this.provinces.filter(i => i.active === 'true');
        },
        currentCity() {
            this.activeCities = this.cities.filter(i => i.active === 'true');
        },
        newRequest() {
            for (let i = 0; i < this.names.length; i++) {
                if(this.names[i] == 'section' || this.names[i] == 'province' || this.names[i] == 'city' || this.names[i] == 'brgy') {
                    $('#kt_select_'+this.names[i]).empty();                           
                }
                else if(this.names[i] == 'division' || this.names[i] == 'region'  ){
                    $('#kt_select_region').val(null).trigger("change");
                }
                else {
                    $('[name="'+this.names[i]+'"]').val(null);
                }
                $('#kt_select_division').val(null).trigger("change");
            }
            $('.details-input').attr('disabled', false);
            this.complete = false;
            this.createdAt = null;
        },
        dateConf() {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            this.maxDate = maxDate;
        },
    },
}
</script>