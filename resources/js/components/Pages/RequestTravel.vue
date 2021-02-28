<template>
    <div class="request-travel card card-custom card-sticky animate__animated animate__fadeIn" id="kt_page_sticky_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Motor Vehicle
                <i class="mr-2"></i>
                <small class="">Request Form</small></h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-light-primary font-weight-bolder mr-2">
                <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary font-weight-bolder" @click="saveForm">
                    <i class="ki ki-check icon-sm"></i>Save Form</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Form-->
            <form class="form" id="kt_form">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div class="my-5">
                            <h3 class="text-dark font-weight-bold mb-10">Requestor Info:</h3>
                            <div class="form-group row">
                                <label class="col-3">Type of Motor Vehicle</label>
                                <div class="col-9">
                                    <div class="checkbox-inline">
                                        <label class="radio mr-2">
                                            <input type="radio" name="typoRadio" value="Office"/> Office
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="typoRadio" value="Rental"/> Rental
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Program/Division/Section</label>
                                <div class="col-9">
                                    <input name="prog-div-sec" class="form-control form-control-solid" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Purpose of travel</label>
                                <div class="col-9">
                                    <input name="pur-travel" class="form-control form-control-solid" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Destination</label>
                                <div class="col-9">
                                    <select class="form-control select2" id="kt_select_region" name="param">
                                        <option label="Label"></option>
                                        <option v-for="region in regions" :key="region.id" :value="region.id">{{ region.region_name }}</option>
                                    </select>
                                    <select class="form-control select2 kt_select2_3" id="kt_select_province" name="param" multiple="multiple">
                                        <option v-for="province in provinces" :key="province.id" :value="province.id" @click="removeProv(province.id)">{{ province.province_name }}</option>
                                    </select>
                                    <select class="form-control select2 kt_select2_3" id="kt_select_city" name="param" multiple="multiple">
                                        <optgroup v-for="activeProv in activeProvinces" :key="activeProv.id" :label="activeProv.province_name">
                                            <option v-for="city in cities.filter(i=>i.province_id == activeProv.id)" :key="city.id" :value="city.id">{{ city.city_name }}</option>
                                        </optgroup>
                                    </select>
                                    <select class="form-control select2 kt_select2_3" id="kt_select_brgy" name="param" multiple="multiple">
                                        <optgroup v-for="activeCity in activeCities" :key="activeCity.id" :label="activeCity.city_name">
                                            <option v-for="brgy in brgys.filter(i=>i.city_id == activeCity.id)" :key="brgy.id" :value="brgy.id">{{ brgy.brgy_name }}</option>
                                        </optgroup>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Date of Travel</label>
                                <div class="col-9">
                                    <input name="date-travel" class="form-control form-control-solid" type="date" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Time of Departure</label>
                                <div class="col-9">
                                    <input name="time-depart" class="form-control form-control-solid" type="time" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="my-5">
                            <div class="d-flex">
                                <h3 class="text-dark font-weight-bold mb-10">Passenger Details:</h3>
                                <div class="ml-auto">
                                    <button class="btn btn-sm btn-outline-primary" @click="addRow"><i class="fa fa-plus-square p-0"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" @click="removeRow"><i class="fa fa-minus-square p-0"></i></button>
                                </div>
                            </div>
                            <input id="pax-total" type="hidden" name="pax-total" value="1">
                            <table id="passenger-tbl" class="table w-100">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Name of Passenger/s</th>
                                        <th scope="col" class="text-center">Position/Designation</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row" class="text-center">1</td>
                                        <td><input name="pax-name-1" class="form-control form-control-solid" type="text"/></td>
                                        <td><input name="pax-des-1" class="form-control form-control-solid" type="text"/></td>
                                        <td></td>
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            regions: [],
            provinces: [],
            cities: [],
            brgys: [],
            activeProvinces: [],
            activeCities: []
        }
    },
    created() {
        this.getRegion();
    },
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            var scripts = [
            "/assets/js/pages/crud/forms/widgets/select2.js"
            ];
            scripts.forEach(script => {
                let tag = document.createElement("script");
                tag.setAttribute("src", script);
                document.getElementById("kt_page_sticky_card").appendChild(tag);
            });

            setTimeout(()=>{
                $('.select2-container').addClass("mb-2");
            }, 1000);

            $(() => { 
                $('#kt_select_region').on('change', () => {
                    let id  = $('#kt_select_region').val();
                    this.getProvince(id);
                });

                $('#kt_select_province').on('change', () => {
                    let id  = $('#kt_select_province').val();
                    id = id.map(i=>Number(i));
                    this.provinces.map(i=> {
                        if (id.indexOf(i.id) != -1) {
                            i.active="true";
                        } else {
                            i.active="false";
                        }
                    });
                    if(id.length != 0) {
                        this.getCity(id);
                        this.currentProv();             
                    }
                });

                $('#kt_select_city').on('change', () => {
                    let id  = $('#kt_select_city').val();
                    id = id.map(i=>Number(i));
                    this.cities.map(i=> {
                        if (id.indexOf(i.id) != -1) {
                            i.active="true";
                        } else {
                            i.active="false";
                        }
                    });
                    if(id.length != 0) {
                        this.getBrgy(id);
                        this.currentCity();
                    }
                });
            });
        },
        addRow(event) {
            event.preventDefault();
            let lastTr = parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text());
            lastTr += 1;
            $('#passenger-tbl tbody').append('<tr><td scope="row" class="text-center">'+lastTr+'</td><td><input name="pax-name-'+lastTr+'" class="form-control form-control-solid" type="text" /></td><td><input name="pax-des-'+lastTr+'" class="form-control form-control-solid" type="text" /></td><td></td></tr>');
            $('#pax-total').val(lastTr);
        },
        removeRow(event) {
            event.preventDefault();
            let lastTr = $('#passenger-tbl tbody tr:eq(-1)');
            if(lastTr.find('td:eq(0)').text() != '1') {
                lastTr.remove();
            }
            $('#pax-total').val(parseInt($('#passenger-tbl tbody tr:eq(-1) td:eq(0)').text()));
        },
        saveForm() {
            let requestform = $('#kt_form').serialize();
            if ((requestform.search('=&') == -1) && (requestform[requestform.length - 1] != '=')) {
                console.log(requestform);
            } else {
                Swal.fire("Entry Field Error!", "Please fill-in all the fields to proceed.", "error");
            }
        },
        getRegion() {
            axios.get("/api/regions_data").then(response => {
                this.regions = response.data;
            });
        },
        getProvince(id) {
            axios.get("/api/provinces_data", {params: {id: id}}).then(response => {
                this.provinces = response.data;
                this.provinces.map(i=>i.active="false")
            });
        },
        getCity(id) {
            axios.get("/api/cities_data", {params: {id: id}}).then(response => {
                this.cities = response.data;
                this.cities.map(i=>i.active="false")
            });
        },
        getBrgy(id) {
            axios.get("/api/brgys_data", {params: {id: id}}).then(response => {
                this.brgys = response.data;
            });
        },
        currentProv() {
            this.activeProvinces = this.provinces.filter(i => i.active === 'true');
        },
        currentCity() {
            this.activeCities = this.cities.filter(i => i.active === 'true');
        },
        removeProv(id) {
            alert(id);
        }
    },
}
</script>