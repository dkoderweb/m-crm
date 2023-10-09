<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;
    public static function storeAmenities($data,$propery_id){
        foreach($data->nearByValue as $nearby){
            $amenities = new Amenities;
            $amenities->propertie_id = $propery_id;
            $amenities->amenities =  $nearby ;  
            $amenities->save();
        }        
        return true;
    }
}
