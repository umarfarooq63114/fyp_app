<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable=[
        'technician_name',
        'technician_category',
        'technician_no',
        'technician_rating',
        'technician_cnic',
        'technician_address'
    ];
}
