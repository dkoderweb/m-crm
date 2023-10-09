<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    public static function storeProperties($data){
        $property = new Properties; 
        $property->user_id = Auth()->user()->id;
        $property->form_type = $data->form_type;
        $property->iWantToSellRadio = $data->iWantToSellRadio;
        $property->no_of_units = $data->no_of_units;
        $property->country = $data->country;
        $property->state = $data->state;
        $property->district = $data->district;
        $property->taluka = $data->taluka;
        $property->city = $data->city;
        $property->landmark = $data->landmark;
        $property->pin_code = $data->pin_code;
        $property->project_building_name = $data->project_building_name;
        $property->developer_name = $data->developer_name;
        $property->reraregistered = $data->reraregistered;
        $property->rera_end_date = $data->rera_end_date;
        $property->min_brokerage = $data->min_brokerage;
        $property->max_brokerage = $data->max_brokerage;
        $property->mobile_no_1 = $data->mobile_no_1;
        $property->contact_person_name_1 = $data->contact_person_name_1;
        $property->mobile_no_2 = $data->mobile_no_2;
        $property->contact_person_name_2 = $data->contact_person_name_2;
        $property->landline_number = $data->landline_number;
        $property->tick_if_whatsapp = $data->tick_if_whatsapp;
        $property->contact_person_name_3 = $data->contact_person_name_3;
        $property->project_email = $data->project_email;
        $property->project_website = $data->project_website;
        $property->first_name = $data->first_name;
        $property->middle_name = $data->middle_name;
        $property->last_name = $data->last_name;
        $property->owner_mobile_no_1 = $data->owner_mobile_no_1;
        $property->owner_mobile_no_2 = $data->owner_mobile_no_2;
        $property->owner_email = $data->owner_email;
        $property->owner_tick_if_wp_1 = $data->owner_tick_if_wp_1;
        $property->owner_tick_if_wp_2 = $data->owner_tick_if_wp_2;
        $property->address_country = $data->address_country;
        $property->address_state = $data->address_state;
        $property->address_district = $data->address_district;
        $property->address_taluka = $data->address_taluka;
        $property->address_city = $data->address_city;
        $property->address_line_1 = $data->address_line_1;
        $property->address_line_2 = $data->address_line_2;
        $property->address_landmark = $data->address_landmark;
        $property->address_note_1 = $data->address_note_1;
        $property->address_note_2 = $data->address_note_2;
        $property->lock_or_unlock = $data->lock_or_unlock;
        $property->save();
        return true;
    }
    public static function storePropertiesBuyer($data){
        $property = new Properties; 
        $property->user_id = Auth()->user()->id;
        $property->form_type = $data->form_type;
        $property->full_name = $data->full_name;
        $property->buyerStatusRadio = $data->buyerStatusRadio;
        $property->budget = $data->budget;
        $property->purpose = $data->purpose;
        $property->loan_req = $data->loan_req;
        $property->ready_for_possesion = $data->ready_for_possesion;
        $property->future_date = $data->future_date;
        $property->monthly_income = $data->monthly_income;
        $property->profession = $data->profession; 
        $property->save();
        return true;
    }
}
