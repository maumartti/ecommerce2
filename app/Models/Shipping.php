<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    protected $guarded = array();

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}