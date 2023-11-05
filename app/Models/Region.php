<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $guarded = array();

    public function companies()
    {
        return $this->belongsToMany(ShippingCompany::class, 'region_company', 'region_id', 'company_id');
    }
    public function offices()
    {
        return $this->hasMany(ShippingOfficeCompanyRegion::class, 'region_id', 'id');
    }
}
