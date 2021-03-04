'use strict';
// Class definition

var KTDatatableModal = function() {

    var initDatatable = function() {
        var el = $('#kt_datatable');

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
                scroll: false,
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
                template: function(row) {
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
            $('#kt_datatable_modal').modal('show');
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
