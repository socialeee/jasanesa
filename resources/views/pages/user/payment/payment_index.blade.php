@extends('pages.user.layout.homepage')

@section('title', 'payment')

@section('content')

    @include('pages.user.layout.partial_homepage.header')
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="text-uppercase mt-1">Eligible</h4>
                            <span class="ms-2 me-3">Pay</span>
                        </div>
                        <a href="#">Cancel and return to the website</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-xl-6 mb-4 mb-md-0">
                            <h5 class="mb-0 text-success">$85.00</h5>
                            <h5 class="mb-3">Diabites Pump & Supplies</h5>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row mt-1">
                                        <h6>Insurance Responsibility</h6>
                                        <h6 class="fw-bold text-success ms-1">$71.76</h6>
                                    </div>
                                    <div class="d-flex flex-row align-items-center text-primary">
                                        <span class="ms-1">Add Insurer card</span>
                                    </div>
                                </div>
                                <p>
                                    Insurance claim and all neccessary dependencies will be submitted to your
                                    insurer for the covered portion of this order.
                                </p>
                                <div class="p-2 d-flex justify-content-between align-items-center"
                                    style="background-color: #eee;">
                                    <span>Aetna - Open Access</span>
                                    <span>Aetna - OAP</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row mt-1">
                                        <h6>Patient Balance</h6>
                                        <h6 class="fw-bold text-success ms-1">$13.24</h6>
                                    </div>
                                    <div class="d-flex flex-row align-items-center text-primary">
                                        <span class="ms-1">Add Payment card</span>
                                    </div>
                                </div>
                                <p>
                                    Insurance claim and all neccessary dependencies will be submitted to your
                                    insurer for the covered portion of this order.
                                </p>
                                <div class="d-flex flex-column mb-3">
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <input type="radio" class="btn-check" name="options" id="option1"
                                            autocomplete="off" />
                                        <label class="btn btn-outline-primary btn-lg" for="option1">
                                            <div class="d-flex justify-content-between">
                                                <span>VISA </span>
                                                <span>**** 5436</span>
                                            </div>
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option2"
                                            autocomplete="off" checked />
                                        <label class="btn btn-outline-primary btn-lg" for="option2">
                                            <div class="d-flex justify-content-between">
                                                <span>MASTER CARD </span>
                                                <span>**** 5038</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    {{-- <div class="btn btn-success btn-lg btn-block">Proceed to payment</div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1 offset-xl-2">
                            <div class="p-3" style="background-color: #eee;">
                                <span class="fw-bold">Order Recap</span>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>contracted Price</span> <span>$186.86</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Amount Deductible</span> <span>$0.0</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Coinsurance(0%)</span> <span>+ $0.0</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Copayment </span> <span>+ 40.00</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="lh-sm">Total Deductible,<br />
                                        Coinsurance and copay
                                    </span>
                                    <span>$40.00</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="lh-sm">Maximum out-of-pocket <br />
                                        on insurance policy</span>
                                    <span>$40.00</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Insurance Responsibility </span> <span>$71.76</span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Patient Balance </span> <span>$13.24</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between mt-2">
                                    <span>Total </span> <span class="text-success">$85.00</span>
                                </div>
                            </div>
                            <br>
                            <div class="btn btn-success btn-lg btn-block">Proceed to payment</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1 offset-xl-2">
                <div class="p-3" style="background-color: #eee;">
                    <span class="fw-bold">Order Recap</span>
                    <div class="d-flex justify-content-between mt-2">
                        <span>contracted Price</span> <span>$186.86</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Amount Deductible</span> <span>$0.0</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Coinsurance(0%)</span> <span>+ $0.0</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Copayment </span> <span>+ 40.00</span>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between mt-2">
                        <span class="lh-sm">Total Deductible,<br />
                            Coinsurance and copay
                        </span>
                        <span>$40.00</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span class="lh-sm">Maximum out-of-pocket <br />
                            on insurance policy</span>
                        <span>$40.00</span>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between mt-2">
                        <span>Insurance Responsibility </span> <span>$71.76</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Patient Balance </span> <span>$13.24</span>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between mt-2">
                        <span>Total </span> <span class="text-success">$85.00</span>
                    </div>
                </div>
                <br>
                <div class="btn btn-success btn-lg btn-block">Proceed to payment</div>
            </div>
        </div>
    </section>
    {{-- <section id="services" class="services section-bg">
        <div class="container py-5">
            <!-- For demo purpose -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-6">Bootstrap Payment Forms</h1>
                </div>
            </div> <!-- End -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                            class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card
                                        </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i
                                                class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i
                                                class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form role="form" onsubmit="event.preventDefault()">
                                        <div class="form-group"> <label for="username">
                                                <h6>Card Owner</h6>
                                            </label> <input type="text" name="username" placeholder="Card Owner Name"
                                                required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Card number</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber"
                                                    placeholder="Valid card number" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted">
                                                        <i class="fab fa-cc-visa mx-1"></i> <i
                                                            class="fab fa-cc-mastercard mx-1"></i> <i
                                                            class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Expiration Date</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM"
                                                            name="" class="form-control" required> <input
                                                            type="number" placeholder="YY" name=""
                                                            class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                        title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="button"
                                                class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment
                                            </button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- Paypal info -->
                            <div id="paypal" class="tab-pane fade pt-3">
                                <h6 class="pb-2">Select your paypal account type</h6>
                                <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio"
                                            checked> Domestic </label> <label class="radio-inline"> <input type="radio"
                                            name="optradio" class="ml-5">International </label></div>
                                <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log
                                        into my Paypal</button> </p>
                                <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure
                                    gateway for payment. After completing the payment process, you will be redirected back
                                    to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- bank transfer info -->
                            <div id="net-banking" class="tab-pane fade pt-3">
                                <div class="form-group "> <label for="Select Your Bank">
                                        <h6>Select your Bank</h6>
                                    </label> <select class="form-control" id="ccmonth">
                                        <option value="" selected disabled>--Please select your Bank--</option>
                                        <option>Bank 1</option>
                                        <option>Bank 2</option>
                                        <option>Bank 3</option>
                                        <option>Bank 4</option>
                                        <option>Bank 5</option>
                                        <option>Bank 6</option>
                                        <option>Bank 7</option>
                                        <option>Bank 8</option>
                                        <option>Bank 9</option>
                                        <option>Bank 10</option>
                                    </select> </div>
                                <div class="form-group">
                                    <p> <button type="button" class="btn btn-primary "><i
                                                class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                                </div>
                                <p class="text-muted">Note: After clicking on the button, you will be directed to a secure
                                    gateway for payment. After completing the payment process, you will be redirected back
                                    to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}
    @include('pages.user.layout.partial_homepage.footer')
