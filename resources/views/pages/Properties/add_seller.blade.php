@extends('layouts.master')
@section('content') 
<div class="title-header">
    <h1 class="crm-page-title cursor-pointer" onclick="window.history.back();"><i class="fa-solid fa-angle-left color-blue"></i> add seller</h1>
    <div class="title-right-row">
        <a href="add-buyer.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add buyer</a>
    </div>
</div>
<form action="{{ route('properties.add_seller.store') }}" method="POST" id="seller_form" enctype="multipart/form-data"> 
    @csrf
    <input type="hidden" name="form_type" value="seller">
    <div class="dashboard-box mb-0"> 
        <div id="addSellerForm">
            <ul class="nav nav-progress">
                <li class="nav-item">
                    <a class="nav-link" href="#property-details">
                        <div class="num">1</div>
                        property detail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#property-additional-info">
                        <span class="num">2</span> property additional info
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#owner-info">
                        <span class="num">3</span> owner info
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="property-details" class="tab-pane" role="tabpanel" aria-labelledby="property-details">
                    <div class="want-to-sell-row">
                        <aside class="detail-box-title">i want to sell :</aside>
                        <div class="want-to-sell-radio">
                            <label for="resaleProperty"><input type="radio" name="iWantToSellRadio" value="resale_property"  id="resaleProperty" checked>resale property</label>
                            <label for="developerProperty"><input type="radio" name="iWantToSellRadio" value="builder"  id="developerProperty">builder / developer property</label>
                        </div>
                    </div>
                    <div class="row no-of-unit-row">
                        <div class="col-12">
                            <h2 class="detail-box-title">no. of units available to sale</h2>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">enter no. of units <span class="required-text">*</span></label>
                                <input type="number" name="no_of_units" id="no_of_units" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="detail-box-title">property / project address :</h2>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">country <span class="required-text">*</span></label>
                                <input type="text" name="country" name="country" class="comn-form-control" placeholder="india">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">state <span class="required-text">*</span></label>
                                <input type="text" name="state" class="comn-form-control" placeholder="gujarat">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">district <span class="required-text">*</span></label>
                                <input type="text" name="district" class="comn-form-control" placeholder="vadodara">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">taluka / tehsil</label>
                                <input type="text" name="taluka" class="comn-form-control" placeholder="vadodara">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">city / town / locality</label>
                                <input type="text" name="city" class="comn-form-control" placeholder="vadodara">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">landmark</label>
                                <input type="text" name="landmark" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">pin code</label>
                                <input type="number" name="pin_code" class="comn-form-control" placeholder="390000">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">project / building name <span class="required-text">*</span></label>
                                <input type="text" name="project_building_name" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">subproject name</label>
                                <input type="text" name="subproject_name" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">developer / builder name</label>
                                <input type="text" name="developer_name" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">add units/properties</label>
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
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-12">
                                                                        <label class="comn-form-lable">Image</label>
                                                                        <input type="file" class="comn-form-control" name="property_image" accept="image/*" onchange="loadFile(event)">
                                                                        <img id="output"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-gap-10">
                                                                    <div class="col-md-12">
                                                                        <label class="comn-form-lable">Broucher</label>
                                                                        <input type="file" name="broucher" id="broucher" class="comn-form-control" >
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
                    </div>
                </div>
                <div id="property-additional-info" class="tab-pane" role="tabpanel" aria-labelledby="property-additional-info">
                    <label class="detail-box-title rera-title-text" for="reraregistered">rera registered : <input type="checkbox" class="comn-form-checkbox" name="reraregistered" value="rera registered" id="reraregistered"></label>
                    <div class="rera-data-row">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="comn-form-group">
                                    <label class="comn-form-lable">RERA Number <span class="required-text">*</span></label>
                                    <input type="text"  name="rera_number"  class="comn-form-control" placeholder="0156154650">
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="comn-form-group">
                                    <label class="comn-form-lable">RERA end date <span class="required-text">*</span></label>
                                    <input type="text"  name="rera_end_date"  class="comn-form-control" placeholder="18-09-2023">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <h2 class="detail-box-title">select amenities</h2>
                            <div class="amenities-data-row"> 
                                Select Amenities 
                            </div>
                            <button type="button" class="comn-btn remove-round-effect-btn select_amentites_btn" data-bs-toggle="modal" data-bs-target="#amenities"><i class="fa-solid fa-plus"></i>select amenities</button>

                            <div class="modal fade add-unit-modal" id="amenities" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="amenitiesLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header p-0 m-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                        <div class="modal-body pb-0">
                                            <div class="properties-detail-comn-box">
                                                <div class="add-manually-row">
                                                    <h2 class="detail-box-title">amenities</h2>
                                                    <button class="comn-btn remove-round-effect-btn" id="amenities-add-manually-btn"><i class="fa-solid fa-plus"></i> add manually</button>
                                                </div>
                                                <div class="add-manually-box" id="add-manually-amenities-box">
                                                    <div class="row align-items-end">
                                                        <div class="col-12 col-sm">
                                                            <div class="comn-form-group mb-0">
                                                                <label class="comn-form-lable">Add amenities</label>
                                                                <input type="text" class="comn-form-control" id="add_amenities_value" placeholder="enter here">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="comn-btn-row">
                                                                <button class="comn-btn comn-border-btn" id="delete-amenities-box">cancel</button>
                                                                <button class="comn-btn comn-btn-px30" id="add_amenities_btn">add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span style="color:red;display:none" id="amenities_error">Please Enter Value</span>
                                                </div>
                                                <ul class="amenities-comn-list amenities_list">
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="gymnasium" class="comn-form-checkbox" id="gymnasium">
                                                        <label for="gymnasium">gymnasium</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="jogging/cycle track" class="comn-form-checkbox" id="joggingcycletrack">
                                                        <label for="joggingcycletrack">jogging/cycle track</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="indoor games" class="comn-form-checkbox" id="indoorgames">
                                                        <label for="indoorgames">indoor games</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="power backup" class="comn-form-checkbox" id="powerbackup">
                                                        <label for="powerbackup">power backup</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="clubhouse" class="comn-form-checkbox" id="clubhouse">
                                                        <label for="clubhouse">clubhouse</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="garden" class="comn-form-checkbox" id="garden">
                                                        <label for="garden">garden</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="water supply" class="comn-form-checkbox" id="watersupply">
                                                        <label for="watersupply">water supply</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="swimming pool" class="comn-form-checkbox" id="swimmingpool">
                                                        <label for="swimmingpool">swimming pool</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="medical facility" class="comn-form-checkbox" id="medicalfacility">
                                                        <label for="medicalfacility">medical facility</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="central AC" class="comn-form-checkbox" id="centralAC">
                                                        <label for="centralAC">central AC</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="24/7 security" class="comn-form-checkbox" id="247security">
                                                        <label for="247security">24/7 security</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="visitors parking" class="comn-form-checkbox" id="visitorsparking">
                                                        <label for="visitorsparking">visitors parking</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="kids play area" class="comn-form-checkbox" id="kidsplayarea">
                                                        <label for="kidsplayarea">kids play area</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="amenities[]" value="parking" class="comn-form-checkbox" id="parking">
                                                        <label for="parking">parking</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="properties-detail-comn-box mb-0">
                                                <div class="add-manually-row">
                                                    <h2 class="detail-box-title">nearby</h2>
                                                    <button class="comn-btn remove-round-effect-btn" id="nearby-add-manually-btn"><i class="fa-solid fa-plus"></i> add manually</button>
                                                </div>
                                                <div class="add-manually-box" id="add-manually-nearby-box">
                                                    <div class="row align-items-end">
                                                        <div class="col-3 col-sm">
                                                            <div class="comn-form-group mb-0">
                                                                <label class="comn-form-lable">Add NearBy</label>
                                                                <input type="text" class="comn-form-control" id="nearby_value" placeholder="enter here">
                                                            </div>
                                                        </div>
                                                        <div class="col-3 col-sm">
                                                            <div class="comn-form-group mb-0">
                                                                <label class="comn-form-lable">Add Property Distance (KM)</label>
                                                                <input type="number" class="comn-form-control" id="nearby_km_value" placeholder="enter here">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="comn-btn-row">
                                                                <button class="comn-btn comn-border-btn" id="delete-nearby-box">cancel</button>
                                                                <button class="comn-btn comn-btn-px30" id="nearby_add_btn">add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span style="color:red;display:none" id="nearby_error">Please Enter Both Value</span>
                                                </div>
                                                <ul class="amenities-comn-list nearby-comn-list">
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="hospital" class="comn-form-checkbox" id="hospital">
                                                        <label for="hospital">hospital</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="supermarket" class="comn-form-checkbox" id="supermarket">
                                                        <label for="supermarket">supermarket</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="school" class="comn-form-checkbox" id="school">
                                                        <label for="school">school</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="airpot" class="comn-form-checkbox" id="airpot">
                                                        <label for="airpot">airpot</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="metro" class="comn-form-checkbox" id="metro">
                                                        <label for="metro">metro</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="railway station" class="comn-form-checkbox" id="railwaystation">
                                                        <label for="railwaystation">railway station</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="bus stop" class="comn-form-checkbox" id="busstop">
                                                        <label for="busstop">bus stop</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="near_by[]" value="restaurant" class="comn-form-checkbox" id="restaurant">
                                                        <label for="restaurant">restaurant</label>
                                                        <input type="number" class="comn-form-control" name="property_distance[]" placeholder="Property Distance (KM)">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="comn-btn comn-border-btn" data-bs-dismiss="modal">cancel</button>
                                            <button type="button" class="comn-btn comn-btn-px30" id="nearby_submit_btn">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <h2 class="detail-box-title">your brokerage charges (%) <sub style="color: #999999;">(for a single unit)</sub></h2>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">min</label>
                                <input type="number" name="min_brokerage" class="comn-form-control" placeholder="17%">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">max</label>
                                <input type="number" name="max_brokerage" class="comn-form-control" placeholder="17%">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <h2 class="detail-box-title">project contact information</h2>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">mobile number 1 <span class="required-text">*</span></label>
                                <input type="number" name="mobile_no_1" class="comn-form-control" placeholder="+91(636) 296-7838">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">contact person name</label>
                                <input type="text" name="contact_person_name_1"  class="comn-form-control" placeholder="Mary Freund">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">mobile number 2 <span class="required-text">*</span></label>
                                <input type="number" name="mobile_no_2" class="comn-form-control" placeholder="+91(636) 296-7838">
                                <label class="label-small-text comn-form-lable rera-title-text" for="tick-if-whatsapp"><input type="checkbox" class="comn-form-checkbox" name="tick_if_whatsapp" value="Tick if this is a whatsapp no."  id="tick-if-whatsapp">Tick if this is a whatsapp no.</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">contact person name</label>
                                <input type="text" name="contact_person_name_2"  class="comn-form-control" placeholder="Bradley Lawlor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">landline number</label>
                                <input type="number" name="landline_number" class="comn-form-control" placeholder="+91(636) 296-7838">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">contact person name</label>
                                <input type="text" name="contact_person_name_3" class="comn-form-control" placeholder="Mary Freund">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">project email</label>
                                <input type="email" name="project_email" class="comn-form-control" placeholder="j.jones@outlook.com">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">project website</label>
                                <input type="text" name="project_website" class="comn-form-control" placeholder="www.tempsite.com">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="owner-info" class="tab-pane" role="tabpanel" aria-labelledby="owner-info">
                    <h2 class="detail-box-title">property owner detail</h2>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">first name <span class="required-text">*</span></label>
                                <input type="text" name="first_name" class="comn-form-control" value="Judith Rodriguez">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">middle name <span class="required-text">*</span></label>
                                <input type="text" name="middle_name" class="comn-form-control" value="Rodger">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">last name <span class="required-text">*</span></label>
                                <input type="text" name="last_name" class="comn-form-control" value="Warf">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">mobile number 1 <span class="required-text">*</span></label>
                                <input type="number" name="owner_mobile_no_1" class="comn-form-control" value="+91(920) 948-1722">
                                <label class="label-small-text comn-form-lable rera-title-text" for="tick-if-whatsapp-2"><input type="checkbox" class="comn-form-checkbox" name="owner_tick_if_wp_1" value="yes" id="tick-if-whatsapp-2">Tick if this is a whatsapp no.</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">mobile number 2 <span class="required-text">*</span></label>
                                <input type="number" name="owner_mobile_no_2" class="comn-form-control" value="+91(504) 896-6913">
                                <label class="label-small-text comn-form-lable rera-title-text" for="tick-if-whatsapp-3"><input type="checkbox" class="comn-form-checkbox" name="owner_tick_if_wp_2" value="yes" id="tick-if-whatsapp-3">Tick if this is a whatsapp no.</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">email</label>
                                <input type="text" name="owner_email" class="comn-form-control" value="j.e.dukes@aol.com">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">address</label>
                                <button type="button" class="comn-btn" data-bs-toggle="modal" data-bs-target="#addAddress"><i class="fa-solid fa-plus"></i>add</button>
                                <div class="modal fade add-unit-modal" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAddressLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="detail-box-title mb-0">Add address</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row row-gap-10">
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">country</label>
                                                            <input type="text" name="address_country" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">state</label>
                                                            <input type="text" name="address_state" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">district</label>
                                                            <input type="text" name="address_district" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">taluka / tehsil</label>
                                                            <input type="text" name="address_taluka" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">city / town / locality</label>
                                                            <input type="text" name="address_city" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">address line 1</label>
                                                            <input type="text" name="address_line_1" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">address line 2</label>
                                                            <input type="text" name="address_line_2" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">landmark</label>
                                                            <input type="text" name="address_landmark" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="comn-form-group">
                                                            <label class="comn-form-lable">Add note</label>
                                                            <input type="text" name="address_note_1" class="comn-form-control" placeholder="-">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="comn-btn comn-border-btn" data-bs-dismiss="modal">cancel</button>
                                                <button type="button" class="comn-btn comn-btn-px30">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="comn-form-group">
                                <label class="comn-form-lable">Add note</label>
                                <input type="text" name="address_note_2" class="comn-form-control" placeholder="-">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
@endsection
@section('script')
<script src="{{ asset('js/seller_&_buyer_form.js') }}"></script>
    <script> 
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      };
 //  $('#myForm').validate({
        //     rules: {
        //         name: {value.id
        //             required: true
        //         }
        //     },
        //     messages: {
        //         name: {
        //             required: 'Please Enter Your Name'
        //         }
        //     }
        // });

        // $('#smartwizard').on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        //     var elmForm = $("#form-step-" + stepNumber);
        //     if (stepDirection === 'forward' && elmForm) {
        //         // elmForm.validator('validate');
        //         // var elmErr = elmForm.children('.has-error');
        //         // if (elmErr && elmErr.length > 0) {
        //         //     return false;
        //         // }
        //         if ($('#myForm').valid()) {
        //             return true
        //         } else {
        //             return false
        //         }
        //     }
        //     return true;
        // })
    </script>
@endsection