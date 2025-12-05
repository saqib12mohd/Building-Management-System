<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'btype',
        'country',
        'city',
        'state',
        'street',
        'securityname',
        'securitymobile',
        'nooflift',
        'activatedon',
        'deactivatedon',
    ];

     public function layout()
    {
        return $this->hasMany(Layout::class);
    }

     public function unit()
    {
        return $this->hasMany(Unit::class);
    }
}
