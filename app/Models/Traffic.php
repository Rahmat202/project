<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    use HasFactory;
    protected $table = 'traffic';
    protected $fillable = [
        'system_date',
        'page',
        'city',
        'country',
        'category_id',
        'sub_category',
        'serch_text',
        'customer_name',
        'ip_address',
       
    ];
}
