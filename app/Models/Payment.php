<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    'date',
    'paymenttype',
    'referencenum',
    'bankname',
    'depositdate',
    'note',
    'paymentmode',
    'amount',
    'attachment',
    'transcation_id',
];

    public function transcation()
    {
        return $this->belongsTo(Transcation::class);
    }
}
