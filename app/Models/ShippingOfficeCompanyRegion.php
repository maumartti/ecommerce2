<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingOfficeCompanyRegion extends Model
{
    use HasFactory;
    protected $table = 'shipping_office_company_region';
    protected $guarded = array();

    // public function regions()
    // {
    //     return $this->belongsToMany(Region::class, 'region_company', 'company_id', 'region_id');
    // }
}
