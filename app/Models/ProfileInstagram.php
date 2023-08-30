<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInstagram extends Model
{
    use HasFactory;
    protected $table = 'dymantic_instagram_basic_profiles';
    protected $guarded = array();
}
