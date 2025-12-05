<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{       
    use HasFactory;

        protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'occupation',
        'group',
        'dob',
        'country',
        'city',
        'state',
        'zip',
        'street',
        'idname',
        'idno',
    ];
}
