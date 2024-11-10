<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductNew extends Model
{
    use HasFactory;
    protected $table = 'product_new';
    protected $guarded = [];

    public function downlineComission()
    {
        return $this->hasOne(DownlineComission::class);
    }
    
    public function agencyComission()
    {
        return $this->hasOne(AgencyComission::class);
    }
}
