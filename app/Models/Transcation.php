<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcation extends Model
{

    use HasFactory;

    protected $fillable = [
    'contractdate',
    'name',
    'unit_id',
    'reference',
    'ledger_id',
    'agent_id',
    'leasemonths',
    'freemonths',
    'startdate',
    'expdate',
    'enddate',
    'rentpermonthamt',
    'totalrentamt',
    'depositamt',
    'bankcharge',
    'installment',
    'salespost',
    'receiptpost',
    'refundrentamt',
    'refunddepositamt',
    'ptype',
    'paydate',
    'pmode',
    'pymtcollectedby',
    'Pymtdocnumber',
    'attachment',
];

  protected $appends = [
            'buildingname',
    ];

        public function getbuildingnameAttribute() 
    {
        //  return $this->layout->sum(function($sqt){return $sqt->utypejson['sqt']??0;});
        // $this->load('layout');
        // $this->layout->each(function ($squarefeet) {
        //     $squarefeet->append('layoutsqft');
        // }) ;
        //  return $this->Unit::get('building.name');
        return 'saqib';
    }

     public function ledger()
    {
        return $this->belongsTo(Ledger::class, 'ledger_id');
    }

    /**
     * Get the agent ledger associated with the model.
     */
    public function agent()
    {
        return $this->belongsTo(Ledger::class, 'agent_id');
    }

     public function building()
    {
        return "";//$this->belongsTo(Unit::class, 'unit_id')->get();
    }

     public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    protected $casts = [
    'attachment' => 'array',
];

   public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

}


