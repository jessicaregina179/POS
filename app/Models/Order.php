<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'ivoice', 
        'customer_id',
        'user_id',
        'total'
    ];
}
