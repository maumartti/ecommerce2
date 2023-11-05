<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingCompany extends Model
{
    use HasFactory;
    protected $table = 'shipping_companies';
    protected $guarded = array();

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'region_company', 'company_id', 'region_id');
    }
    public function offices()
    {
        return $this->hasMany(ShippingOfficeCompanyRegion::class, 'company_id', 'id');
    }
}
