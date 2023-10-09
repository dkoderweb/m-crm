@extends('layouts.master')
@section('content') 
<div class="title-header">
    <h1 class="crm-page-title">Properties</h1>
    <div class="title-right-row">
        <a href="{{ route('properties.add_seller') }}" class="comn-btn"><i class="fa-solid fa-plus"></i> add seller</a>
        <a href="{{ route('properties.add_buyer') }}" class="comn-btn"><i class="fa-solid fa-plus"></i> add buyer</a>
    </div>
</div>

<div class="row properties-row">
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-2.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text buyer-bg">buyer</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-3.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-2.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text buyer-bg">buyer</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-3.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-2.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text buyer-bg">buyer</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-3.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-2.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text buyer-bg">buyer</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-3.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-2.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text buyer-bg">buyer</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-3.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-4 col-xxl-3 col-xxxl-2">
        <a href="properties-detail.html" class="properties-box">
            <div class="properties-image">
                <img src="images/properties-image-1.jpg" alt="">
                <span class="properties-rera-text"><i class="fa-solid fa-circle-check"></i>Rera verified</span>
            </div>
            <div class="properties-detail">
                <div class="properties-detail-top">
                    <span class="seller-buyer-text seller-bg">seller</span>
                    <div class="properties-detail-top-right">
                        <div class="info-hover-row">
                            <img src="images/properties-info-icon.svg" alt="">
                            <div class="you-can-see-row">
                                <aside><img src="images/blue-close-lock-icon.svg" alt="">only you can see</aside>
                                <aside><img src="images/blue-open-lock-icon.svg" alt="">visible to all</aside>
                            </div>
                        </div>
                        <div class="properties-open-close-row">
                            <button class="open-close-btn close-properties"><img src="images/white-close-lock-icon.svg" alt=""></button>
                            <button class="open-close-btn open-properties"><img src="images/white-open-lock-icon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="properties-data-row">
                    <p class="broker-title"><img src="images/pro-list-icon-1.svg" alt=""> property name</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-2.svg" alt=""> property location vaghodia, vadodara</p>
                    <p class="broker-subtitle"><img src="images/pro-list-icon-3.svg" alt=""> brokerage : 1.0% -3.0.%</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        @if((session()->has('property_store'))  )
            $(document).ready(function(){
                toastr.success("{{session()->get('property_store')}}")
            });
        @endif
    });
</script>
@endsection