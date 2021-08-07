<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Vendors extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [

        'company_name',
        'business_email',
        'phone_number',
        'contact_person_name',
        'contact_person_email',
        'address',
        'status',
        'comment',
    ];


}
