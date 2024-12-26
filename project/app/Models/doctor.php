<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

protected $table = 'doctors';
protected $primaryKey = 'doctor_id';
protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
    'date_of_birth',
    'hire_date',
    'availability_time_start',
    'availability_time_end',
    'availability_week',
    'experience',
    'education',
    'details',
    'profile_picture',
    'user_id',
    'city_id',
    'category_id',
];

}
