<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone',
        'date_of_birth',
        'address',
        'hospital_area',
        'rating'
    ];
}

