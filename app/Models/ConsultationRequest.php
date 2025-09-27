<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    protected $fillable = [
        'name','contact','email','has_apartment','involvement','preferred'
    ];

    protected $casts = [
        'has_apartment' => 'boolean',
    ];
}