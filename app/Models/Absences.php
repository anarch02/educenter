<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absences extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'group_id',
        'lesson_id',
        'days_of_week_id',
        'teacher_id',
        'date',
        'status',
    ];
}
