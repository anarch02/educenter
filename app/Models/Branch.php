<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the class_rooms for the Branch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function class_rooms(): HasMany
    {
        return $this->hasMany(ClassRoom::class);
    }

    /**
     * Get all of the students for the Branch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get all of the teachers for the Branch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }

    /**
     * Get all of the groups for the Branch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    /**
     * Get all of the timetable for the Branch
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timetable(): HasMany
    {
        return $this->hasMany(TimeTable::class);
    }
}
