<template>
    <div class="card card-custom card-sticky animate__animated animate__fadeIn" id="kt_page_sticky_card">
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
                                    <input name="destination" class="form-control form-control-solid" type="text" value="" />
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
    methods: {
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
                // submit
            } else {
                Swal.fire("Entry Field Error!", "Please fill-in all the fields to proceed.", "error");
            }
        }
    },
}
</script>