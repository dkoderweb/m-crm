@extends('layouts.master')
@section('content')
<div class="title-header">
    <h1 class="crm-page-title cursor-pointer" onclick="window.history.back();"><i class="fa-solid fa-angle-left color-blue"></i> add buyer</h1>
    <div class="title-right-row">
        <a href="add-seller.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add seller</a>
    </div>
</div>
<form action="{{ route('properties.add_seller.store') }}" method="POST" id="seller_form">
    @csrf
    <input type="hidden" name="form_type" value="buyer">
<div class="dashboard-box mb-0">
    <h2 class="detail-box-title">buyer detail</h2>
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">full name <span class="required-text">*</span></label>
                <input type="text" class="comn-form-control" name="full_name" value="Kimberly Mastrangelo">
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">mobile number <span class="required-text">*</span></label>
                <input type="text" class="comn-form-control" name="owner_mobile_no_1" value="+91(818) 313-7673">
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">buyer status <span class="required-text">*</span></label>
                <ul class="properties-detail-list properties-detail-inline-list buyer-status-list">
                    <li>
                        <input type="radio" value="cold" name="buyerStatusRadio" id="cold">
                        <label for="cold">cold</label>
                    </li>
                    <li>
                        <input type="radio" value="warm" name="buyerStatusRadio" id="warm">
                        <label for="warm">warm</label>
                    </li>
                    <li>
                        <input type="radio" value="hot" name="buyerStatusRadio" id="hot">
                        <label for="hot">hot</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="comn-form-group">
                <label class="comn-form-lable">address </label>
                <input type="text" class="comn-form-control" name="address_note_2" value="199 Oakway Lane, Woodland Hills, CA 91303">
            </div>
        </div> 
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">add properties type</label>
                <button type="button" class="comn-btn unit_modal_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i>add</button>
                <div class="modal fade add-unit-modal" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="detail-box-title mb-0">Add unit/properties</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="accordion add-unit-accordion" id="accordionAddUnit">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#addUnitOne" aria-expanded="true" aria-controls="addUnitOne">Residential flat/bunglow <span class="plus-minus-icon"></span></button>
                                        </h2>
                                        <div class="hidden_div">
                                            
                                        </div>
                                        <div id="addUnitOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAddUnit">
                                            <div class="accordion-body">
                                                <span class="body-hr"></span>
                                                <ul class="properties-detail-list">
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="duplex/penthouse" id="duplexpenthouse" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="duplexpenthouse"><span>duplex/penthouse</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="row house" id="rowhouse" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="rowhouse"><span>row house</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="row house" id="flatapartment" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="flatapartment"><span>row house</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="bunglow" id="bunglow" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="bunglow"><span>bunglow</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="farm house bunglow" id="farmhousebunglow" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="farmhousebunglow"><span>farm house bunglow</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="residentialFlatBunglowRadio" value="Residential flat/bunglow" id="srsidentialflatbunglow" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="srsidentialflatbunglow"><span>Residential flat/bunglow</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addUnitTwo" aria-expanded="false" aria-controls="addUnitTwo">commercial space<span class="plus-minus-icon"></span></button>
                                        </h2>
                                        <div id="addUnitTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAddUnit">
                                            <div class="accordion-body">
                                                <span class="body-hr"></span>
                                                <ul class="properties-detail-list">
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="office" id="office" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="office"><span>office</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="shop" id="shop" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="shop"><span>shop</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="showroom" id="showroom" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="showroom"><span>showroom</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="industrial land" id="industrialland" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="industrialland"><span>industrial land</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="warehouse ready" id="warehouseready" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="warehouseready"><span>warehouse ready</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="commercialSpaceRadio" value="warehouse plot" id="warehouseplot" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="warehouseplot"><span>warehouse plot</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addUnitThree" aria-expanded="false" aria-controls="addUnitThree">plot/land<span class="plus-minus-icon"></span></button>
                                        </h2>
                                        <div id="addUnitThree" class="accordion-collapse collapse" data-bs-parent="#accordionAddUnit">
                                            <div class="accordion-body">
                                                <span class="body-hr"></span>
                                                <ul class="properties-detail-list">
                                                    <li>
                                                        <input type="radio" name="plotandRadio" value="NA bunglow plot" id="NAbunglowplot" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="NAbunglowplot"><span>NA bunglow plot</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="plotandRadio" value="farm land" id="farmland" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="farmland"><span>farm land</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="plotandRadio" value="farm/agriculture land" id="farmagricultureland" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="farmagricultureland"><span>farm/agriculture land</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="plotandRadio" value="2nd home/holiday home plot" id="2ndhomeholidayhomeplot" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="2ndhomeholidayhomeplot"><span>2nd home/holiday home plot</span></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="plotandRadio" value="land for project development" id="landforprojectdevelopment" data-bs-toggle="collapse" data-bs-target="#addUnitFour">
                                                        <label for="landforprojectdevelopment"><span>land for project development</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" id="propertyDetailsItem">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addUnitFour" aria-expanded="false" aria-controls="addUnitFour">property details <span class="plus-minus-icon"></span></button>
                                        </h2>
                                        <div id="addUnitFour" class="accordion-collapse collapse" data-bs-parent="#accordionAddUnit">
                                            <div class="accordion-body">
                                                <span class="body-hr"></span>
                                                <ul class="properties-detail-list properties-detail-inline-list mb-3">
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="1 BHK" id="1bhk">
                                                        <label for="1bhk">1 BHK</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="2 BHK" id="2bhk">
                                                        <label for="2bhk">2 BHK</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="3 BHK" id="3bhk">
                                                        <label for="3bhk">3 BHK</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="4 BHK" id="4bhk">
                                                        <label for="4bhk">4 BHK</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="5 BHK" id="5bhk">
                                                        <label for="5bhk">5 BHK</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="propertyDetailsRadio" value="6 BHK" id="6bhk">
                                                        <label for="6bhk">6 BHK</label>
                                                    </li>
                                                </ul>
                                                <div class="row row-gap-10">
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">total number of unit</label>
                                                            <input type="number" name="total_no_unit"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">min carpet area (sq.ft.)</label>
                                                            <input type="number" name="min_carpet_area"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">max carpet area (sq.ft.)</label>
                                                            <input type="number" name="max_carpet_area"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">saleable/chargeable area (sq.ft.)</label>
                                                            <input type="number" name="saleable_area"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">rate per (sq.ft.)</label>
                                                            <input type="number" name="rate_per"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">price of the unit</label>
                                                            <input type="number" name="price_per_unit"  class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="text-end">
                                                            <button class="comn-btn remove-round-effect-btn" id="additional-pricing-btn"><i class="fa-solid fa-plus"></i>Additional pricing</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="additional-pricing-row">
                                                    <div class="row row-gap-10">
                                                        <div class="col-12">
                                                            <h3 class="detail-box-title mt-3">Additional pricing details</h3>
                                                            <div class="comn-form-group">
                                                                <label class="comn-form-lable">stamp duty <span class="required-text">(%)</span></label>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="stamp_duty_form" class="comn-form-control mobile-mb-5" placeholder="-">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="stamp_duty_to" class="comn-form-control" placeholder="-">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comn-form-group">
                                                                <label class="comn-form-lable">registration</label>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="registration_form" class="comn-form-control mobile-mb-5" placeholder="-">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="registration_to" class="comn-form-control" placeholder="-">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comn-form-group">
                                                                <label class="comn-form-lable">GST <span class="required-text">(%)</span></label>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="gst_form" class="comn-form-control mobile-mb-5" placeholder="-">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="gst_to" class="comn-form-control" placeholder="-">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comn-form-group">
                                                                <label class="comn-form-lable">infra structure development</label>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="infra_structure_development_form" class="comn-form-control mobile-mb-5" placeholder="-">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="infra_structure_development_to" class="comn-form-control" placeholder="-">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comn-form-group">
                                                                <label class="comn-form-lable">maintenance</label>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="price_per_unit_form" class="comn-form-control mobile-mb-5" placeholder="-">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="number"  name="price_per_unit_to" class="comn-form-control" placeholder="-">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comn-btn-row justify-content-end">
                                                                <button class="comn-btn comn-btn-px30 comn-border-btn" id="additional-pricing-row-delete">cancel</button>
                                                                {{-- <button class="comn-btn comn-btn-px30" id="additional-pricing-data-row-add"><i class="fa-solid fa-plus"></i>add</button> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="additional-pricing-data">
                                                    <div class="properties-detail-comn-box properties-detail-comn-box-bg-color">
                                                        <h2 class="detail-box-title detail-box-title-with-boder">Additional pricing details</h2>
                                                        <ul class="properties-detail-list">
                                                            <li>stamp duty : <span>65.5%</span></li>
                                                            <li>total stamp duty: <span>53%</span></li>
                                                            <li>registration : <span>686</span></li>
                                                            <li>GST : <span>35.3%</span></li>
                                                            <li>Total GST : <span>29</span></li>
                                                            <li>infra structure development : <span>6,87,248</span></li>
                                                            <li>maintenance : <span>5771</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="edit-delete-comn-row">
                                                        <button class="edit-delete-btn" id="additional-pricing-edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        <button class="edit-delete-btn" id="additional-pricing-delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-10">
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">ready for possesion</label>
                                                            <select class="comn-form-control" name="ready_for_possesion">
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">Future date</label>
                                                            <input type="date" class="comn-form-control" name="future_date" onClick="this.showPicker()" placeholder="DD/MM/YYY">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="comn-btn comn-btn-px30 comn-border-btn" data-bs-dismiss="modal">cancel</button>
                                <button type="button" class="comn-btn comn-btn-px30" id="unit_submit">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="unit_show_box">
           
        </div>  
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">budget</label>
                <div class="main budget-price-row">
                    <div class="budget-counter-row">
                        <button class="btn-plusminus" data-dir="minus"><i class="fa-solid fa-minus"></i></button>
                        <input type="text" id="budget-price-value" name="budget" placeholder="30,50,000" />
                        <button class="btn-plusminus" data-dir="plus"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div id="budget-price-slider"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">select purpose</label>
                <select class="comn-form-control" name="purpose">
                  <option>Self use</option>
                  <option>Investment</option>
                  <option>Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">loan requirement</label>
                <select class="comn-form-control" name="loan_req">
                  <option>yes</option>
                  <option>no</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">ready for possesion</label>
                <select class="comn-form-control" name="ready_for_possesion">
                  <option>yes</option>
                  <option>no</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">Future date</label>
                <input type="date" class="comn-form-control" onclick="this.showPicker()" placeholder="DD/MM/YYY" name="future_date">
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">monthly income</label>
                <input type="text" class="comn-form-control" value="70,000" name="monthly_income">
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">profession</label>
                <select class="comn-form-control" name="profession">
               <option>businessman</option>
               <option>government employee</option>
               <option>teacher</option>
               <option>farmer</option>
               <option>private job</option>
               <option>lawyer/advocate</option>
               <option>shop owner</option>
               <option>software business</option>
               <option>other</option>
            </select>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="comn-form-group">
                <label class="comn-form-lable">Add note</label>
                <input type="text" class="comn-form-control" placeholder="-" name="address_note_1">
            </div>
        </div>
        <div class="col-12">
            <div class="text-end">
                <button class="comn-btn comn-btn-px30">Submit</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/seller_&_buyer_form.js') }}"></script>
@endsection