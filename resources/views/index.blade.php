@extends('pages.user.layout.homepage')

@section('title', 'Pakar Hukum')

@section('content')

    @include('pages.user.layout.partial_homepage.header')
    <section>
        <div class="container mt-3 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex flex-row align-items-center">
                    <h4 class="text-uppercase mt-1">Eligible</h4> <span class="ml-2">Pay</span>
                </div> <a href="#" class="cancel com-color">Cancel and return to website</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-0 text-success">$85.00</h5>
                    <h5 class="mb-3">Diabities Pump & Supplies</h5>
                    <div class="about">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row mt-1">
                                <h6>Insurance Responsibility</h6>
                                <h6 class="text-success font-weight-bold ml-1">$71.76</h6>
                            </div>
                            <div class="d-flex flex-row align-items-center com-color"> <i class="fa fa-plus-circle"></i>
                                <span class="ml-1">Add Insurer card</span>
                            </div>
                        </div>
                        <p>Insurance claim and all neccessary dependencies will be submitted to your insurer for the covered
                            portion of this order.</p>
                        <div class="p-2 d-flex justify-content-between bg-pay align-items-center"> <span>Aetna - Open
                                Access</span> <span>OAP</span> </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row mt-1">
                                <h6>Patient Balance</h6>
                                <h6 class="text-success font-weight-bold ml-1">$13.24</h6>
                            </div>
                            <div class="d-flex flex-row align-items-center com-color"> <i class="fa fa-plus-circle"></i>
                                <span class="ml-1">Add Payment card</span>
                            </div>
                        </div>
                        <p>Insurance claim and all neccessary dependencies will be submitted to your insurer for the covered
                            portion of this order.</p>
                        <div class="d-flex flex-column"> <label class="radio"> <input type="radio" name="gender"
                                    value="MALE" checked>
                                <div class="d-flex justify-content-between"> <span>VISA</span> <span>**** 5645</span> </div>
                            </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE">
                                <div class="d-flex justify-content-between"> <span>MASTER CARD</span> <span>**** 5069</span>
                                </div>
                            </label> </div>
                        <div class="buttons"> <button class="btn btn-success btn-block">Proceed to payment</button> </div>
                    </div>
                </div>
                <div class="col-md-2"> </div>
                <div class="col-md-4">
                    <div class="bg-pay p-3"> <span class="font-weight-bold">Order Recap</span>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">contracted Price</span>
                            <span>$186.86</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Amount Deductible</span>
                            <span>$0.0</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Coinsurance(0%)</span>
                            <span>+
                                $0.0</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Copayment </span> <span>+
                                40.00</span> </div>
                        <hr>
                        <div class="d-flex justify-content-between mt-2"> <span class="lh-16 fw-500">Total Deductible,<br>
                                Coinsurance and copay </span> <span>$40.00</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span class="lh-16 fw-500">Maximum out-of-pocket
                                <br>
                                on insurance policy</span> <span>$40.00</span> </div>
                        <hr>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Insurance Responsibility
                            </span>
                            <span>$71.76</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Patient Balance </span>
                            <span>$13.24</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Total </span> <span
                                class="text-success">$85.00</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
