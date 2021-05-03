<template>
    <div>
        <page id="printArea" size="A4" class="paper-page">
            <div class="page-header mt-2">
                <img alt="Print Logo" class="print-logo d-block m-auto" src="assets/media/logos/dswd_print_logo.png">
                <span class="header-text d-block m-auto text-center">Field Office<br>Butuan City</span>
            </div>
            <div class="page-body row">
                <h5 class="col-12 text-center d-block mr-auto ml-auto mt-7">Motor Vehicle Request</h5>
                <div class="col-4 offset-8 mt-5">
                    <p class="text-right">Series: <span class="font-weight-bold text-underline">20-01-0001</span></p>
                </div>
                <div class="col-12 d-flex row mt-5">
                    <p class="col-4">Type of Motor Vehicle:</p>
                    <div class="col-3 d-flex">
                        <input class="mt-1" type="radio" name="vehicleType">
                        <label class="ml-2" for="vehicleType">Office</label>
                    </div>
                    <div class="col-3 d-flex">
                        <input class="mt-1" type="radio" name="vehicleType">
                        <label class="ml-2" for="vehicleType">Rental</label>
                    </div>
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Program / Division / Section:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Purpose of travel:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Destination:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Date of travel:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Time of departure:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 mt-5">
                    <table class="w-100">
                        <thead>
                            <tr>
                                <td class="text-center">Name of Passenger/s</td>
                                <td class="text-center">Position/Designation</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                                <td><input type="text" class="w-100 border-0 outline-0 pr-2 pl-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex mt-5">
                    <div class="col-6">
                        <p>Prepared by:</p>
                        <input type="text" class="input-text w-100">
                        <p class="text-center">Staff</p>
                    </div>
                    <div class="col-6">
                        <p>Requested by:</p>
                        <input type="text" class="input-text w-100">
                        <p class="text-center">Section/Program/Division Head</p>
                    </div>
                </div>
            </div>
            <hr class="dashed-border mt-2">
            <div class="page-footer">
                <h5 class="col-12 text-center d-block mr-auto ml-auto mt-4">Motor Vehicle Confirmation Slip</h5>
                <div class="col-12 d-flex row mt-5">
                    <p class="col-4">Motor Vehicle Description:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Motor Vehicle Plate No:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Name of Driver:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex row mt-1">
                    <p class="col-4">Confirmed No. of Passenger/s:</p>
                    <input class="input-text col-8 w-100 mb-3 mt-n2" type="text">
                </div>
                <div class="col-12 d-flex mt-7">
                    <div class="col-6">
                        <p>Accepted by:</p>
                        <input type="text" class="input-text w-100">
                        <p class="text-center">Assigned GS staff</p>
                    </div>
                    <div class="col-6">
                        <p>Approved by:</p>
                        <input type="text" class="input-text w-100">
                        <p class="text-center">GSS Head</p>
                    </div>
                </div>
            </div>
        </page>
    </div>
</template>
<script>
export default {
    mounted() {
        this.ini();
    },
    methods: {
        ini() {
            document.onkeypress = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.onmousedown = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.onkeydown = function (event) {  
                event = (event || window.event);  
                if (event.keyCode == 123) {  
                return false;  
                }  
            }  
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });

            $('.btn-print').click(function() {
                $("#printArea").printThis();
            });
        }
    },
}
</script>