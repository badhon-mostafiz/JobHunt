<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skillset extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    use HasFactory;
    protected $table = 'skillsets';

    protected $fillable = [
        'name',
        'user_id',
    ];
    
}
