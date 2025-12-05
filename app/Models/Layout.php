<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{

    use HasFactory;

    protected $fillable = [
    'name',
    'type',
    'sqt',
    'attached',
    'view',
    'utypejson',
    'floorplan',
    'building_id',
];

    protected $casts = [
    'utypejson' => 'array',
    
];

    protected $appends = [
            'layoutsqft',
    
    ];

     public function building()
    {
        return $this->belongsTo(Building::class);
    }

        public function getlayoutsqftAttribute() 
    {
        // return $this->sum->utypejson['sqt']??10;
        $total = 0;
        if (is_array($this->utypejson)) {
            foreach ($this->utypejson as $t) {
                $total += $t['sqt']?? 0;
            }
        }

        return $total;
    }
    

    



}
