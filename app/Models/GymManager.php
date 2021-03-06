<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymManager extends Model {
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'gym_id',
    ];
}