<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsPengajuan extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(MsCustomer::class, 'customer_id');
    }
}
