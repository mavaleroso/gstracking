showToast = (data,type) => {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "5000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        };

    (type == 'error')? toastr.error(data):(type == 'info')? toastr.info(data):toastr.success(data);
}

timeEng = (nTime) => {
    let time = nTime.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

    if (time.length > 1) { 
        time = time.slice(1);  
        time[3] = +time[0] < 12 ? ' AM' : ' PM'; 
        time[0] = +time[0] % 12 || 12;
    }
    return time.join (''); 
}

dateEng = (nDate) => {
    let date = new Date(nDate);
    let options = {year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('en-US', options);
}

dateTimeEng = (nDateTime) => {
    let date = new Date(nDateTime);
    let options = {year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute:'numeric'};
    return date.toLocaleDateString('en-US', options);
}