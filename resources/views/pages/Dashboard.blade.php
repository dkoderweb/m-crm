@extends('layouts.master')
@section('content')

<div class="title-header">
    <h1 class="crm-page-title">Dashboard</h1>
    <div class="title-right-row">
        <a href="add-seller.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add seller</a>
        <a href="add-buyer.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add buyer</a>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="dashboard-box">
            <h2 class="dashboard-box-title">all leads</h2>
            <div class="dashboard-box-middle">
                <aside>108+</aside>
                <div class="updown-pro-row">
                    <i class="fa-solid fa-arrow-trend-up color-green"></i>
                    <div class="dashboard-progress" id="dashboard-progress-1"></div>
                </div>
            </div>
            <div class="dashboard-box-bottom">
                <p class="dash-box-bottom-left"><i class="fa-regular fa-circle-check color-purple"></i>leads loaded</p>
                <p class="dash-box-bottom-right">details<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="dashboard-box">
            <h2 class="dashboard-box-title">leads added today</h2>
            <div class="dashboard-box-middle">
                <aside>32+</aside>
                <div class="updown-pro-row">
                    <i class="fa-solid fa-arrow-trend-down color-red"></i>
                    <div class="dashboard-progress" id="dashboard-progress-2"></div>
                </div>
            </div>
            <div class="dashboard-box-bottom">
                <p class="dash-box-bottom-left"><i class="fa-regular fa-circle-check color-purple"></i>leads loaded</p>
                <p class="dash-box-bottom-right">details<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="dashboard-box">
            <h2 class="dashboard-box-title">booking in progress</h2>
            <div class="dashboard-box-middle">
                <aside>16+</aside>
                <div class="updown-pro-row">
                    <i class="fa-solid fa-arrow-trend-up color-green"></i>
                    <div class="dashboard-progress" id="dashboard-progress-3"></div>
                </div>
            </div>
            <div class="dashboard-box-bottom">
                <p class="dash-box-bottom-left"><i class="fa-regular fa-circle-check color-purple"></i>leads loaded</p>
                <p class="dash-box-bottom-right">details<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dashboard-box">
            <h2 class="dashboard-box-title">confirmed booking</h2>
            <div class="dashboard-box-middle">
                <aside>46+</aside>
                <div class="updown-pro-row">
                    <i class="fa-solid fa-arrow-trend-down color-red"></i>
                    <div class="dashboard-progress" id="dashboard-progress-4"></div>
                </div>
            </div>
            <div class="dashboard-box-bottom">
                <p class="dash-box-bottom-left"><i class="fa-regular fa-circle-check color-purple"></i>leads loaded</p>
                <p class="dash-box-bottom-right">details<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dashboard-box">
            <h2 class="dashboard-box-title">booking rejected</h2>
            <div class="dashboard-box-middle">
                <aside>6+</aside>
                <div class="updown-pro-row">
                    <i class="fa-solid fa-arrow-trend-up color-green"></i>
                    <div class="dashboard-progress" id="dashboard-progress-5"></div>
                </div>
            </div>
            <div class="dashboard-box-bottom">
                <p class="dash-box-bottom-left"><i class="fa-regular fa-circle-check color-purple"></i>leads loaded</p>
                <p class="dash-box-bottom-right">details<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="dashboard-box pb-0 mb-0">
            <div class="chart-top-part">
                <h2 class="dashboard-box-title">monthly leads performance</h2>
                <div class="select-year-row">
                    <p>select year :</p>
                    <input type="text" class="year-picker" value="2023" maxlength="4">
                </div>
            </div>
            <div id="lead-performance-chart"></div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection