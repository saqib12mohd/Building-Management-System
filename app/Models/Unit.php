<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sqt',
        'status',
        'layout_id',
        'building_id',
        
    ]; 

     protected $appends = [
            'unitsqft',
    ];

   

    public function layout()
    {
        return $this->belongsTo(Layout::class, 'layout_id');
    }

     public function building()
    {
        return $this->belongsTo(Building::class);
    }

        public function getunitsqftAttribute() 
    {
        //  return $this->layout->sum(function($sqt){return $sqt->utypejson['sqt']??0;});
        $this->load('layout');
        $this->layout->each(function ($squarefeet) {
            $squarefeet->append('layoutsqft');
        }) ;
         return $this->layout::get('name');
    }
}
