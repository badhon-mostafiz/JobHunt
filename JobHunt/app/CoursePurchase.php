<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePurchase extends Model
{
    use HasFactory;
    protected $table = 'course_purchases';

    protected $fillable = [
        'course_id',
        'user_id',
        'payment_option_id',
    ];
}
