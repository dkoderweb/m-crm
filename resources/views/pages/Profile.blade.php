@extends('layouts.master')
@section('content') 
<div class="title-header">
    <h1 class="crm-page-title">My Profile</h1>
    <div class="title-right-row">
        <a href="add-seller.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add seller</a>
        <a href="add-buyer.html" class="comn-btn"><i class="fa-solid fa-plus"></i> add buyer</a>
    </div>
</div>
<div class="dashboard-box profile-box">
    <div class="row">
        <div class="col-xl-4">
            <aside class="profile-box-title">personal information</aside>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">full name</label>
                        <input type="text" class="comn-form-control" value="user">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">primary mobile number</label>
                        <input type="text" class="comn-form-control" value="+91 1234567896">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">secondary mobile number</label>
                        <input type="text" class="comn-form-control" value="+91 1234567896">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">email</label>
                        <input type="email" class="comn-form-control" value="tempmail@gmail.com">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">rera number</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">address</label>
                        <input type="text" class="comn-form-control" value="4319 Wakefield Street, Philadelphia, PA 19126">
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="comn-btn comn-btn-px30"><i class="fa-solid fa-pen-to-square"></i>edit</button>
            </div>
        </div>
        <div class="col-xl-4">
            <aside class="profile-box-title">bank account details</aside>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">select account type</label>
                        <select class="comn-form-control">
                            <option value="saving">Saving</option>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">select bank name</label>
                        <select class="comn-form-control">
                            <option value="SBI">SBI</option>
                            <option>HDFC</option>
                            <option>BOI</option>
                            <option>BOB</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">bank branch</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">account number</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">IFSC code</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">PAN number</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">GST number</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">UPI Id</label>
                        <input type="text" class="comn-form-control" value="-">
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="comn-btn comn-btn-px30"><i class="fa-solid fa-pen-to-square"></i>edit</button>
            </div>
        </div>
        <div class="col-xl-4">
            <aside class="profile-box-title">area of work</aside>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">state</label>
                        <input type="text" class="comn-form-control" value="state name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">district</label>
                        <input type="text" class="comn-form-control" value="district name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">taluka / tehsil</label>
                        <input type="text" class="comn-form-control" value="taluka name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">city / town / locality</label>
                        <input type="text" class="comn-form-control" value="city name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="comn-form-group">
                        <label class="comn-form-lable">locality</label>
                        <input type="text" class="comn-form-control" value="locality name">
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="comn-btn comn-btn-px30"><i class="fa-solid fa-pen-to-square"></i>edit</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection