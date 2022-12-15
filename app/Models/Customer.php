<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'category_id',
        'country_id',
        'city',
        'P_name',
        'P_address',
        'webUrl',
        'remark',
        'image',
        'img_resolution',
        'keyword',
        'imgstatus',
        'user_id',
        'addedBy',
        'addedOn',
        'updatedBy',
        'updatedOn',
    ];

}
