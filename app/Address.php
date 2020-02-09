<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable=[
        'first_name',
        'last_name',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'country'
    ];
}
