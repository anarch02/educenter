<?php

use App\Models\Branch;
use App\Models\ClassRoom;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\DaysOfWeek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('time_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Branch::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Group::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ClassRoom::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Lesson::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\DaysOfWeek::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_tables');
    }
};
