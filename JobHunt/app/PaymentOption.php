<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    use HasFactory;
    protected $table = 'payment_options';

    protected $fillable = [
        'name',
        'user_id',
    ];
}
