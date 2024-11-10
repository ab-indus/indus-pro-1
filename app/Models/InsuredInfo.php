<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuredInfo extends Model
{
    use HasFactory;
    protected $table = 'insured_info';
    protected $fillable = [
        'individualOrCommercial',
        'product1',
        'product2',
        'firstname',
        'middleInitial',
        'lastname',
        'suffix',
        'maritalStatus',
        'dateOfBirth',
        'gender',
        'email',
        'phone',
        'homeAddress',
        'city',
        'state',
        'zipCode',
        'mailingSameAsHome',
        'mailingAddress',
        'mailingCity',
        'mailingState',
        'mailingZipCode',
        'recentMove',
        'priorMailingAddress',
        'priorCity',
        'priorState',
        'priorZipCode',
    ];
}
