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
                    <button type="button" class="btn btn-primary font-weight-bolder">
                    <i class="ki ki-check icon-sm"></i>Save Form</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <ul class="nav nav-hover flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon flaticon2-reload"></i>
                                    <span class="nav-text">Save &amp; continue</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon flaticon2-add-1"></i>
                                    <span class="nav-text">Save &amp; add new</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon flaticon2-power"></i>
                                    <span class="nav-text">Save &amp; exit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                                            <input type="radio" name="typoRadio"/> Office
                                            <span></span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="typoRadio"/> Rental
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Program/Division/Section</label>
                                <div class="col-9">
                                    <input class="form-control form-control-solid" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Purpose of travel</label>
                                <div class="col-9">
                                    <input class="form-control form-control-solid" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Destination</label>
                                <div class="col-9">
                                    <input class="form-control form-control-solid" type="text" value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Date of Travel</label>
                                <div class="col-9">
                                    <input class="form-control form-control-solid" type="date" value="" id="example-date-input" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Time of Departure</label>
                                <div class="col-9">
                                    <input class="form-control form-control-solid" type="time" value="" id="example-time-input" />
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="my-5">
                            <div class="d-flex">
                                <h3 class="text-dark font-weight-bold mb-10">Passenger Details:</h3>
                                <div class="ml-auto">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fa fa-plus-square p-0"></i></button>
                                    <button class="btn btn-sm btn-outline-primary"><i class="fa fa-minus-square p-0"></i></button>
                                </div>
                            </div>
                            <table class="table w-100">
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
                                        <th scope="row">1</th>
                                        <td><input class="form-control form-control-solid" type="text" value="" /></td>
                                        <td><input class="form-control form-control-solid" type="text" value="" /></td>
                                        <td>                                          
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
    </div>
</template>