<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierContract extends Model
{
    use HasFactory;
    protected $table = 'carrier_contract';
    protected $fillable = [
        'carrier_info_id',
        'contract_content',
    ];

    public function carrierInfo()
    {
        return $this->belongsTo(CarrierInfo::class);
    }
}
