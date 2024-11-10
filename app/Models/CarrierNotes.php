<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierNotes extends Model
{
    use HasFactory;
    protected $table = 'carrier_notes';
    // protected $guarded = [];

    protected $fillable = [
        'carrier_info_id',
        'note_content',
    ];

    public function carrierInfo()
    {
        return $this->belongsTo(CarrierInfo::class);
    }
}
