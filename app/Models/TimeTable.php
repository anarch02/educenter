<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'group_id',
        'class_room_id',
        'lesson_id',
        'days_of_week_id'
    ];

    /**
     * Get the branch that owns the TimeTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * Get the group that owns the TimeTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get the classRoom that owns the TimeTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classRoom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    /**
     * Get the lesson that owns the TimeTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    /**
     * Get the daysOfWeek that owns the TimeTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function daysOfWeek(): BelongsTo
    {
        return $this->belongsTo(DaysOfWeek::class);
    }

}
