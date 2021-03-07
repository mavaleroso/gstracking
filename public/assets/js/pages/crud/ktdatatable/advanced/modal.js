// 'use strict';
// Class definition

var KTDatatableModal = function() {

    var initDatatable = function() {
        var el = $('#kt_datatable');
        var count = 0;

        var datatable = el.KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: HOST_URL + '/api/request_data',
                        method: 'GET',
                    },
                },
                pageSize: 10, // display 20 records per page
                
            },

            // layout definition
            layout: {
                theme: 'default',
                scroll: true,
                height: null,
                footer: false,
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'id',
                title: 'ID',
                width: 35,
                template: () => {
                    count += 1;
                    return count;
                }
            }, {
                field: 'serial_code',
                title: 'code',
                textAlign: 'center'
            }, {
                field: 'type_vehicle',
                title: 'Vehicle Type',
            }, {
                field: 'department',
                title: 'Department',
            }, {
                field: 'purpose',
                title: 'Purpose',
            }, {
                field: 'travel_date',
                title: 'Travel Date',
                textAlign: 'center',
                template: (row) => {
                    var date = new Date(row.travel_date);
                    var options = {year: 'numeric', month: 'long', day: 'numeric' };
                    return date.toLocaleDateString('en-US', options);
                }
            }, {
                field: 'depart_time',
                title: 'Depart Time',
                textAlign: 'center',
                template: (row) => {
                    let time = row.depart_time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

                    if (time.length > 1) { 
                        time = time.slice(1);  
                        time[3] = +time[0] < 12 ? ' AM' : ' PM'; 
                        time[0] = +time[0] % 12 || 12;
                    }
                    return time.join (''); 
                }
            }, {
                field: 'is_status',
                title: 'Status',
                // callback function support for column rendering
                template: (row) => {
                    var status = {
                        1: {
                            'title': 'Pending',
                            'class': ' label-light-warning'
                        },
                        2: {
                            'title': 'Approved',
                            'class': ' label-light-info'
                        },
                        3: {
                            'title': 'Completed',
                            'class': ' label-light-success'
                        },
                        4: {
                            'title': 'Declined',
                            'class': ' label-light-danger'
                        }
                    };
                    return '<span class="label label-lg font-weight-bold ' + status[row.is_status].class + ' label-inline">' + status[row.is_status].title + '</span>';
                },
            }, {
                field: 'created_at',
                title: 'Date Created',
                order: 'desc',
                width: 130,
                textAlign: 'center',
                template: (row) => {
                    var date = new Date(row.created_at);
                    var options = {year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute:'numeric'};
                    return date.toLocaleDateString('en-US', options);
                }
            }, {
                field: 'fullname',
                title: 'Requested By',
            },{
                field: 'Actions',
                width: 130,
                title: 'Actions',
                sortable: false,
                overflow: 'visible',
                textAlign: 'left',
                autoHide: false,
                template: (row) => {
                    return '\
		                  <button data-record-id="' + row.id + '" class="btn btn-sm btn-clean" title="View records">\
		                      <i class="flaticon2-document"></i> Details\
		                  </button>';
                },
            }],
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'is_status');
        });

        // $('#kt_datatable_search_status').selectpicker();

        datatable.on('click', '[data-record-id]', function() {
            let recordID = $(this).data('record-id');
            let recordData = datatable.dataSet.filter(obj => {
                return obj.RecordID == recordID;
            }).end();
            let mTitle = $('#kt_datatable_modal .modal-title .m-title');
            let mDate = $('#kt_datatable_modal .modal-date .m-date');
            let mStatus = $('#kt_datatable_modal .modal-status');
            let mSubtitle = $('#kt_datatable_modal .modal-title .text-muted');
            let mdSubtitle = $('#kt_datatable_modal .modal-date .text-muted');
            let mBody = $('#kt_datatable_modal .modal-body');

            switch (recordData[0].is_status) {
                case 1:
                        mStatus.addClass('label-warning');
                        mStatus.text('Pending');    
                    break;
            }
            mTitle.text(recordData[0].serial_code);
            mDate.text(recordData[0].created_at);
            mSubtitle.text('Reference Code');
            mdSubtitle.text('Date Created');
            mBody.html('<form class="form">\
                <div class="card-body row">\
                    <h5 class="col-lg-12 text-dark font-weight-bold mb-10">Requestor Details:</h5>\
                    <div class="col-lg-6">\
                        <div class="form-group">\
                            <label>Type of Motor Vehicle</label>\
                            <div class="radio-inline">\
                                <label class="radio radio-solid">\
                                    <input type="radio" name="travel_radio" checked="checked" disabled="disabled" value="Office"/> Office\
                                    <span></span>\
                                </label>\
                                <label class="radio radio-solid">\
                                    <input type="radio" name="travel_radio" disabled="disabled" value="Rental"/> Rental\
                                    <span></span>\
                                </label>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                            <label>Purpose of Travel</label>\
                            <input type="text" name="pur_travel" class="form-control" disabled="disabled" />\
                        </div>\
                        <div class="form-group">\
                            <label>Date of Travel</label>\
                            <input type="text" name="date_travel" class="form-control" disabled="disabled" />\
                        </div>\
                        <div class="form-group">\
                            <label>Time of Departure</label>\
                            <input type="text" name="time_depart" class="form-control" disabled="disabled" />\
                        </div>\
                    </div>\
                    <div class="col-lg-6">\
                        <div class="form-group">\
                            <label>Destination</label>\
                            <input type="text" class="form-control mt-4" disabled="disabled" />\
                            <span class="form-text text-muted">Region</span>\
                            <input type="text" class="form-control mt-4" disabled="disabled" />\
                            <span class="form-text text-muted">Province</span>\
                            <input type="text" class="form-control mt-4" disabled="disabled" />\
                            <span class="form-text text-muted">City</span>\
                            <input type="text" class="form-control mt-4" disabled="disabled" />\
                            <span class="form-text text-muted">Barangay</span>\
                        </div>\
                    </div>\
                    <div class="col-lg-12">\
                        <div class="separator separator-dashed my-10"></div>\
                        <div class="">\
                            <div class="d-flex">\
                                <h5 class="text-dark font-weight-bold mb-10">Passenger Details:</h5>\
                                <div class="ml-auto" style="display:none;">\
                                    <button class="btn btn-sm btn-outline-primary" @click="addRow"><i class="fa fa-plus-square p-0"></i></button>\
                                    <button class="btn btn-sm btn-outline-primary" @click="removeRow"><i class="fa fa-minus-square p-0"></i></button>\
                                </div>\
                            </div>\
                            <input id="pax-total" type="hidden" name="pax_total" value="1">\
                            <table id="passenger-tbl" class="table w-100">\
                                <thead>\
                                    <tr>\
                                        <th scope="col" class="text-center">#</th>\
                                        <th scope="col" class="text-center">Name of Passenger/s</th>\
                                        <th scope="col" class="text-center">Position/Designation</th>\
                                        <th scope="col" class="text-center" style="display:none;">Action</th>\
                                    </tr>\
                                </thead>\
                                <tbody>\
                                    <tr>\
                                        <td scope="row" class="text-center">1</td>\
                                        <td><input name="pax_name_1" class="form-control" type="text" disabled="disabled"/></td>\
                                        <td><input name="pax_des_1" class="form-control" type="text" disabled="disabled"/></td>\
                                        <td style="display:none;"></td>\
                                    </tr>\
                                </tbody>\
                            </table>\
                        </div>\
                    </div>\
                </div>\
            </form>');
            $('#kt_datatable_modal').modal('show');

            $("input[name=travel_radio][value='"+recordData[0].type_vehicle+"']").prop("checked",true);
            $("input[name=pur_travel]").val(recordData[0].purpose);
            $("input[name=date_travel]").val(recordData[0].travel_date);
            $("input[name=time_depart]").val(recordData[0].depart_time);
        });

    };

    return {
        // public functions
        init: function() {
            initDatatable();
        }
    };
}();

jQuery(document).ready(function() {
    KTDatatableModal.init();
});
