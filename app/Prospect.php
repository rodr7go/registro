<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $fillable = [
        'website',
        'url',
        'address',
        'order',
        'email',
        'phone',
        'contact_name',
        'comments',
        'tracing',//Seguimiento
        'status'
    ];
}
