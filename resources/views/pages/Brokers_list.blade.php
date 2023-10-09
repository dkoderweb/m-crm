@extends('layouts.master')
@section('content') 
<div class="title-header">
    <h1 class="crm-page-title">Brokers List</h1>
    <div class="title-right-row">
        <a href="add-seller.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add seller</a>
        <a href="add-buyer.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add buyer</a>
    </div>
</div>
<div class="dashboard-box mb-0">
    <div class="brok-list-top">
        <aside class="show-entries-row">
            <span>Show</span>
            <select class="comn-form-control">
               <option>10</option>
               <option>25</option>
               <option>50</option>
               <option>100</option>
            </select>
            <span>Entries out of <b>100</b></span>
        </aside>
        <div class="dropdown filter-btn">
            <button type="button" class="comn-btn comn-border-btn" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-filter"></i>filter</button>
            <div class="dropdown-menu filter-menu">
                <button class="comn-btn comn-border-btn remove-round-effect-btn w-100 mb-3"><i class="fa-solid fa-location-crosshairs"></i>use current location</button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">select state</label>
                            <select class="comn-form-control">
                              <option>&nbsp;</option>
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">select taluka/tehsil</label>
                            <select class="comn-form-control">
                           <option>&nbsp;</option>
                           <option>option 1</option>
                           <option>option 2</option>
                           <option>option 3</option>
                       </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">select city</label>
                            <select class="comn-form-control">
                           <option>&nbsp;</option>
                           <option>option 1</option>
                           <option>option 2</option>
                           <option>option 3</option>
                       </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">enter locality</label>
                            <input type="text" class="comn-form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">verified</label>
                            <div class="comn-check-radio-row">
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="verifiednotverified" id="verified">
                                    <label for="verified">verified</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="verifiednotverified" id="notverified">
                                    <label for="notverified">not verified</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">rera registration</label>
                            <div class="comn-check-radio-row">
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="reraregisterednotregistered" id="reraregistered">
                                    <label for="reraregistered">rera registered</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="reraregisterednotregistered" id="notregistered">
                                    <label for="notregistered">not registered</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="comn-form-group">
                            <label class="comn-form-lable">active since</label>
                            <div class="comn-check-radio-row">
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="weeks" id="1week">
                                    <label for="1week">1 week</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="weeks" id="2week">
                                    <label for="2week">2 week</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="weeks" id="3week">
                                    <label for="3week">3 week</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="weeks" id="4week">
                                    <label for="4week">4 week</label>
                                </div>
                                <div class="comn-check-radio-group">
                                    <input type="radio" name="weeks" id="1month">
                                    <label for="1month">1 month</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comn-btn-row justify-content-end">
                    <button class="comn-btn comn-btn-px30 comn-border-btn">clear</button>
                    <button class="comn-btn comn-btn-px30">apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="broker-list-row">
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-1.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-2.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-3.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-4.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-5.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-6.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-7.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-8.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-9.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
        <div class="broker-list-column">
            <div class="broker-detail broker-detail-flex">
                <div class="broker-image"><img src="images/broker-profile-10.jpg" alt=""></div>
                <div class="broker-data">
                    <p class="broker-title"><i class="fa-solid fa-user"></i>Jerry Helfer</p>
                    <p class="broker-subtitle"><i class="fa-solid fa-briefcase"></i>1456 Veltri Drive, Anchorage, AK 99502</p>
                </div>
            </div>
            <div class="broker-detail">
                <p class="broker-title">association : 0</p>
                <p class="broker-subtitle"><i class="fa-solid fa-star"></i>4.5</p>
            </div>
            <div class="broker-detail">
                <p class="broker-title">7 D - 0 L - 0 FU - 0 SV</p>
                <p class="broker-subtitle broker-subtitle-flex"><span>06/07/2023</span> <span>06:19 pm</span></p>
            </div>
            <div class="broker-detail">
                <p class="broker-title"><span class="phone-whatsapp-row"><i class="fa-solid fa-phone"></i>or <img src="images/whatsapp-icon.svg" alt=""></span> +91 0123456789</p>
                <p class="broker-subtitle"><i class="fa-solid fa-envelope"></i>tempmail@gmail.com</p>
            </div>
        </div>
    </div>
    <ul class="comn-pagination">
        <li><a href="" class="prev"><i class="fa-solid fa-angle-left"></i></a></li>
        <li><a href="" class="active">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li><a href="" class="next"><i class="fa-solid fa-angle-right"></i></a></li>
    </ul>
</div>
@endsection
@section('script')
    
@endsection