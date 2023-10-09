<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    public static function storeUnits($data, $propery_id){

        foreach($data->unit_values as $unit_value){
          return   $units = json_decode($unit_value);
            $unit = new Units;
            $unit->propertie_id = $propery_id; 
            $unit->residentialFlatBunglowRadio = $units->residentialFlatBunglowRadio; 
            $unit->commercialSpaceRadio = $units->commercialSpaceRadio; 
            $unit->plotandRadio = $units->plotandRadio; 
            $unit->propertyDetailsRadio = $units->propertyDetailsRadio; 
            $unit->total_no_unit = $units->total_no_unit; 
            $unit->min_carpet_area = $units->min_carpet_area; 
            $unit->max_carpet_area = $units->max_carpet_area; 
            $unit->saleable_area = $units->saleable_area; 
            $unit->rate_per = $units->rate_per; 
            $unit->price_per_unit = $units->price_per_unit; 
            $unit->stamp_duty_form = $units->stamp_duty_form; 
            $unit->stamp_duty_to = $units->stamp_duty_to; 
            $unit->registration_form = $units->registration_form; 
            $unit->registration_to = $units->registration_to; 
            $unit->gst_form = $units->gst_form; 
            $unit->gst_to = $units->gst_to; 
            $unit->infra_structure_development_form = $units->infra_structure_development_form; 
            $unit->infra_structure_development_to = $units->infra_structure_development_to; 
            $unit->price_per_unit_form = $units->price_per_unit_form; 
            $unit->price_per_unit_to = $units->price_per_unit_to; 
            $unit->ready_for_possesion = $units->ready_for_possesion; 
            $unit->future_date = $units->future_date; 
            $unit->save(); 

        }
        return true;

    }
}
