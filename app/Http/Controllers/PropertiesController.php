<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Units;
use App\Models\Amenities;


class PropertiesController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index(){
        return view('pages.Properties.index');
    }
    public function add_seller(){
        return view('pages.Properties.add_seller');
    }
    public function store(Request $request){
        // return $request;
        if($request->form_type == "seller"){
            $propery_id = Properties::storeProperties($request);
        }
        else{
            $propery_id = Properties::storePropertiesBuyer($request);
        }
        if($request->unit_values){
          return  Units::storeUnits($request , $propery_id);
        }
        if($request->nearByValue){
            Amenities::storeAmenities($request,$propery_id);
        }
        if($request->form_type == "seller"){
            return redirect('/properties')->with('property_store','Seller Added successfully');
        }
        else{
            return redirect('/properties')->with('property_store','Buyer Added successfully');
        }
    }
    public function add_buyer(){
        return view('pages.Properties.add_buyer');
    } 

}
